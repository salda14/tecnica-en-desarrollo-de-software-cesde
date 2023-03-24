#include <iostream>
#include <cstdlib>

using namespace std;
struct empleado
{
	string nom;
	int sal;
	empleado *sig;
};	

typedef struct empleado * registro;
registro cab, ant, p;
string resp;

int main() 
{
	registro reg=new(struct empleado);
	cab=reg;
	ant=reg;
	cab->sig=NULL;
	cout << "Desea ingresar un empleado? (s/n) ";
	cin >> resp;
	while (resp == "s")
	{
	
		registro reg=new(struct empleado);
		cout << "¿Cual es el nombre del empleado? ";
		cin >> reg->nom;
		cout << "¿Cual es el salario del empleado? ";
		cin >> reg->sal;
		reg->sig=NULL;
		ant->sig=reg;
		ant=reg;
		cout << "Desea ingresar un empleado? (s/n) ";
		cin >> resp;
	}
	p=cab->sig;
	cout << "Los nombres de los empleados los cuales su salario es mayor o igual a un millon son: \n";
	while(p != NULL)
	{
		if(p->sal >= 1000000)
		{
			cout<<p->nom<<"\n";
		}
		p=p->sig;
	}
	return 0;
}
