#include <iostream>
#include <cstdlib>

using namespace std;

struct cedula
{
	int ced, valor, min, valorm;
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
		
		cout << "¿Cuales son la cantidad de minutos adicionales? ";
		cin >> reg->min;
		
		reg->sig=NULL;
		ant->sig=reg;
		ant=reg;
		cout << "Desea ingresar un empleado? (s/n) ";
		cin >> resp;
	}
	p=cab->sig;
	int valorm;
	while(p!=NULL)
	{
		if(p->min<200)
		{
			p->valorm = p->min * 300;
		}
		if(p->min >= 300)
		{
			p->valorm = p->min * 250;
		}
		cout << "\n El valor del plan para la cedula "<<p->ced<<" es: "<<p->valor;
		cout <<" y el valor de los minutos adicionales son: "<<p->valorm;
		p=p->sig;
	}
}
