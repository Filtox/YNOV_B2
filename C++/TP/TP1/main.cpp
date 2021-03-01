#include <iostream>
#include <string>
using namespace std;

//void readContactsInfo(int* age,string* nom)
//{
//    cout << "Entrez votre age ainsi que votre nom" << endl;
//    cin >> *age >> *nom;


//}

void readContactsInfo(int& age,string& nom,const string& non_modifiable)
{
    cout << "Entrez votre age ainsi que votre nom" << endl;
    cin >> age >> nom;


}

int main()
{
    string non_modifiable = "non";
    int age = 0;
    string nom;

//    cout << "Entrez votre age ainsi que votre nom" << endl;
//    cin >> age >> nom; Bruh moment III

//    readContactsInfo(&age, &nom);
    readContactsInfo(age, nom, non_modifiable);

    cout << "Nom: " << nom << " Age: " << age << " " << non_modifiable << endl;

    return 0;
}
