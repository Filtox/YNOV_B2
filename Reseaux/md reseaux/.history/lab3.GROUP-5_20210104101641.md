---
title: ”B2 - Lab 3 - GROUP NB”
author:
- Arnal Théo
- Da Silva Pierre
output:
pdf_document: default
---

# LAB_3 Reseau

## STAGE 0

Pour commencer, ouvrir GNS3 et créer un nouveau projet nommé Lab3. Dans ce projet nous allons avoir besoin de OPEN-WRT. Pour cela on va devoir clicker sur " New Template " -> "NEXT" puis choissisez la version de OPEN-WRT 19.07.4 . 

## STAGE 1 

Avant d'installer openssh-server, il faut éxécuter la commande : 
```
opkg update
```
afin d'obtenir la mise à jour des listes, ensuite faire :
```
opkg install openssh-server
```
Ensuite il faut editer le firewall dans *etc/config/firewall*. Il faut ajouter une règle pour pouvoir se connecter en SSH.<br><br>
![Firewall](images/firewall.png)<br><br>
Cela étant fait, il faut redémarrer le firewall avec la commande :
```
service firewall restart
```
Ensuite nous allons tester de nous connecter en ssh sur le routeur à l'aide de la commande suivante : 
``


