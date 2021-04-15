#ifndef DATABASE_H
#define DATABASE_H

#include <QString>
#include <QDebug>
#include <QSqlDatabase>
#include <QSqlDriver>
#include <QSqlError>
#include <QSqlQuery>

//base de donées de contacts

class Database
{
public:
    Database();

    bool connect(QString bdd_name);
    bool create();
    bool populate();

    void search(QString search);
    bool insert(QString mail, QString fisrtname, QString lastname);
    bool update(QString mail, QString fisrtname, QString lastname);
    void show(QString mail="");
    bool remove(QString mail);
    int count();

};

#endif // DATABASE_H
