#include <iostream>
#include <cstdlib>

using namespace std;

struct cedula
{
	int ced, valor, min;
	cedula * sig;
};


typedef struct cedula * registro;
registro cab, ant, p;
string resp;

int main()
{
	registro reg=new(struct cedula);
	cab=reg;
	ant=reg;
	cab->sig=NULL;
	cout << "Desea ingresar un empleado? (s/n) ";
	cin >> resp;
	while (resp == "s")
	{
		registro reg=new(struct cedula);
		cout << "¿Cual es el numero de cedula? ";
		cin >> reg->ced;
		
		cout << "¿Cual es el valor del plan? ";
		cin >> reg->valor;
		
		cout << "¿Cuales son la cantidad de minutos? ";
		cin >> reg->min;
		
		reg->sig=NULL;
		ant->sig=reg;
		ant=reg;
		cout << "Desea ingresar un empleado? (s/n) ";
		cin >> resp;
	}
}
