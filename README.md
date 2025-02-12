# Laravel Installation Guide

## Prerequisites
Before installing Laravel, ensure you have the following installed:

1. **XAMPP** (Includes PHP and MySQL)
2. **Composer** (PHP dependency manager)
3. **Node.js** (For frontend assets, optional)

---

## Step 1: Install XAMPP (PHP & MySQL)

1. Download XAMPP from the official site: [https://www.apachefriends.org](https://www.apachefriends.org)
2. Install XAMPP and ensure **Apache** and **MySQL** are running.
3. Check PHP installation:
   ```sh
   php -v
   ```
   If PHP is installed correctly, it will display the version.

---

## Step 2: Install Composer

1. Download Composer from [https://getcomposer.org](https://getcomposer.org).
2. Run the installer and follow the setup process.
3. Verify installation by running:
   ```sh
   composer -v
   ```

---

## Step 3: Create a Laravel Project

1. Open a terminal (PowerShell or Command Prompt) and navigate to your desired directory:
   ```sh
   cd C:\xampp\htdocs
   ```
2. Run the following command to create a new Laravel project:
   ```sh
   composer create-project laravel/laravel my-laravel-app
   ```
3. Change into the project directory:
   ```sh
   cd my-laravel-app
   ```

---

## Step 4: Serve Laravel Application

To start the Laravel development server, run:
```sh
php artisan serve
```
This will start the application at: `http://127.0.0.1:8000`

---

## Step 5: Configure Database (Optional)
If using MySQL, update `.env` file with your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=my_database
DB_USERNAME=root
DB_PASSWORD=
```
Then run:
```sh
php artisan migrate
```

---

## Additional Commands
- **Clear Cache:** `php artisan cache:clear`
- **Generate App Key:** `php artisan key:generate`
- **Migrate Database:** `php artisan migrate`

Now you're ready to build with Laravel! 🚀

15:00