#include <QDebug>
#include "contact.h"

QStringList Contact::m_ids;

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

QString Contact::numberphone() const
{
    return m_numberphone;
}

void Contact::setNumberphone(const QString &numberphone)
{
    m_numberphone = numberphone;
}

QString Contact::commentary(bool encode) const
{
    if(!encode)
    {
        return  m_commentary;
    }
    QString tmp = m_commentary;
    tmp = tmp.replace('\n', "<eol>");
    return tmp;
}

void Contact::setCommentary(const QString &commentary)
{
    QString tmp = commentary;
    tmp = tmp.replace("<eol>", "\n");
    m_commentary = tmp;
    qDebug() << __FUNCTION__ << m_commentary;
}

void Contact::updateID()
{
    m_id = m_email + m_numberphone;
}


QString Contact::getLine()
{
    return QString(m_firstname + CONTACT_SEPARATOR + m_lastname + CONTACT_SEPARATOR + m_email + CONTACT_SEPARATOR + m_numberphone + CONTACT_SEPARATOR + commentary(true) + '\n');
}

Contact::Contact(QString firstname, QString lastname, QString email, QString numberphone, QString commentary):
    m_firstname(firstname), m_lastname(lastname), m_email(email), m_numberphone(numberphone), m_commentary(commentary) {
    setCommentary(commentary);
}

Contact::Contact(QString infos)
{
    QStringList data = infos.split(CONTACT_SEPARATOR);
    m_firstname = data.at(0);
    m_lastname = data.at(1);
    m_email = data.at(2);
    m_numberphone = data.at(3);
    setCommentary(data.at(4));

}

QString Contact::createID(QString email, QString numberphone)
{
    QString id = email + numberphone;
    if(!m_ids.contains(id))
    {
        m_ids.append(id);
    }
    return id;
}

Contact *Contact::createContact(QString infos)
{
    if(infos == "")
    {
        return new Contact("", "", "", "", "");
    }

    QStringList data = infos.split(CONTACT_SEPARATOR);
    QString email = data.at(2);
    QString numberphone = data.at(3);

    QString id = email + numberphone;
    if(!m_ids.contains(id))
    {
        createID(email, numberphone);
        Contact* retContact = new Contact(infos);
        return retContact;
    }

//    retContact->updateID();

//    return retContact;
    return nullptr;
}
