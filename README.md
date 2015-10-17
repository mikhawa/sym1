sym1
====

A Symfony project created on October 17, 2015, 11:02 am.

Ce nouveau projet est créé à partir de la dernière version lts (Long Term Support) qui est à ce jour la 2.7.5

1) Téléchargement du fichier d'installation de symfony

- Vérification que php est une commande reconnue dans le système path de Windows

- Récupération de l'installateur sur symfony.com en ouvrant l'invite de commande (cmd.exe) sous Windows, et en se plaçant dans le dossier www de wamp avant de
tapper la ligne ci-dessous ( e: => cd wamp2.5/www => dans mon cas)

php -r "file_put_contents('symfony', file_get_contents('http://symfony.com/installer'));"

2) Installation de symfony

- Ecrivons la commande suivante en restant dans le dossier www

php symfony new sym1 lts

Le dossier sym1 est créé et symfony s'y installe

- Rentrons dans le dossier sym1 en tappant 

cd sym1

- Utilisons la commande qui va m'afficher tout ce qu'on peut faire avec la console avec ce symfony de base:

php app/console

