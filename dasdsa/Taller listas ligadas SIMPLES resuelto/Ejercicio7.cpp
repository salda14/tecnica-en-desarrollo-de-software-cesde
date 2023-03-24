#include <iostream>
#include <cstdlib>

using namespace std;

struct numero
{
	int num;
	numero * sig;
};


typedef struct numero * registro;
registro cab, ant, p,q;
string resp;
int aux;

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
	cout <<"Desea organizar la lista? (s/n) ";
	cin >>resp;
	if(resp == "s")
	{
		p=cab->sig;
		//cab->liga_der;
		while(p != cab)
		{
			q=p->sig;
			while(q != cab)
				{
					if(p->num > q->num)
					{
						aux=p->num;
						p->num=q->num;
						q->num=aux;
					}
				q=q->sig;
		}
		p=p->sig;
		}
	}
	cout << "\n\n La lista de numeros es: \n";
	p=cab->sig;
	while ( p != cab)
	{
		cout << p->num << "\n";
		p=p->sig;
	}
}
