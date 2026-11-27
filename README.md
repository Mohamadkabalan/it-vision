# IT Vision Website

> This is an older copy. The maintained version, with full history and the latest changes, is the `itvision` repository on the same account.

A company website built for a client in IT and web services. Staff manage the banners, services and portfolio gallery in an admin panel. Visitors can browse the services and portfolio, send a contact message, or apply for a job with a CV upload.

**Built on:**
- [Laravel](https://laravel.com) 8 application skeleton (MIT)
- [Voyager](https://voyager.devdojo.com) admin panel (`tcg/voyager`, MIT), mounted at `/admin`
- A third-party HTML/CSS site template (Bootstrap-based, vendor not identified) for the front-end design

The custom work is the Laravel integration: Blade layouts and partials built from the template, models, controllers, routes, and the contact and careers forms.

## Features

- Home page with a database-driven hero banner and portfolio gallery, plus about, services, process steps, testimonials and a contact section
- Services list with AJAX pagination, and service detail pages
- "Works" portfolio page fed from the gallery content
- Careers page: an application form with a resume upload, stored through Voyager's storage disk (`app/Services/FileContent.php`)
- Contact form that saves messages through a JSON endpoint
- Content managed through Voyager BREAD screens
- `Localization` middleware with English and Arabic translation files

## Stack

PHP 7.3/8, Laravel 8, Voyager 1.5, Intervention Image, MySQL, Blade, jQuery, Bootstrap. Docker files for Laravel Sail are included.

## Getting started

```bash
composer install
cp .env.example .env          # set DB credentials and APP_URL
php artisan key:generate
php artisan migrate
php artisan db:seed           # Voyager roles, permissions, menus and settings
php artisan storage:link
php artisan serve
```

The content tables (banners, galleries, services, careers, contacts and so on) are not covered by migrations in this repository. Create them through Voyager's database manager or from a database export.

## Project structure

```
app/*.php                       models: Banner, Gallery, Service, Career, Contact, Blog, About
app/Http/Controllers/           Services, Career, Contact
app/Services/FileContent.php    upload helper for the careers form
resources/views/                Blade views (home/, about/, services/, works/, career/, contact-us/)
resources/lang/{en,ar}/         translation strings
```
