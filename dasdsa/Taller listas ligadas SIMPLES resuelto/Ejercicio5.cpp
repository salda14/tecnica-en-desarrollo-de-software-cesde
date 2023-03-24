#include <iostream>
#include <cstdlib>

using namespace std;
struct saldo
{
	string nom;
	int sal;
	saldo *sig;
};	

typedef struct saldo * registro;
registro cab, ant, p,q;
string resp;
int num;

int main() 
{
	registro reg=new(struct saldo);
	cab=reg;
	ant=reg;
	cab->sig=NULL;
	cout << "Desea ingresar un cliente? (s/n) ";
	cin >> resp;
	while (resp == "s")
	{
	
		registro reg=new(struct saldo);
		cout << "¿Cual es el nombre del cliente? ";
		cin >> reg->nom;
		cout << "¿Cual es el saldo del cliente? ";
		cin >> reg->sal;
		reg->sig=NULL;
		ant->sig=reg;
		ant=reg;
		cout << "Desea ingresar un cliente? (s/n) ";
		cin >> resp;
	}
	cout<<"Los clientes guardados son: \n";
	p=cab->sig;
	int num=1;
	while(p!=NULL)
	{
		cout<<"\n El cliente numero "<<num<<" es: "<<p->nom<<" y su saldo es: "<<p->sal;
		num++;
		p=p->sig;
	}
	cout << "\n Desea eliminar a los clientes con saldo 0? (s/n) ";
	cin >> resp;
	p=cab->sig;
	ant=cab;
	if(resp == "s")
	{
		while (p != NULL)
			{	
				if(p->sal == 0)
				{
					ant->sig=p->sig;
				}
				p=p->sig;
				ant=ant->sig;
			}	
	}	
	cout<<"Los clientes guardados son: \n";
	p=cab->sig;
	num=1;
	while(p!=NULL)
	{
		cout<<"\n El cliente numero "<<num<<" es: "<<p->nom<<"  y su saldo es: "<<p->sal;
		num++;
		p=p->sig;
	}
	
}
