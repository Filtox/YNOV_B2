#include "contactlist.h"
#include <QDebug>
ContactList* ContactList::m_instance = nullptr;
ContactList::ContactList()
{
    qDebug()<<__FUNCTION__;
}

ContactList *ContactList::Create()
{
    if( m_instance == nullptr){
        m_instance = new ContactList();
    }
    qDebug()<<__FUNCTION__;
    return m_instance;
}

void ContactList::Load()
{
    qDebug()<<__FUNCTION__;
}

void ContactList::Save()
{
     qDebug()<<__FUNCTION__;
}
