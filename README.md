# User Authentication & Role-based Authorization in Laravel

## Overview
This Laravel project is built to handle user authentication and manage access control using roles. It includes features like user registration, login, password reset, and role-based access restrictions to secure certain routes and actions.

## Key Features
- Secure user registration and login system
- Role-based access control for different parts of the application
- Middleware for route protection based on user roles
- Password recovery via email
- User roles management (Admin, User, etc.)

## Technology Stack
- **Laravel**: MVC PHP framework for web development
- **MySQL**: Relational database for storing user information and roles
- **Blade Templates**: Templating engine for Laravel views
- **Bootstrap**: CSS framework for responsive UI
- **Composer**: Dependency manager for PHP

## How to Set Up Locally
1. Clone the repository: `git clone <repository-url>`
2. Install the required packages: `composer install`
3. Configure the `.env` file with your database credentials
4. Run migrations to create the required tables: `php artisan migrate`
5. Start the development server: `php artisan serve`
6. Visit the application at `http://localhost:8000`

## Folder Structure
- `routes/web.php`: Manages application routes
- `app/Models/User.php`: Defines user models and relationships
- `app/Http/Middleware`: Contains custom middleware for role-based access control
- `resources/views`: Blade templates for the frontend

## How to Use
1. Register or log in as a user.
2. Admin users can manage roles and permissions.
3. Certain pages/routes are only accessible to users with specific roles.

## License
This project is distributed under the MIT License.
