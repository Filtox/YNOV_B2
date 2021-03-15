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
        ui->listContacts->addItem(contact->email());
    }
}

void MainWindow::on_listContacts_currentRowChanged(int currentRow)
{
    if (currentRow == -1) return;
    m_currentContact = m_contacts.at(currentRow);
    populateForm();
}

void MainWindow::populateForm()
{
    ui->firstname_textEdit->setText(m_currentContact->firstname());
    ui->lastname_textEdit->setText(m_currentContact->lastname());
    ui->email_textEdit->setText(m_currentContact->email());
    ui->tel_textEdit->setText(m_currentContact->tel());
    ui->commentaire_textEdit->setText(m_currentContact->commentaire());
}

void MainWindow::loadContacts()
{
    QFile contactFile(QFileDialog::getOpenFileName(this, "Choisir le fichier dans lequel sont contenus les contacts"));
    if (contactFile.open(QIODevice::ReadWrite | QIODevice::Text)){
        QTextStream flux(&contactFile);
        QString all = flux.readAll();
        QStringList lines(all.split("\n"));
        for (const auto &line : qAsConst(lines)) {
            if(line.isEmpty()) {
                continue;
            }
            Contact* newContact = new Contact(line);
            if(AContact(*newContact)){
                continue;
            }
            m_contacts.append(newContact);
        }
        contactFile.close();
        populateList();
        ui->statusbar->showMessage(QString::number(m_contacts.length()) + " contacts chargés.");
    } else {
        QString error = "Impossible d'ouvrir votre fichier ";
        qCritical() << error;
        ui->statusbar->showMessage(error);
    }
}

void MainWindow::saveContacts()
{
    QFile contactFile(QFileDialog::getOpenFileName(this, "Choisir le fichier dans lequel sauvegarder les contacts"));
    if (contactFile.open(QIODevice::WriteOnly | QIODevice::Text)) {
        QTextStream flux(&contactFile);
        for (auto contact : m_contacts) {
            QString contactStr = contact->getLine();
            flux << contactStr;
        }
        contactFile.close();
        ui->statusbar->showMessage(QString::number(m_contacts.length()) + " contacts enregistrés.");
    } else {
        QString error = "Impossible de sauver le fichier ";
        qCritical() << error;
        ui->statusbar->showMessage(error);
    }
}

QString MainWindow::getFind()
{
    return find;
}

void MainWindow::on_submit_clicked()
{
    m_currentContact->setFirstname(ui->firstname_textEdit->text());
    m_currentContact->setLastname(ui->lastname_textEdit->text());
    m_currentContact->setEmail(ui->email_textEdit->text());
    m_currentContact->setTel(ui->tel_textEdit->text());
    m_currentContact->setCommentaire(ui->commentaire_textEdit->text());
    populateList();
}

void MainWindow::on_saveContactsButton_clicked()
{
    saveContacts();
}

void MainWindow::on_addContact_clicked()
{
    m_contacts.append(new Contact("", "", "", "", ""));
    populateList();
    ui->listContacts->setCurrentRow(m_contacts.length()-1);
}

bool MainWindow::AContact(Contact reference){

    for (int var = 0; var < m_contacts.length(); ++var) {

       if(m_contacts.at(var)->firstname() == reference.firstname() && m_contacts.at(var)->lastname() == reference.lastname() &&
           m_contacts.at(var)->email() == reference.email() && m_contacts.at(var)->tel() == reference.tel() &&
               m_contacts.at(var)->commentaire() == reference.commentaire() ){
           return true;
       }
    }
    return false;

}

void MainWindow::on_recherche_clicked()
{
    QString text = ui->lineEdit->text();

    if(text.isEmpty()) {
        ui->statusbar->showMessage("Veuillez rechercher un nom / prenom / email / numeros / commentaire");
        populateList();
        return;
    } else {
        find = text;
        ui->lineEdit->clear();
        ui->statusbar->clearMessage();
        ui->statusbar->showMessage("Resultat pour la recherche de : " + find );
        updateList();
    }
}

void MainWindow::updateList()
{
    ui->listContacts->clear();

    for(const auto &contact: qAsConst(m_contacts)) {
        if(contact->firstname()==getFind() || contact->lastname()==getFind() || contact->email()==getFind() ||
                contact->tel()==getFind() || contact->commentaire()==getFind() ){
            ui->listContacts->addItem(contact->email());
        }

    }
}
