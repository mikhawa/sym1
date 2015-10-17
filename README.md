sym1
====

A Symfony project created on October 17, 2015, 11:02 am.

Ce nouveau projet est créé à partir de la dernière version lts (Long Term Support) qui est à ce jour la 2.7.5

1) Téléchargement du fichier d'installation de symfony

- Je vérifie que php est une commande reconnue dans le système path de Windows

- Je récupère l'installateur sur symfony.com en ouvrant l'invite de commande (cmd.exe) sous Windows, et en me plaçant dans le dossier www de wamp avant de
tapper la ligne ci-dessous ( e: => cd wamp2.5/www => dans mon cas)

php -r "file_put_contents('symfony', file_get_contents('http://symfony.com/installer'));"

