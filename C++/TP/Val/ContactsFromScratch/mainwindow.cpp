#include "mainwindow.h"
#include "ui_mainwindow.h"

#include <QFile>
#include <QDebug>
#include <QFileDialog>

MainWindow::MainWindow(QWidget *parent)
    : QMainWindow(parent)
    , ui(new Ui::MainWindow) {
    ui->setupUi(this);
    m_contactsFileName = "contacts.txt";
    loadContacts();

}

MainWindow::~MainWindow() {
    for (auto contact: m_contacts){
        delete contact;
    }
    delete ui;
}


void MainWindow::on_loadContactsButton_clicked()
{
    loadContacts();
}

void MainWindow::populateList()
{
    ui->listContacts->clear();
    for(const auto &contact: qAsConst(m_contacts)) {
        qDebug() << contact->email();
        ui->listContacts->addItem(contact->email());
    }
}

void MainWindow::updateList()
{
    ui->listContacts->clear();
    for(const auto &contact: qAsConst(m_contacts)) {
        if(contact->firstname()==getFind() || contact->lastname()==getFind() || contact->email()==getFind() ||
                contact->numberphone()==getFind() || contact->commentary()==getFind() ){
            ui->listContacts->addItem(contact->email());
        }
    }
}

QString MainWindow::getFind()
{
    return findSearch;
}

void MainWindow::on_listContacts_currentRowChanged(int currentRow)
{
    qDebug() << __PRETTY_FUNCTION__ << currentRow;
    if (currentRow == -1) return;
    m_currentContact = m_contacts.at(currentRow);
    populateForm();
}

void MainWindow::populateForm()
{
    ui->firstname_textEdit->setText(m_currentContact->firstname());
    ui->lastname_textEdit->setText(m_currentContact->lastname());
    ui->email_textEdit->setText(m_currentContact->email());
    ui->numberPhone_textEdit->setText(m_currentContact->numberphone());
    ui->commentary_textEdit->setText(m_currentContact->commentary());
}

void MainWindow::loadContacts()
{
//    QFile contactFile(m_contactsFileName);
    QFile contactFile(QFileDialog::getOpenFileName(this, "Ouvrir un fichier", "C://Documents/"));
    if (contactFile.open(QIODevice::ReadWrite | QIODevice::Text)){
        QTextStream flux(&contactFile);
        QString all = flux.readAll();
        qDebug() << all;
        QStringList lines(all.split("\n"));
        m_contacts.clear();
        for (const auto &line : qAsConst(lines)) {
            if(line.isEmpty()) {
                continue;
            }
//            Contact* newContact = new Contact(line);
           Contact* newContact = Contact::createContact(line);
           if(newContact != nullptr)
           {
              m_contacts.append(newContact);
           }
        }
        contactFile.close();
        populateList();
        ui->statusbar->showMessage(QString::number(m_contacts.length()) + " contacts chargés.");
    } else {
        QString error = "Impossible d'ouvrir le fichier " + m_contactsFileName;
        qCritical() << error;
        ui->statusbar->showMessage(error);
    }
}

void MainWindow::saveContacts()
{
    QFile contactFile(m_contactsFileName);
    if (contactFile.open(QIODevice::WriteOnly | QIODevice::Text)) {
        QTextStream flux(&contactFile);
        for (auto contact : m_contacts) {
            QString contactStr = contact->getLine();
            flux << contactStr;
        }
        contactFile.close();
        ui->statusbar->showMessage(QString::number(m_contacts.length()) + " contacts enregistrés.");
    } else {
        QString error = "Impossible de sauver le fichier " + m_contactsFileName;
        qCritical() << error;
        ui->statusbar->showMessage(error);
    }
}

void MainWindow::saveFileContacts()
{
    QFile contactFile(QFileDialog::getOpenFileName(this, "Sauvegarder un fichier", "C://Documents/"));
    if (contactFile.open(QIODevice::WriteOnly | QIODevice::Text)) {
        QTextStream flux(&contactFile);
        for (auto contact : m_contacts) {
            QString contactStr = contact->getLine();
            flux << contactStr;
        }
        contactFile.close();
        ui->statusbar->showMessage(QString::number(m_contacts.length()) + " contacts enregistrés.");
    } else {
        QString error = "Impossible de sauver le fichier " + m_contactsFileName;
        qCritical() << error;
        ui->statusbar->showMessage(error);
    }
}

void MainWindow::on_submit_clicked()
{
    qDebug() << __PRETTY_FUNCTION__;
    m_currentContact->setFirstname(ui->firstname_textEdit->text());
    m_currentContact->setLastname(ui->lastname_textEdit->text());
    m_currentContact->setEmail(ui->email_textEdit->text());
    m_currentContact->setNumberphone(ui->numberPhone_textEdit->text());
    m_currentContact->setCommentary(ui->commentary_textEdit->toPlainText());
    populateList();
}

void MainWindow::on_saveContactsButton_clicked()
{
    saveContacts();
}

void MainWindow::on_saveFileButton_clicked()
{
    saveFileContacts();
}

void MainWindow::on_addContact_clicked()
{
//    m_contacts.append(new Contact("", "", "", "", ""));
    m_contacts.append(Contact::createContact());
    populateList();
    ui->listContacts->setCurrentRow(m_contacts.length()-1);
}

void MainWindow::on_searchContact_clicked()
{
    QString text = ui->searchContact_text->text();

    if(text.isEmpty()) {
        ui->statusbar->showMessage("Veuillez rechercher un contact par son Nom, Prenom, Email, Numeros ou Commentaire");
        populateList();
        qCritical() << "Veuillez rechercher un contact par son Nom, Prenom, Email, Numeros ou Commentaire" ;
        return;
    } else {
        findSearch = text;
        ui->searchContact_text->clear();
        ui->statusbar->clearMessage();
        ui->statusbar->showMessage("Resultat pour la recherche de : " + findSearch );
        updateList();
    }
}

