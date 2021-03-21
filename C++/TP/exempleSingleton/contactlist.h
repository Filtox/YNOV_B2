#ifndef CONTACTLIST_H
#define CONTACTLIST_H

#include <QString>




class ContactList
{
  ContactList();
  static ContactList* m_instance;

public: 

  static ContactList* Create();

    void Load();
    void Save();
};


#endif // CONTACTLIST_H
