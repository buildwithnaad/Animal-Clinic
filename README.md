<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# animal-care-laravel
_A simple laravel based system to help with animal care_

## Technologies used
- MVC architecture
- Front-end based on HTML, CSS, Bootstrap, JS, jQuery
- TailwindCSS on the homepage
- Back-end based on PHP, using the famous Laravel 8 framework
- Authentication based on Laravel Breeze scafolding
- MySQL Database
- DomPDF to generate PDF reports.

## Services Used
- Github
- Material Icons
- Tailwind Gradient Generator
- Laravel Docs

## System Features
- Management of Clients, Animals and Procedures
- Management of the stock
- Autocomplete features on search bars
- Reports of the procedures, and products in stock
- Listing of the procedures done with every registered animal

## Getting Started
- First, clone the repo.
- Start your local server and create a MySQL Database.
- Rename .env.example to .env and change DB_DATABASE, DB_USERNAME and DB_PASSWORD with the DB info that you've just created.
- Then simply run
```
php artisan migrate
php artisan db:seed
php artisan serve
```

Then open your [localhost](http://localhost:8000/) with your browser and voilà. You'll have an authenticated user with the following email and password
```
admin@app.com
password
```

## How to use

### Here's the homepage, to access the dashboard, click in "Área Restrita"
![Screenshot of the homepage](/public/readme/homepage.png)

### Login in the system
![Screenshot of the login area](/public/readme/login.png)

### This is the dashboard home, with the cool pictures (told ya!)
![Screenshot of the dashboard area](/public/readme/dashboard.png)

### Create a client on this page
![Screenshot of the client area](/public/readme/clients.png)

### Then link an animal to it
![Screenshot of the animal area](/public/readme/animals.png)

### Register a product on this page
![Screenshot of the products area](/public/readme/products.png)

### Enter with a new procedure on this page
![Screenshot of the procedures area](/public/readme/procedure.png)

### Then generate a new procedure
![Screenshot of the generate procedures area](/public/readme/generate_procedure.png)

### Now go check the reports!!!
![Screenshot of the procedure report](/public/readme/procedure_report.png)
![Screenshot of the product report](/public/readme/products_report.png)

## Features
- Homepage built with tailwind
- Create a new user
- Complete Authentication
- Register new clients
- Register new animals
- Register new products
- Register new procedures
- Make a procedure linking the procedure to the products and animal
- Two monthly reports: products available report and all procedures done ordered by clients
- And the most important of all: cute random pictures on the dashboard screen 😁

## Authors
Lucas Porfirio: @lukeskw (https://github.com/lukeskw)
Please follow my github and join us! Thanks to visiting me and good coding!

Ps: This was my very first laravel project, and it does plays a huge part on my history as a developer. And I'm very proud of it!
>>>>>>> legacy/v1.0
