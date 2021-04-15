#include "database.h"

Database::Database()
{

}

bool Database::connect(QString bdd_name)
{
    const QString DRIVER("QSQLITE");

    if (QSqlDatabase::isDriverAvailable(DRIVER)) {
        QSqlDatabase db = QSqlDatabase::addDatabase(DRIVER);

        db.setDatabaseName(bdd_name);

        if (!db.open()) {
            qWarning() << __FUNCTION__ << "  ERROR: " << db.lastError().text();
            return false;
        }
    }
    else {
        qWarning() << __FUNCTION__ << " ERROR: no driver " << DRIVER << " available";
        return false;
    }


    return true;
}

bool Database::create()
{
    QSqlQuery query("CREATE TABLE contact (mail varchar(50), firstname varchar(50), lastname varchar(50))");

    if (!query.isActive()){
        qWarning() << __FUNCTION__ << "  ERROR: " << query.lastError().text();
        return false;
    }

    return true;
}

bool Database::populate()
{
    QSqlQuery query;

    QList<QStringList> dataset;
    QStringList contact1 = { "eddie.guerrero@mail.com", "eddie", "guerrero" };
    QStringList contact2 = { "eddie1.guerrero@mail.com", "eddie1", "guerrero" };
    QStringList contact3 = { "eddie2.guerrero@mail.com", "eddie2", "guerrero" };

    dataset << contact1 << contact2 << contact3;

    for(auto contact: dataset){
        QString sql_query = QString("INSERT INTO contact(mail, firstname, lastname) VALUES('%1', '%2', '%3')").arg(contact[0]).arg(contact[1]).arg(contact[2]);

        if (!query.exec(sql_query)){
            qWarning() <<  __FUNCTION__ << "   ERROR: " << query.lastError().text();
            return false;
        }
    }

    return true;
}

void Database::search(QString search)
{
    int i = 0;
    QString where = QString("WHERE mail LIKE '%%1%' OR firstname LIKE '%%1%' OR lastname LIKE '%%1%' ").arg(search);
    qDebug() << where << "->where";

    QSqlQuery query("SELECT * FROM contact " + where);

    if (!query.exec()){
        qWarning() <<  __FUNCTION__ << "   ERROR: " << query.lastError().text();
        return;
    }
    while (query.next()) {
        i++;
        qDebug() << query.value(0).toString() << query.value(1).toString() << query.value(2).toString();
    }
    qDebug() << i << "resultat(s)";
}

bool Database::insert(QString mail, QString firstname, QString lastname)
{
    QSqlQuery query;

    QString sql_query = QString("INSERT INTO contact(mail, firstname, lastname) VALUES('%1', '%2', '%3')").arg(mail).arg(firstname).arg(lastname);

    if (!query.exec(sql_query)){
        qWarning() <<  __FUNCTION__ << "   ERROR: " << query.lastError().text();
        return false;
    }

    return true;
}

bool Database::update(QString mail, QString firstname, QString lastname)
{
    QSqlQuery query;

    QString sql_query = QString("UPDATE contact SET firstname = '%1', mail = '%2' WHERE mail = '%3' ").arg(firstname).arg(lastname).arg(mail);

    if (!query.exec(sql_query)){
        qWarning() <<  __FUNCTION__ << "   ERROR: " << query.lastError().text();
        return false;
    }

    return true;
}

void Database::show(QString mail)
{
    QString where = "";

    if (!mail.isEmpty()){
        where = QString("WHERE mail = '%1'").arg(mail);
    }
    QSqlQuery query("SELECT * FROM contact " + where);

    if (!query.exec()){
        qWarning() <<  __FUNCTION__ << "   ERROR: " << query.lastError().text();
        return;
    }
    while (query.next()) {
        qDebug() << query.value(0).toString() << query.value(1).toString() << query.value(2).toString();
    }

    qDebug() << count() << "nombre de contact\n\n";
}

bool Database::remove(QString mail)
{
    QSqlQuery query;

    QString sql_query = QString("DELETE FROM contact WHERE mail = '%1' ").arg(mail);

    if (!query.exec(sql_query)){
        qWarning() <<  __FUNCTION__ << "   ERROR: " << query.lastError().text();
        return false;
    }

    return true;
}

int Database::count()
{
    QSqlQuery query("SELECT COUNT (*) FROM contact");

    if (query.first())
        return query.value(0).toInt();

    return -1;
}
