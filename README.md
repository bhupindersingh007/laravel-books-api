## Introduction

Laravel books API is a RESTfull API application made on the top of Laravel framework and for authentication, it uses the Sanctum token based authentication package.

## Installation

**Requirements**: PHP >= 8.1, Composer, RDBMS (such as MySQL, MariaDB, PostgreSQL, etc.)

**Installation Steps:**

1. Clone the repository ```git clone https://github.com/bhupindersingh007/laravel-books-api.git``` or download zip.
2. Open the directory ```laravel-books-api``` in the terminal.
3. Install composer dependencies ```composer install```.
4. Make a new ```.env``` file and copy ```.env.example``` file to ```.env```.
5. Set the database configuration in the ``.env`` like ```DB_DATABASE, DB_USERNAME and DB_PASSWORD```.
7. Generate key: ```php artisan key:generate```.
8. Run the migration with seeder: ```php artisan migrate:fresh --seed```.
9. Run the application: ```php artisan serve```.

## API Documentation

The Laravel books API application provides the following routes or api endpoints:

**Books API**

- GET - ```/api/books``` : list books data ```(id, title, isbn, published_at, category, authors, publisher)```.
- GET - ```/api/books/1``` : give book data with id as ```"1"```
- GET - ```/api/books?search=atomic``` : list books with title containing ```"atomic"```
- GET - ```/api/books?page=2``` : list books in the second page of paginator.

**Authors API**

- GET - ```/api/authors``` : list authors data ```(id, name, email_address, website)```. 
- GET - ```/api/authors/1``` : give author data with id ```"1"```.
- GET - ```/api/authors?search=james``` : list authors with name containing ```"james"```.
- GET - ```/api/authors?page=3``` : list authors in the third page of paginator.

**Authors API**

- GET - ```/api/publishers``` : list publishers data ```(id, name, email_addres, contact_number, address, website)```.
- GET - ```/api/publishers/6```: give publisher data with id of ```"6"```.
- GET - ```/api/publishers?search=Penguin``` : list publishers with name containing ```"Penguin"```.
- GET - ```/api/publishers?page=1```: list publishers in the first page of paginator.


**Authors API**

- GET - ```/api/categories``` : list categories ```(id, name)```.
- GET - ```/api/categories/5``` : give category data with id of ```"5"```.
- GET - ```/api/categories?search=Fantasy``` : search categories with word ```"Fantasy"```.
- GET - ```/api/categories?page=1``` : list categories in the third page of paginator.


**Authors API**

- POST - ```/api/login``` : allow user to login by providing valid ```email``` and ```password```, and give logined user information and api access token as json response 
- POST - ```/api/register``` : allow user to register by valid ```name, email and password``` and give logined user information and api access token. 
- POST - ```/api/logout``` :  this endpoint will logout the user and delete token. The user has to provide access token in the header ```Authorization: Bearer token```

**Logged In User API**

- GET - ```/api/user``` : give the data of currently logged in user.

***NOTES*** : 

- Add ```Accept: application/json``` and ```Authorization: Bearer token``` in all the request header except ```/api/login``` and ```/api/register``` api endpoints. 
- All api endpoints are secured by ```auth:sanctum``` middleware by Sanctum except ```/api/login``` and ```/api/register``` api endpoints.

## Technology Stack 

- [PHP 8.1](https://www.php.net/) - A popular general-purpose scripting language for web development.
- [Laravel 10](https://laravel.com/docs/10.x) - PHP fullstack web application framework.
- [Sanctum 3.2](https://laravel.com/docs/10.x/sanctum) - featherweight token based authentication system for SPAs.
- [MySQL 8.0](https://dev.mysql.com/doc/relnotes/mysql/8.0/en/) - The world's most popular open source relational database.

## Credits 

The following resources helped me a lot in my Laravel learning journey:

- [Laravel Docs](https://laravel.com/docs) - Laravel Documentation 
- [Laracasts](https://laracasts.com/) - Amazing platform to learn about PHP & Laravel and other technologies from top creators.
- [Laravel Daily](https://www.youtube.com/@LaravelDaily) -The most awesome YouTube channel to learn the Laravel framework. 



