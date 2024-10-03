# Laravel Project Setup

Welcome to the Laravel Project! Follow these steps to set up and run the project on your local machine.

## Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP >= 8.2
- Composer
- Node.js & npm
- MySQL or any other supported database

## Installation

### 1. Clone the Repository
```sh
git clone https://github.com/tactickfootball/webpages.git
cd webpages
```

### 2. Install Dependencies
Install PHP dependencies using Composer:
```sh
composer install
```

### 3. Environment Setup
Copy the .env.example file to .env:
```sh
cp .env.example .env
```

Generate the application key:
```sh
php artisan key:generate
```

### 4. Configure Database
Update your .env file with your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 5. Run Migrations
Run the database migrations:
```sh
php artisan migrate
```

### 6. Seed the Database
Seed the database with initial data
```sh
php artisan db:seed
```

Alternatively, refresh migrations and seed the database:
```sh
php artisan migrate:refresh --seed
```

### 7. Serve the Application
Start the local development server:
```sh
php artisan serve
```

Visit http://localhost:8000 in your browser to see the application.

### Additional Commands
Clear the application cache:
```sh
php artisan cache:clear
```

Clear the configuration cache:
```sh
php artisan config:clear
```

Clear the route cache:
```sh
php artisan route:clear
```

Clear the view cache:
```sh
php artisan view:clear
```

## Contributing
If you want to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch (git checkout -b feature-branch).
3. Make your changes.
4. Commit your changes (git commit -m 'Add some feature').
5. Push to the branch (git push origin feature-branch).
6. Create a Pull Request.

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to @shuyshuys via [hello@ahmadyaz.my.id](mailto:hello@ahmadyaz.my.id). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).