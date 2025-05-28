# Laravel Starter Kit

A Laravel project starter kit with Filament and Filament Shield pre-installed.

## Features

- Laravel Framework
- Filament Admin Panel
- Filament Shield for authentication
- Modern UI components
- Development tools included

## Installation

1. Install the starter kit:
```bash
composer create-project starterkit/laravel your-project-name
```

2. Navigate to the project directory:
```bash
cd your-project-name
```

3. Install dependencies:
```bash
composer install
```

4. Generate application key:
```bash
php artisan key:generate
```

5. Run database migrations:
```bash
php artisan migrate
```

6. Start the development server:
```bash
php artisan serve
```

## Accessing the Admin Panel

- Admin URL: `http://your-project.test/admin`
- Default admin credentials:
  - Email: `admin@example.com`
  - Password: `password`

## License

This project is open-sourced software licensed under the [MIT license](LICENSE).
