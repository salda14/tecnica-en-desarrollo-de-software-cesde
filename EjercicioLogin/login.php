<?php

//Iniciar una sesión
session_start();

if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']===true)
{
    header('location:welcome.php');
    exit;
}
include_once('conexion.php');
$username = $password = "";
$username_err=$password_err="";

if($_SERVER["REQUEST_METHOD"]=="POST")

{
    //Verificar que el campo usuario no esté vacío
    if(empty(trim($_POST['usuario'])))

    {
        $username_err="Por favor una contraseña";
    }
    else
    {
        $password=trim($_POST['clave']);
    }
    if(empty($username_err) && empty($password_err))
    {
        $sql="SELECT id,usuario,clave FROM registro WHERE usuario =?";

        if($prepare=mysqli_prepare($conexion,$sql))
        {
            mysqli_stmt_bind_param($prepare, "s",$parametro_usuario);

            $parametro_usuario=$username;

            if(mysqli_stmt_execute($prepare))
            {
                mysqli_stmt_store_result($prepare);

                if(mysqli_stmt_num_rows($prepare)==1)
                {
                    mysqli_stmt_bind_result($prepare, $id, $username,$hashed_password);
                    if(mysqli_stmt_fetch($prepare))
                    {
                        //mysqli_stmt_fetch sirve para leer los resultados de acuerdo a una consulta

                        if(password_verify($password, $hashed_password=password_hash($password, PASSWORD_DEFAULT)))
                        {
                            session_star();

                            $_SESSION['loggedin']=true;
                            $_SESSION['id']=$id;
                            $_SESSION['usuario']=$username;

                            header('location:welcome.php');
                        }
                        else
                        {
                            $password_err="La contraseña que has ingresado no e correcta";
                        }
                    }
                    else
                    {
                        $username_err="No existe una cuenta registrada con ese nombre de usuario";
                    }

                }
                else
                {
                    echo "Algo salió mal, por favor vuelve a intentarlo";
                }
                
            }
            
        }
        mysqli_stmt_close($prepare);
    }
        mysqli_close($conexion);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body
        {
            font: 14px sans-serif;
        }
        .contenedor
        {
            width: 350px;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <h2>Login con PHP</h2>
        <p>
            Por favor, ingresar sus datos para iniciar sesión.
        </p>
        <form action="" method="post">
            <div class="form-control" <?php echo(!empty($username_err)) ? 'has-error' : ''; ?> > <!--Para validar que no haya error en el usuario, "Este nombre de usuario es incorrecto"-->
                <label for="">Usuario</label>
                <input type="text" name="usuario" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"> <?php echo $username_err; ?> </span>
            </div>
            <div class="form-group" <?php echo(!empty($password_err)) ? 'has-error' : ''; ?> >
                <label for="">Cotraseña</label>
                <input type="password" name="clave" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"> <?php echo $password_err; ?> </span>
            </div>
            <div class="form-group">
                <input type="submit" value="Ingresar" class="btn btn-outline-info">
            </div>
            <p>¿No tienes cuenta?<a href="registro.php">Regístrate ahora</a></p>
        </form>
    </div>   
</body>
</html>