# Laravel Installation Guide

## Prerequisites
Before installing Laravel, ensure you have the following:

1. **XAMPP** (PHP and MySQL)
2. **Composer** (PHP dependency manager)
3. **Node.js** (Optional for frontend assets)

---

## Step 1: Install XAMPP (PHP & MySQL)
1. Download XAMPP from the official site: [https://www.apachefriends.org](https://www.apachefriends.org)
2. Install XAMPP and ensure **Apache** and **MySQL** are running.
3. Verify PHP installation:
   ```bash
   php -v
If PHP is installed correctly, it will display the version.

Step 2: Install Composer
Download Composer from https://getcomposer.org.
Run the installer and follow the setup instructions.
Verify installation:

composer -v
Step 3: Create a Laravel Project
Open a terminal (PowerShell or Command Prompt) and navigate to your desired directory:

cd C:\xampp\htdocs
Create a new Laravel project:

composer create-project laravel/laravel my-laravel-app
Change into the project directory:

cd my-laravel-app
Step 4: Serve the Laravel Application
To start the Laravel development server, run:


php artisan serve
This will serve the application at: http://127.0.0.1:8000

Step 5: Create a Model & Migrate
Create a model and migration file for the Note model:

php artisan make:model Note -m
After editing the migration file, apply the migration:

php artisan migrate
If you update the migration file by adding or deleting columns, run:

php artisan migrate:refresh
Step 6: Seed the Database
To seed your database after migrating:


php artisan migrate:refresh --seed
Step 7: Create Controllers
Create a basic controller:

php artisan make:controller WelcomeController
Create a resource controller related to the Note model:

php artisan make:controller NoteController --resource --model=Note
Step 8: Create Views
To create a Blade view file for the notes index:


php artisan make:view note.index
Step 9: Build Frontend Assets
To compile frontend assets with Vite, run:


npm run build
This creates a build directory and enables you to use @vite in your Blade files for compiling CSS and JS.

Additional Commands for CRUD Operations
To create a Note model and migration:


php artisan make:model Note -m
To run migrations (apply the database schema):


php artisan migrate
To reset and reseed the database:


php artisan migrate:refresh --seed
To create a controller for your model with CRUD functionality:


php artisan make:controller NoteController --resource --model=Note
To create a view for notes:


php artisan make:view note.index


You're Ready to Build with Laravel! 🚀
Now you're all set to start building your Laravel application with the basic setup!

