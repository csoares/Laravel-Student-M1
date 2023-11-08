<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>





# Setup Instructions

Follow these steps to set up your Laravel project locally:

## Prerequisites

- [PHP](https://php.net/manual/en/install.php) (version specified in your `composer.json` file)
- [Composer](https://getcomposer.org/download/) - Package manager for PHP
- A webserver (like [Apache](https://httpd.apache.org/docs/2.4/platform/windows.html), [Nginx](https://docs.nginx.com/nginx/admin-guide/installing-nginx/installing-nginx-open-source/), etc.)
- [MySQL](https://dev.mysql.com/downloads/installer/) (Or any database that you prefer)

## Installation

1. Clone the repository
```bash
git clone {repository_path}
```
2. Navigate to the project directory
```bash
cd {project-directory}
```
3. Install dependencies
```bash
composer install
```
4. Copy .env.example to .env
```bash
cp .env.example .env
```
5. Set up your environment variables in .env file
6. Generate application key
```bash
php artisan key:generate
```
7. Run the database migrations (Set the database connection in .env before migrating)
```bash
php artisan migrate
```
8. Serve the Laravel application
```bash
php artisan serve
```
9. Visit the application in your browser at http://localhost:8000

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


Last Edtion - 2022
