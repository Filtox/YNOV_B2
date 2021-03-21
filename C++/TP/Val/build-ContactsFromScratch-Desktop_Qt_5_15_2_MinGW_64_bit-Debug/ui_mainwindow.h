/********************************************************************************
** Form generated from reading UI file 'mainwindow.ui'
**
** Created by: Qt User Interface Compiler version 5.15.2
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_MAINWINDOW_H
#define UI_MAINWINDOW_H

#include <QtCore/QVariant>
#include <QtWidgets/QApplication>
#include <QtWidgets/QFormLayout>
#include <QtWidgets/QHBoxLayout>
#include <QtWidgets/QLabel>
#include <QtWidgets/QLineEdit>
#include <QtWidgets/QListWidget>
#include <QtWidgets/QMainWindow>
#include <QtWidgets/QMenuBar>
#include <QtWidgets/QPushButton>
#include <QtWidgets/QSpacerItem>
#include <QtWidgets/QStatusBar>
#include <QtWidgets/QTextEdit>
#include <QtWidgets/QVBoxLayout>
#include <QtWidgets/QWidget>

QT_BEGIN_NAMESPACE

class Ui_MainWindow
{
public:
    QWidget *centralwidget;
    QVBoxLayout *verticalLayout_2;
    QHBoxLayout *horizontalLayout_3;
    QVBoxLayout *verticalLayout;
    QLabel *label;
    QListWidget *listContacts;
    QHBoxLayout *horizontalLayout_2;
    QPushButton *saveContactsButton;
    QPushButton *saveFileButton;
    QPushButton *loadContactsButton;
    QHBoxLayout *horizontalLayout;
    QFormLayout *formLayout;
    QPushButton *searchContact;
    QLineEdit *searchContact_text;
    QSpacerItem *verticalSpacer;
    QLabel *firstnameLabel;
    QLineEdit *firstname_textEdit;
    QLabel *lastnameLabel;
    QLineEdit *lastname_textEdit;
    QLabel *emailLabel;
    QLineEdit *email_textEdit;
    QLabel *numberPhoneLabel;
    QLineEdit *numberPhone_textEdit;
    QLabel *commentaryLabel;
    QTextEdit *commentary_textEdit;
    QPushButton *addContact;
    QPushButton *submit;
    QPushButton *importFile;
    QHBoxLayout *horizontalLayout_4;
    QMenuBar *menubar;
    QStatusBar *statusbar;

    void setupUi(QMainWindow *MainWindow)
    {
        if (MainWindow->objectName().isEmpty())
            MainWindow->setObjectName(QString::fromUtf8("MainWindow"));
        MainWindow->resize(1090, 537);
        centralwidget = new QWidget(MainWindow);
        centralwidget->setObjectName(QString::fromUtf8("centralwidget"));
        verticalLayout_2 = new QVBoxLayout(centralwidget);
        verticalLayout_2->setObjectName(QString::fromUtf8("verticalLayout_2"));
        horizontalLayout_3 = new QHBoxLayout();
        horizontalLayout_3->setObjectName(QString::fromUtf8("horizontalLayout_3"));
        verticalLayout = new QVBoxLayout();
        verticalLayout->setObjectName(QString::fromUtf8("verticalLayout"));
        verticalLayout->setSizeConstraint(QLayout::SetMinimumSize);
        label = new QLabel(centralwidget);
        label->setObjectName(QString::fromUtf8("label"));
        label->setMaximumSize(QSize(100, 16777215));

        verticalLayout->addWidget(label);

        listContacts = new QListWidget(centralwidget);
        listContacts->setObjectName(QString::fromUtf8("listContacts"));
        listContacts->setMaximumSize(QSize(200, 16777215));

        verticalLayout->addWidget(listContacts);

        horizontalLayout_2 = new QHBoxLayout();
        horizontalLayout_2->setObjectName(QString::fromUtf8("horizontalLayout_2"));
        horizontalLayout_2->setSizeConstraint(QLayout::SetMinAndMaxSize);
        saveContactsButton = new QPushButton(centralwidget);
        saveContactsButton->setObjectName(QString::fromUtf8("saveContactsButton"));
        saveContactsButton->setMaximumSize(QSize(100, 16777215));

        horizontalLayout_2->addWidget(saveContactsButton);

        saveFileButton = new QPushButton(centralwidget);
        saveFileButton->setObjectName(QString::fromUtf8("saveFileButton"));
        saveFileButton->setMaximumSize(QSize(100, 16777215));

        horizontalLayout_2->addWidget(saveFileButton);

        loadContactsButton = new QPushButton(centralwidget);
        loadContactsButton->setObjectName(QString::fromUtf8("loadContactsButton"));
        loadContactsButton->setMaximumSize(QSize(100, 16777215));

        horizontalLayout_2->addWidget(loadContactsButton);


        verticalLayout->addLayout(horizontalLayout_2);


        horizontalLayout_3->addLayout(verticalLayout);

        horizontalLayout = new QHBoxLayout();
        horizontalLayout->setObjectName(QString::fromUtf8("horizontalLayout"));
        formLayout = new QFormLayout();
        formLayout->setObjectName(QString::fromUtf8("formLayout"));
        searchContact = new QPushButton(centralwidget);
        searchContact->setObjectName(QString::fromUtf8("searchContact"));

        formLayout->setWidget(0, QFormLayout::LabelRole, searchContact);

        searchContact_text = new QLineEdit(centralwidget);
        searchContact_text->setObjectName(QString::fromUtf8("searchContact_text"));

        formLayout->setWidget(0, QFormLayout::FieldRole, searchContact_text);

        verticalSpacer = new QSpacerItem(20, 40, QSizePolicy::Minimum, QSizePolicy::Expanding);

        formLayout->setItem(1, QFormLayout::FieldRole, verticalSpacer);

        firstnameLabel = new QLabel(centralwidget);
        firstnameLabel->setObjectName(QString::fromUtf8("firstnameLabel"));

        formLayout->setWidget(2, QFormLayout::LabelRole, firstnameLabel);

        firstname_textEdit = new QLineEdit(centralwidget);
        firstname_textEdit->setObjectName(QString::fromUtf8("firstname_textEdit"));

        formLayout->setWidget(2, QFormLayout::FieldRole, firstname_textEdit);

        lastnameLabel = new QLabel(centralwidget);
        lastnameLabel->setObjectName(QString::fromUtf8("lastnameLabel"));

        formLayout->setWidget(3, QFormLayout::LabelRole, lastnameLabel);

        lastname_textEdit = new QLineEdit(centralwidget);
        lastname_textEdit->setObjectName(QString::fromUtf8("lastname_textEdit"));

        formLayout->setWidget(3, QFormLayout::FieldRole, lastname_textEdit);

        emailLabel = new QLabel(centralwidget);
        emailLabel->setObjectName(QString::fromUtf8("emailLabel"));

        formLayout->setWidget(4, QFormLayout::LabelRole, emailLabel);

        email_textEdit = new QLineEdit(centralwidget);
        email_textEdit->setObjectName(QString::fromUtf8("email_textEdit"));

        formLayout->setWidget(4, QFormLayout::FieldRole, email_textEdit);

        numberPhoneLabel = new QLabel(centralwidget);
        numberPhoneLabel->setObjectName(QString::fromUtf8("numberPhoneLabel"));

        formLayout->setWidget(5, QFormLayout::LabelRole, numberPhoneLabel);

        numberPhone_textEdit = new QLineEdit(centralwidget);
        numberPhone_textEdit->setObjectName(QString::fromUtf8("numberPhone_textEdit"));

        formLayout->setWidget(5, QFormLayout::FieldRole, numberPhone_textEdit);

        commentaryLabel = new QLabel(centralwidget);
        commentaryLabel->setObjectName(QString::fromUtf8("commentaryLabel"));

        formLayout->setWidget(6, QFormLayout::LabelRole, commentaryLabel);

        commentary_textEdit = new QTextEdit(centralwidget);
        commentary_textEdit->setObjectName(QString::fromUtf8("commentary_textEdit"));

        formLayout->setWidget(6, QFormLayout::FieldRole, commentary_textEdit);

        addContact = new QPushButton(centralwidget);
        addContact->setObjectName(QString::fromUtf8("addContact"));

        formLayout->setWidget(7, QFormLayout::FieldRole, addContact);

        submit = new QPushButton(centralwidget);
        submit->setObjectName(QString::fromUtf8("submit"));

        formLayout->setWidget(8, QFormLayout::FieldRole, submit);

        importFile = new QPushButton(centralwidget);
        importFile->setObjectName(QString::fromUtf8("importFile"));

        formLayout->setWidget(9, QFormLayout::FieldRole, importFile);


        horizontalLayout->addLayout(formLayout);


        horizontalLayout_3->addLayout(horizontalLayout);


        verticalLayout_2->addLayout(horizontalLayout_3);

        horizontalLayout_4 = new QHBoxLayout();
        horizontalLayout_4->setObjectName(QString::fromUtf8("horizontalLayout_4"));

        verticalLayout_2->addLayout(horizontalLayout_4);

        MainWindow->setCentralWidget(centralwidget);
        menubar = new QMenuBar(MainWindow);
        menubar->setObjectName(QString::fromUtf8("menubar"));
        menubar->setGeometry(QRect(0, 0, 1090, 20));
        MainWindow->setMenuBar(menubar);
        statusbar = new QStatusBar(MainWindow);
        statusbar->setObjectName(QString::fromUtf8("statusbar"));
        MainWindow->setStatusBar(statusbar);

        retranslateUi(MainWindow);

        QMetaObject::connectSlotsByName(MainWindow);
    } // setupUi

    void retranslateUi(QMainWindow *MainWindow)
    {
        MainWindow->setWindowTitle(QCoreApplication::translate("MainWindow", "MainWindow", nullptr));
        label->setText(QCoreApplication::translate("MainWindow", "Contacts", nullptr));
        saveContactsButton->setText(QCoreApplication::translate("MainWindow", "Save File", nullptr));
        saveFileButton->setText(QCoreApplication::translate("MainWindow", "Save File as ...", nullptr));
        loadContactsButton->setText(QCoreApplication::translate("MainWindow", "Load File", nullptr));
        searchContact->setText(QCoreApplication::translate("MainWindow", "Search Contact", nullptr));
        firstnameLabel->setText(QCoreApplication::translate("MainWindow", "Firstname", nullptr));
        lastnameLabel->setText(QCoreApplication::translate("MainWindow", "Lastname", nullptr));
        emailLabel->setText(QCoreApplication::translate("MainWindow", "Email", nullptr));
        numberPhoneLabel->setText(QCoreApplication::translate("MainWindow", "Number Phone", nullptr));
        commentaryLabel->setText(QCoreApplication::translate("MainWindow", "Commentaries", nullptr));
        addContact->setText(QCoreApplication::translate("MainWindow", "Add Contact", nullptr));
        submit->setText(QCoreApplication::translate("MainWindow", "Save New Contact", nullptr));
        importFile->setText(QCoreApplication::translate("MainWindow", "Import File", nullptr));
    } // retranslateUi

};

namespace Ui {
    class MainWindow: public Ui_MainWindow {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_MAINWINDOW_H
