#include "contactlist.h"

#include <QCoreApplication>

int main(int argc, char *argv[])
{
    QCoreApplication a(argc, argv);
    ContactList*c = ContactList::Create();
    c->Load();

    return a.exec();
}
