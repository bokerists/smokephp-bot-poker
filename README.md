php bot player
===

PHP client for [Bot Poker](https://bot-poker.herokuapp.com/about).

Developer? Check the [wiki](https://bot-poker.herokuapp.com/wiki).

how to run on localhost
---

```
cd path/to/this/repo
php -r "readfile('https://getcomposer.org/installer');" | php
php composer.phar install
php -S localhost:8080 -t ./ ./index.php
```

More [info](http://php.net/manual/en/features.commandline.webserver.php).
