<h1 align="center">Welcome to Film Factory 👋</h1>
<p>
  <img alt="Version" src="https://img.shields.io/badge/version-v1-blue.svg?cacheSeconds=2592000" />
</p>

> A movie booking application which uses CRUD functionality and user authentication. Built in Laravel 10 and using the Breeze package. 
> Chose Breeze as it is light weight package for a project like this 
> Using Tailwind for the frontend 

## Install

```sh
npm install
```

## Author

👤 **Rose Dikotope**

* Github: [@dikotoperose](https://github.com/dikotoperose)

## Film Factory App

```sh
Introduction

Film Factory is an application built using PHP 7.2 and MySQL based on the Laravel 10 framework as a backend and the Breeze package.
For the frontend, HTML5, Tailwind and Jquery 3.6 were used.

Components
The application is structured based on the Model View Controller pattern. A few other concepts were
employed to make the application self composed and easier to deploy. The components are structured
according to the Laravel project structure. The components are as follows:
- Database
- MySQL database connection
- Laravel database migrations: Database migrations were used to create the database
schema in a reproducible manner.
- Laravel seeders: Seeders were used to inject initial data into the database. For this project
the MovieSeeder and CinemaSeeder was used to populate the movie and cinema tables with the initial data supplied.

- Models
- A Booking model: Model represents the Booking table.
- A Cinema model: Model represents the Cinema table.
- A Movie model: Model represents the Movie table.

- Controllers
- A BookingController: Controller handles requests to display pages and HTTP requests to
handle booking creation and booking cancellations.

Deployment
To successfully deploy and use the application the following steps apply:
1. Clone the repo from git and place it in your desired directory for example the home
directory (~/).
2. Ensure Composer package manager is installed (https://getcomposer.org/doc/00-intro.md). This is
necessary as the project is not packaged with the framework dependencies in the vendor directory.
3. In the command line, navigate to the directory where the project is placed:
4. Issue the command to install the project framework packages:
a. composer install
5. Edit the .env file in the project’s directory to provide your MySQL database details:

DB_DATABASE=film_factory
DB_USERNAME=username
DB_PASSWORD=password

6. Issue the command to install the database schema and default data:
a. php artisan migrate:fresh --seed
7. Run the built-in web server to serve the application:
a. php artisan serve
8. Visit the project URL printed, by default it is http://127.0.0.1:8000

Notes
1. Register a new user
2. The provided database was recreated using Laravel migration and seeder.
```
