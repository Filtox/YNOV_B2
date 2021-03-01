#include <iostream>
#include <vector>
#include <string>
#include <map>

using namespace std;

int main()
{
    map <string, vector<int>> Promotion;

    while (1) {
        char tmpNomEleve[256];
        char tmpNoteEleve[10];

        cout << "Entrez un nom d eleve : " << endl;
        cin.getline(tmpNomEleve, 256);

        if(string(tmpNomEleve).size()==0){
            break;
        }

        Promotion[tmpNomEleve] = vector<int>();

        while(1){
            cout << "Entrez la note de l eleve : " << endl;

            cin.getline(tmpNomEleve, 10);

            string str(tmpNoteEleve);

            if(str.size()==0){
                break;
            }

            try {
                int x = stoi(tmpNomEleve);
                Promotion[tmpNomEleve].push_back(x);
            }  catch (invalid_argument e) {
                cout << "Entrez un chiffre : " << endl;
            }
        }
    }
}
