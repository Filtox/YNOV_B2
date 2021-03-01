#include <iostream>
#include <vector>
#include <string>

using namespace std;

int main()
{
    // Le tableau de chiffres
    vector <int> chiffres;

    // boucle infinie
    while(1){
        int i;
        char c[10];
        cout << "Entrer un chiffre :" << endl;

        // On lit 10 caractère max sur l'entrée standard
        cin.getline(c,10);

        // On convertie notre ligne en string
        string str(c);

        // On regarde si notre ligne est vide
        if (str.size()==0){
            break;
        }

        // Si on ne peut convertir notre ligne en entier, une exception est levée
        try {
            i = stoi(c);
            cout << "Je rajoute au tableau" << endl;
            chiffres.push_back(i);
        }  catch (invalid_argument e) {

            cout << "Veuillez saisir un chiffre" << endl;
        }

    }

    cout << "Taille du tableau :" << chiffres.size() << endl;
    int total = 0 ;

    // Syntaxe pour un foreach en cpp
    for ( int x : chiffres) {
        total += x;
    }

    // On convertit total & chiffres.size en float
    float moyenne = float(total) / float(chiffres.size());
    cout << "Moyenne : " << moyenne << endl;
}
