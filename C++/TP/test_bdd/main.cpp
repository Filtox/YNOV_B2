#include "mainwindow.h"
#include "database.h"

#include <QApplication>

int main(int argc, char *argv[])
{
    QApplication a(argc, argv);
    Database* db = new Database;

    if (!db->connect("contact.db")){
        qCritical() << "Unable to connect";
        return -1;
    }

    if (!db->create()){
        qWarning() << "Unable to create table";
    }

    db->populate();
    db->show();

    db->insert("test@test.com","tester","test");
    db->show();
    db->show("test@test.com");

    db->update("test@test.com", "testerr", "testt");
    db->show("test@test.com");

    db->remove("test@test.com");
    db->show();

    db->insert("dupont@test.com","franck","dupont");
    db->insert("karim@test.com","johny","dupont");
    db->insert("benzema@test.com","benzema","dupont");
    db->show();

    db->search("dupont");

    //MainWindow w;
    //w.show();
    return a.exec();
}
