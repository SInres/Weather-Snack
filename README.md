## Installation

We need composer to install all packages. Here the complete instruction to install composer https://getcomposer.org/doc/00-intro.md

Let's install all packages, by running this command from Terminal
```
composer install
```
Let's do some database for example with phpmyadmin(Xampp, Wampp) and edit .env file where you must set up accesss to your database
```
.env
```
Let's do make aplication key
```
php artisan key:generate
```
Let's do some migration to database.
```
php artisan migrate
```
And run the web server
```
php artisan serve
```
Now, visit http://localhost:8000 to try the demo.


## Screenshot
![alt text](https://i.imgur.com/fSBNEjj.png)
