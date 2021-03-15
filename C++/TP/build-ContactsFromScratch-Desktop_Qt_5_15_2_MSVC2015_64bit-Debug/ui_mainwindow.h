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
#include <QtWidgets/QGridLayout>
#include <QtWidgets/QHBoxLayout>
#include <QtWidgets/QLabel>
#include <QtWidgets/QLineEdit>
#include <QtWidgets/QListWidget>
#include <QtWidgets/QMainWindow>
#include <QtWidgets/QMenuBar>
#include <QtWidgets/QPushButton>
#include <QtWidgets/QSpacerItem>
#include <QtWidgets/QStatusBar>
#include <QtWidgets/QVBoxLayout>
#include <QtWidgets/QWidget>

QT_BEGIN_NAMESPACE

class Ui_MainWindow
{
public:
    QWidget *centralwidget;
    QWidget *layoutWidget;
    QGridLayout *gridLayout_2;
    QVBoxLayout *verticalLayout;
    QLabel *label;
    QListWidget *listContacts;
    QHBoxLayout *horizontalLayout_2;
    QPushButton *saveContactsButton;
    QPushButton *loadContactsButton;
    QVBoxLayout *verticalLayout_2;
    QGridLayout *gridLayout;
    QLabel *telLabel;
    QPushButton *addContact;
    QLabel *lastnameLabel;
    QLineEdit *commentaire_textEdit;
    QLabel *firstnameLabel;
    QPushButton *submit;
    QLineEdit *firstname_textEdit;
    QLineEdit *lastname_textEdit;
    QLineEdit *email_textEdit;
    QLineEdit *tel_textEdit;
    QLabel *emailLabel;
    QLabel *commentaireLabel;
    QVBoxLayout *verticalLayout_3;
    QHBoxLayout *horizontalLayout;
    QLabel *label_2;
    QLineEdit *lineEdit;
    QPushButton *search;
    QSpacerItem *verticalSpacer;
    QMenuBar *menubar;
    QStatusBar *statusbar;

    void setupUi(QMainWindow *MainWindow)
    {
        if (MainWindow->objectName().isEmpty())
            MainWindow->setObjectName(QString::fromUtf8("MainWindow"));
        MainWindow->resize(966, 523);
        centralwidget = new QWidget(MainWindow);
        centralwidget->setObjectName(QString::fromUtf8("centralwidget"));
        layoutWidget = new QWidget(centralwidget);
        layoutWidget->setObjectName(QString::fromUtf8("layoutWidget"));
        layoutWidget->setGeometry(QRect(10, 13, 921, 461));
        gridLayout_2 = new QGridLayout(layoutWidget);
        gridLayout_2->setObjectName(QString::fromUtf8("gridLayout_2"));
        gridLayout_2->setContentsMargins(0, 0, 0, 0);
        verticalLayout = new QVBoxLayout();
        verticalLayout->setObjectName(QString::fromUtf8("verticalLayout"));
        verticalLayout->setSizeConstraint(QLayout::SetMinimumSize);
        label = new QLabel(layoutWidget);
        label->setObjectName(QString::fromUtf8("label"));
        label->setMaximumSize(QSize(100, 16777215));

        verticalLayout->addWidget(label);

        listContacts = new QListWidget(layoutWidget);
        listContacts->setObjectName(QString::fromUtf8("listContacts"));
        listContacts->setMaximumSize(QSize(200, 16777215));

        verticalLayout->addWidget(listContacts);

        horizontalLayout_2 = new QHBoxLayout();
        horizontalLayout_2->setObjectName(QString::fromUtf8("horizontalLayout_2"));
        horizontalLayout_2->setSizeConstraint(QLayout::SetMinAndMaxSize);
        saveContactsButton = new QPushButton(layoutWidget);
        saveContactsButton->setObjectName(QString::fromUtf8("saveContactsButton"));
        saveContactsButton->setMaximumSize(QSize(100, 16777215));

        horizontalLayout_2->addWidget(saveContactsButton);

        loadContactsButton = new QPushButton(layoutWidget);
        loadContactsButton->setObjectName(QString::fromUtf8("loadContactsButton"));
        loadContactsButton->setMaximumSize(QSize(100, 16777215));

        horizontalLayout_2->addWidget(loadContactsButton);


        verticalLayout->addLayout(horizontalLayout_2);


        gridLayout_2->addLayout(verticalLayout, 0, 0, 1, 1);

        verticalLayout_2 = new QVBoxLayout();
        verticalLayout_2->setObjectName(QString::fromUtf8("verticalLayout_2"));
        gridLayout = new QGridLayout();
        gridLayout->setObjectName(QString::fromUtf8("gridLayout"));
        telLabel = new QLabel(layoutWidget);
        telLabel->setObjectName(QString::fromUtf8("telLabel"));

        gridLayout->addWidget(telLabel, 3, 0, 1, 1);

        addContact = new QPushButton(layoutWidget);
        addContact->setObjectName(QString::fromUtf8("addContact"));

        gridLayout->addWidget(addContact, 6, 1, 1, 1);

        lastnameLabel = new QLabel(layoutWidget);
        lastnameLabel->setObjectName(QString::fromUtf8("lastnameLabel"));

        gridLayout->addWidget(lastnameLabel, 1, 0, 1, 1);

        commentaire_textEdit = new QLineEdit(layoutWidget);
        commentaire_textEdit->setObjectName(QString::fromUtf8("commentaire_textEdit"));

        gridLayout->addWidget(commentaire_textEdit, 4, 1, 1, 1);

        firstnameLabel = new QLabel(layoutWidget);
        firstnameLabel->setObjectName(QString::fromUtf8("firstnameLabel"));

        gridLayout->addWidget(firstnameLabel, 0, 0, 1, 1);

        submit = new QPushButton(layoutWidget);
        submit->setObjectName(QString::fromUtf8("submit"));

        gridLayout->addWidget(submit, 5, 1, 1, 1);

        firstname_textEdit = new QLineEdit(layoutWidget);
        firstname_textEdit->setObjectName(QString::fromUtf8("firstname_textEdit"));

        gridLayout->addWidget(firstname_textEdit, 0, 1, 1, 1);

        lastname_textEdit = new QLineEdit(layoutWidget);
        lastname_textEdit->setObjectName(QString::fromUtf8("lastname_textEdit"));

        gridLayout->addWidget(lastname_textEdit, 1, 1, 1, 1);

        email_textEdit = new QLineEdit(layoutWidget);
        email_textEdit->setObjectName(QString::fromUtf8("email_textEdit"));

        gridLayout->addWidget(email_textEdit, 2, 1, 1, 1);

        tel_textEdit = new QLineEdit(layoutWidget);
        tel_textEdit->setObjectName(QString::fromUtf8("tel_textEdit"));

        gridLayout->addWidget(tel_textEdit, 3, 1, 1, 1);

        emailLabel = new QLabel(layoutWidget);
        emailLabel->setObjectName(QString::fromUtf8("emailLabel"));

        gridLayout->addWidget(emailLabel, 2, 0, 1, 1);

        commentaireLabel = new QLabel(layoutWidget);
        commentaireLabel->setObjectName(QString::fromUtf8("commentaireLabel"));

        gridLayout->addWidget(commentaireLabel, 4, 0, 1, 1);

        verticalLayout_3 = new QVBoxLayout();
        verticalLayout_3->setObjectName(QString::fromUtf8("verticalLayout_3"));
        horizontalLayout = new QHBoxLayout();
        horizontalLayout->setObjectName(QString::fromUtf8("horizontalLayout"));
        label_2 = new QLabel(layoutWidget);
        label_2->setObjectName(QString::fromUtf8("label_2"));

        horizontalLayout->addWidget(label_2);

        lineEdit = new QLineEdit(layoutWidget);
        lineEdit->setObjectName(QString::fromUtf8("lineEdit"));

        horizontalLayout->addWidget(lineEdit);


        verticalLayout_3->addLayout(horizontalLayout);

        search = new QPushButton(layoutWidget);
        search->setObjectName(QString::fromUtf8("search"));

        verticalLayout_3->addWidget(search);

        verticalSpacer = new QSpacerItem(20, 40, QSizePolicy::Minimum, QSizePolicy::Expanding);

        verticalLayout_3->addItem(verticalSpacer);


        gridLayout->addLayout(verticalLayout_3, 7, 1, 1, 1);


        verticalLayout_2->addLayout(gridLayout);


        gridLayout_2->addLayout(verticalLayout_2, 0, 1, 1, 1);

        MainWindow->setCentralWidget(centralwidget);
        menubar = new QMenuBar(MainWindow);
        menubar->setObjectName(QString::fromUtf8("menubar"));
        menubar->setGeometry(QRect(0, 0, 966, 20));
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
        saveContactsButton->setText(QCoreApplication::translate("MainWindow", "Save Contacts", nullptr));
        loadContactsButton->setText(QCoreApplication::translate("MainWindow", "Load Contacts", nullptr));
        telLabel->setText(QCoreApplication::translate("MainWindow", "T\303\251l\303\251phone", nullptr));
        addContact->setText(QCoreApplication::translate("MainWindow", "Add Contact", nullptr));
        lastnameLabel->setText(QCoreApplication::translate("MainWindow", "Lastname", nullptr));
        firstnameLabel->setText(QCoreApplication::translate("MainWindow", "Firstname", nullptr));
        submit->setText(QCoreApplication::translate("MainWindow", "Submit", nullptr));
        emailLabel->setText(QCoreApplication::translate("MainWindow", "Email", nullptr));
        commentaireLabel->setText(QCoreApplication::translate("MainWindow", "Commentaires", nullptr));
        label_2->setText(QCoreApplication::translate("MainWindow", "Filtre de recherche :", nullptr));
        search->setText(QCoreApplication::translate("MainWindow", "Recherche", nullptr));
    } // retranslateUi

};

namespace Ui {
    class MainWindow: public Ui_MainWindow {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_MAINWINDOW_H
