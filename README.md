To Install
==========


```
$ composer install
$ php app/console sonata:easy-extends:generate SonataUserBundle -d src
$ php app/console assets:install web
$ php app/console doctrine:database:create
$ php app/console init:acl
$ php app/console doctrine:schema:update --force
$ php app/console fos:user:create --super-admin
$ php app/console sonata:admin:setup-acl
```