# Simple To-Do Application (Laravel)

A clean, beginner-friendly, and lightweight To-Do List application built with **Laravel**, **Eloquent ORM**, **SQLite**, and styled using **Tailwind CSS**. This project is designed to help absolute beginners understand the core MVC (Model-View-Controller) architecture, routing, database migrations, and basic CRUD (Create, Read, Update, Delete) operations in Laravel.

---

## Features

- **Task Creation:** Add new tasks with real-time input validation.
- **Task Listing:** View all stored tasks fetched dynamically from the database.
- **Task Editing:** Update existing task titles using a dedicated edit view and route model binding.
- **Task Deletion:** Remove tasks seamlessly with secure `DELETE` request spoofing.
- **Responsive UI:** Clean, modern, and minimal design powered by Tailwind CSS.
- **Lightweight Database:** Uses SQLite out-of-the-box, requiring zero complex database server configuration.

---

## Tech Stack

- **Backend:** PHP 8.2+, Laravel Framework
- **Database:** SQLite
- **Frontend:** Blade Templates, Tailwind CSS (via CDN)
- **Version Control:** Git

---

## Prerequisites

Before getting started, make sure you have the following installed on your local machine:
- PHP (8.2 or higher)
- Composer (PHP Package Manager)
- Git

---

## Installation & Setup Guide

Follow these steps to set up and run the project locally:

### 1. Clone the Repository
```bash
git clone https://github.com/your-username/simple-todo.git
cd simple-todo
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Environment Configuration
Copy the example environment file and generate your application key:
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Setup the SQLite Database
Create an empty SQLite database file in the `database/` directory:
- **On Mac/Linux:**
  ```bash
  touch database/database.sqlite
  ```
- **On Windows (PowerShell):**
  ```powershell
  New-Item -ItemType File database/database.sqlite
  ```

Ensure your `.env` file points to SQLite:
```env
DB_CONNECTION=sqlite
# DB_DATABASE=database/database.sqlite
```

### 5. Run Database Migrations
Run the migrations to build your database schema:
```bash
php artisan migrate
```

### 6. Start the Development Server
Launch the local development server:
```bash
php artisan serve
```

Open your web browser and navigate to the local URL provided in your terminal (typically `http://127.0.0.1:8000`).

---

## Project Structure Overview

- `app/Http/Controllers/TaskController.php` — Manages HTTP requests, data validation, and interaction with the Task model.
- `app/Models/Task.php` — Eloquent model representing the `tasks` table.
- `database/migrations/` — Contains database schema version control files.
- `routes/web.php` — Defines application routes for listing, storing, editing, updating, and deleting tasks.
- `resources/views/` — Blade view templates (`tasks.blade.php` and `edit.blade.php`).

---

## License

This project is open-source and available under the [MIT License](LICENSE).
