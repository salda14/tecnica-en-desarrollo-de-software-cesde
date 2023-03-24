#include <iostream>
#include <cstdlib>

using namespace std;

struct numero
{
	int num;
	numero * sig;
};


typedef struct numero * registro;
registro cab, ant, p;
string resp;

int main()
{
	registro reg=new(struct numero);
	cab=reg;
	ant=reg;
	cab->sig=NULL;
	cout << "Desea ingresar un numero? (s/n) ";
	cin >> resp;
	while (resp == "s")
	{
		registro reg=new(struct numero);
		cout << "¿Cual es el numero? ";
		cin >> reg->num;
		reg->sig=NULL;
		ant->sig=reg;
		ant=reg;
		cout << "Desea ingresar un numero? (s/n) ";
		cin >> resp;
	}
	cout << "\n\n La lista de numeros es: \n";
	p=cab->sig;
	while ( p != cab)
	{
		cout << p->num << "\n";
		p=p->sig;
	}
	cout << "Desea ingresar otro numero? (s/n) ";
	cin >> resp;
	if(resp == "s")
	{
	registro reg1 = new (struct numero);
		cout <<"\nIngrese nuevo numero:  ";
		cin >> reg1->num;
		reg->sig=reg1;
		reg1->sig=NULL;
	}
	cout << "\n\n La lista de numeros con el nuevo registro es: \n";
	p=cab->sig;
	while ( p != cab)
	{
		cout << p->num << "\n";
		p=p->sig;
	}
}
