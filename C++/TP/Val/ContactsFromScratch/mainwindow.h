#ifndef MAINWINDOW_H
#define MAINWINDOW_H


#include "contact.h"
#include <QMainWindow>

QT_BEGIN_NAMESPACE
namespace Ui { class MainWindow; }
QT_END_NAMESPACE

class MainWindow : public QMainWindow
{
    Q_OBJECT

public:
    MainWindow(QWidget *parent = nullptr);
    ~MainWindow();

private slots:
    void on_loadContactsButton_clicked();
    void populateList();
    void updateList();
    void on_listContacts_currentRowChanged(int currentRow);

    void on_submit_clicked();

    void on_saveContactsButton_clicked();

    void on_saveFileButton_clicked();

    void on_addContact_clicked();

    void on_searchContact_clicked();

private:
    Ui::MainWindow *ui;
    QString m_contactsFileName;
    QList<Contact*> m_contacts;
    Contact* m_currentContact;
    QString findSearch;

    void populateForm();
    void loadContacts();
    void saveContacts();
    void saveFileContacts();
    QString getFind();
};
#endif // MAINWINDOW_H
