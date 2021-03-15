#include <QDebug>
#include "contact.h"

QString Contact::firstname() const
{
    return m_firstname;
}

void Contact::setFirstname(const QString &firstname)
{
    m_firstname = firstname;
}

QString Contact::lastname() const
{
    return m_lastname;
}

void Contact::setLastname(const QString &lastname)
{
    m_lastname = lastname;
}

QString Contact::email() const
{
    return m_email;
}

void Contact::setEmail(const QString &email)
{
    m_email = email;
}

QString Contact::getLine()
{
    return QString(m_firstname + CONTACT_SEPARATOR + m_lastname + CONTACT_SEPARATOR + m_email + CONTACT_SEPARATOR + m_tel + CONTACT_SEPARATOR + m_commentaire + '\n');
}

QString Contact::tel() const
{
    return m_tel;
}

void Contact::setTel(const QString &tel)
{
    m_tel = tel;
}

QString Contact::commentaire() const
{
    return m_commentaire;
}

void Contact::setCommentaire(const QString &commentaire)
{
    m_commentaire = commentaire;
}

Contact::Contact(QString firstname, QString lastname, QString email, QString tel, QString commentaire):
    m_firstname(firstname), m_lastname(lastname), m_email(email), m_tel(tel), m_commentaire(commentaire) {
    qDebug() << __FUNCTION__ << m_firstname << m_lastname << m_email << m_tel << m_commentaire;
}

Contact::Contact(QString infos)
{
    QStringList data = infos.split(CONTACT_SEPARATOR);
    m_firstname = data.at(0);
    m_lastname = data.at(1);
    m_email = data.at(2);
    m_tel = data.at(3);
    m_commentaire = data.at(4);

    qDebug() << __FUNCTION__ << m_firstname << m_lastname << m_email << m_tel << m_commentaire;
}















