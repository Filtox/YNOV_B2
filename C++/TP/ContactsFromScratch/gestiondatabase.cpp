#include "gestiondatabase.h"

#include <QDebug>
#include <QHBoxLayout>
#include <QIntValidator>
#include <QLabel>
#include <QLineEdit>
#include <QPushButton>
#include <QSpacerItem>
#include <QVBoxLayout>

#include <QSqlDatabase>
#include <QSqlDriver>
#include <QSqlError>
#include <QSqlQuery>

GestionDatabase::GestionDatabase()
{
    DatabaseConnect();
    DatabaseInit();
    DatabasePopulate();
}

void GestionDatabase::DatabaseConnect()
{
    const QString DRIVER("QSQLITE");

    if (QSqlDatabase::isDriverAvailable(DRIVER)) {
        QSqlDatabase db = QSqlDatabase::addDatabase(DRIVER);

        db.setDatabaseName("contacts.db");

        if (!db.open())
            qWarning() << "MainWindow::DatabaseConnect - ERROR: " << db.lastError().text();
    } else
        qWarning() << "MainWindow::DatabaseConnect - ERROR: no driver " << DRIVER << " available";
}

void GestionDatabase::DatabaseInit()
{
    QSqlQuery query("CREATE TABLE contacts(id INTEGER PRIMARY KEY, firstname TEXT, lastname TEXT, email TEXT, phone TEXT, commentaire TEXT)");

    if (!query.isActive())
        qWarning() << "MainWindow::DatabaseInit - ERROR: " << query.lastError().text();
}

void GestionDatabase::DatabasePopulate()
{
    QSqlQuery query;

    if (!query.exec("INSERT INTO contacts(firstname, lastname, email, phone, commentaire) VALUES('Eddie', 'Jacques', 'eddie@jacques.fr', '0123456789', 'Je suis un commentaire')"))
        qWarning() << "MainWindow::DatabasePopulate - ERROR: " << query.lastError().text();
}
