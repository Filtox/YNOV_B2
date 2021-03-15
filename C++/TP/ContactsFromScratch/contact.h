#ifndef CONTACT_H
#define CONTACT_H

#include <QString>
#include <QDialog>
#include <QDir>
#include <QRegExp>
#define CONTACT_SEPARATOR ';'


class Contact{
private:
    QString m_firstname;
    QString m_lastname;
    QString m_email;
    QString m_tel;
    QString m_commentaire;



public:
//    bool operator==(const Contact &contact);
    Contact(QString firstname, QString lastname, QString email, QString tel, QString commentaire);
    Contact(QString infos);

    QString firstname() const;
    void setFirstname(const QString &firstname);
    QString lastname() const;
    void setLastname(const QString &lastname);
    QString email() const;
    void setEmail(const QString &email);
    QString commentaire() const;
    void setCommentaire(const QString &commentaire);
    QString tel() const;
    void setTel(const QString &tel);

    QString getLine();

};

#endif // CONTACT_H
