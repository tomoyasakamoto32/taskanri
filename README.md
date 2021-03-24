# Docker for Laravel

- Debian GNU/Linux 10
- MySQL 5.7
- PHP 7.2
- Node.js
- Composer
- Nginx

## Docker run

```
$ docker-compose up -d --build
```

## Create Laravel App
```
$ docker-compose exec app laravel new
```

## Access Laravel App

http://localhost


## Create Database in MySQL
```
$ docker-compose exec db mysql -uroot -ppassword

mysql> create database laravel default character set utf8;
```

## Edit .env
```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=password
```
