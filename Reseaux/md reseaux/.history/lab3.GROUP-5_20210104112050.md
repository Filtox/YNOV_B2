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

Pour commencer nous allons changer l'addresse ip lan du routeur. Pour cela : 
```
vim /etc/config/network
```
et modifier cette rule: <br><br> 

![Ip_Firewall](images/Ip_Firewall.png)<br><br>

Ensuite on va devoir installer openssh-server, il faut éxécuter la commande : 
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
```
sudo ssh -L88:127.0.0.1:80 root@192.168.122.9 -p 22
```
Maintenant que notre connexion marche nous allons allons ajoute une machine alpine Linux a notre routeur qui va prendre une adresse ip dynamique et qui va utiliser un serveur DNS donné par le routeur. Pour cela :







This is an extremely simple script for easily bringing up a WireGuard interface, suitable for a few common use cases.






This is an extremely simple script for easily bringing up a WireGuard interface, suitable for a few common use cases.






This is an extremely simple script for easily bringing up a WireGuard interface, suitable for a few common use cases.






This is an extremely simple script for easily bringing up a WireGuard interface, suitable for a few common use cases.






This is an extremely simple script for easily bringing up a WireGuard interface, suitable for a few common use cases.






This is an extremely simple script for easily bringing up a WireGuard interface, suitable for a few common use cases.






This is an extremely simple script for easily bringing up a WireGuard interface, suitable for a few common use cases.






This is an extremely simple script for easily bringing up a WireGuard interface, suitable for a few common use cases.






This is an extremely simple script for easily bringing up a WireGuard interface, suitable for a few common use cases.






This is an extremely simple script for easily bringing up a WireGuard interface, suitable for a few common use cases.






This is an extremely simple script for easily bringing up a WireGuard interface, suitable for a few common use cases.






This is an extremely simple script for easily bringing up a WireGuard interface, suitable for a few common use cases.






This is an extremely simple script for easily bringing up a WireGuard interface, suitable for a few common use cases.






This is an extremely simple script for easily bringing up a WireGuard interface, suitable for a few common use cases.






This is an extremely simple script for easily bringing up a WireGuard interface, suitable for a few common use cases.






This is an extremely simple script for easily bringing up a WireGuard interface, suitable for a few common use cases.






This is an extremely simple script for easily bringing up a WireGuard interface, suitable for a few common use cases.






This is an extremely simple script for easily bringing up a WireGuard interface, suitable for a few common use cases.






This is an extremely simple script for easily bringing up a WireGuard interface, suitable for a few common use cases.






This is an extremely simple script for easily bringing up a WireGuard interface, suitable for a few common use cases.






This is an extremely simple script for easily bringing up a WireGuard interface, suitable for a few common use cases.






This is an extremely simple script for easily bringing up a WireGuard interface, suitable for a few common use cases.