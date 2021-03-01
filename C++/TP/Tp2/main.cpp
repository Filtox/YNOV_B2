#include <iostream>
#include <vector>
#include <string>
#include <map>

using namespace std;

int main()
{
    // Le tableau de chiffres
    map <string, int> chiffres;


    // boucle infinie
    while(1){
        char tmpNom[256];
        char tmpNote[10];

        cout << "Entrer un nom : " << endl;
        cin.getline(tmpNom,256);

        // Si le nom est vide on sort
        if (string(tmpNom).size()==0){
            break;
        }

        cout << "Entrer un chiffre :" << endl;

        // On lit 10 caractère max sur l'entrée standard
        cin.getline(tmpNote,10);

        // On convertie notre ligne en string
        string str(tmpNote);

        // On regarde si notre ligne est vide
        if (str.size()==0){
            break;
        }

        // Si on ne peut convertir notre ligne en entier, une exception est levée
        try {
            int i = stoi(str);
            cout << "Je rajoute au tableau" << endl;
            chiffres[tmpNom] = i;
        }  catch (invalid_argument e) {
            cout << "Veuillez saisir un chiffre" << endl;
        }

    }

    cout << "Taille du tableau :" << chiffres.size() << endl;

    // Syntaxe pour un foreach sur une map
    for (const pair<string, int> &paire : chiffres) {
        cout << paire.first << " : " << paire.second << endl;
    }
}
