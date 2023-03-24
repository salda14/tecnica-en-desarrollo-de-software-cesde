<?php
//Incluir el archivo de conexión
require_once "conexion.php";

//Crear las variables y las inicializamos en vacio
$username = $password = $comfirm_password = "";

$username_err = $password_err = $comfirm_password_err = '';

//Proceso de enviar los datos del formulario a la base de datos
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    //Validar que el campo usuario no esté vacío
    //Trim elimina los espacios en blanco
    if(empty(trim($_POST['usuario'])))
    {
        $username_err="Por favor ingrese un usuario";
    }
    else
    {
        //Crear una consulta de ese sql que verifique cuantos usuarios hay con los mismos caracteres, lo almacenamos en una variable

        $sql="SELECT id FROM registro WHERE usuario = ?";

        //mysqli_prepare  es una sentencia de sql que mejora la seguridad y el rendimiento de la aplicación
        if($prepare=mysqli_prepare($conexion,$sql))
        {
            mysqli_stmt_bind_param($prepare,"s",$parametro_usuario);
            //mysqli_stmt_bind_param es usada para enlazar variables que envían las consultas de SQL

            $parametro_usuario=trim($_POST['usuario']);

            //mysqli_stmt_execute() ejecuta una consulta previamente preparada en msqli_prepare

            if(mysqli_stmt_execute($prepare))
            {
                mysqli_stmt_store_result($prepare);
                if(mysqli_stmt_num_rows($prepare)==1)
                {
                    $username_err="Este usuario ya está registrado!!";
                }
                else
                {
                    $username=trim($_POST['usuario']);
                }
            }
            else
                {
                    echo"Al parecer algo salió mal";
                }
            mysqli_stmt_close($prepare);
            // Validar la contraseña 

            //1.Validar que el campo no esté vacío

            if(empty(trim($_POST['clave'])))
            {
                $password_err="Por favor ingrese una contraseña";
            }

            //2. Validar que al menos tenga 6 carcateres

            else if(strlen(trim($_POST['clave']))<6)
            {
                $password_err="La contraseña debe contener al menos 6 caracteres";
            }
            else
            {
                $password=trim($_POST['clave']);
            }

            //Validar el campo confirmar contraseña
            
            if(empty(trim($_POST['clave_comfirm'])))
            {
                    $comfirm_password_err="Debes de validar tu contraseña";
            }   
            else
            {
                $comfirm_password=trim($_POST['clave_comfirm']);
                if(empty($password_err) && ($password != $comfirm_password))
                {
                    $comfirm_password_err="No coinciden las contraseñas";
                }
            }

            //Validar que todos los campos de error estén vacíos
            if(empty($username_err) && empty($password_err) && empty($comfirm_password_err))
            {
                //Crear la consulta
                $sql="INSERT INTO registro (usuario,clave) VALUES (?,?)";
                if($prepare=mysqli_prepare($conexion,$sql))
                {
                
                mysqli_stmt_bind_param($prepare,"ss",$parametro_usuario,$parametro_clave);
                //Enviarle valores a los parámetros
                $parametro_usuario=$username;
                $parametro_clave=password_hash($password,PASSWORD_DEFAULT);

                if(mysqli_stmt_execute($prepare))
                {
                    echo "<script>
                    window.alert('Usuario registrado correctamente');
                    window.location.href='login.php';
                    </script>";
                }
                else
                {
                    echo "algo salió mal, por favor vuelve a intentarlo de nuevo";
                }

                }
                mysqli_stmt_close($prepare);
        

        }
        mysqli_close($conexion);
    }
}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registro</title>
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
        <h2>Registro</h2>
        <p>
            Por favor, complete este formulario para crear una cuenta.
        </p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="post"> <!--htmlspecialchars Para que reconozca caracteres especiales-->
    <div class="form-group" <?php echo(!empty($username_err)) ? 'has-error' : ''; ?> >
        <label for="">Usuario</label>
        <input type="text" name="usuario" class="form-control" value="<?php echo $username; ?>">
        <span class="help-block"> <?php echo $password_err; ?> </span>
    </div>  
    <div class="form-group" <?php echo(!empty($username_err)) ? 'has-error' : ''; ?> >
        <label for="">Contraseña</label>
        <input type="password" name="clave" class="form-control" value="<?php echo $username; ?>">
        <span class="help-block"> <?php echo $password_err; ?> </span>
    </div>
    <div class="form-group" <?php echo(!empty($comfirm_password_err)) ? 'has-error' : ''; ?> >
        <label for="">Confirmar contraseña</label>
        <input type="password" name="clave_comfirm" class="form-control" value="<?php echo $comfirm_password; ?>">
        <span class="help-block"> <?php echo $comfirm_password_err; ?> </span>
    </div>
    <div class="form-group"> <br> <br>
        <input type="submit" class="btn btn-outline-primary" value="Enviar Datos">
        <input type="reset"  class="btn btn-outline-primary" value="Borrar Datos">
    </div>
    <p>¿Ya tienes cuenta?<a href="login.php">Ingresa aquí</a></p>
    </form>
</div>  
</body>
</html>