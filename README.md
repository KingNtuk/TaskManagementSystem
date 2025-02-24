Task Manager

Introduction

The Laravel Task Manager is a task management application built with Laravel (backend). It allows users to create, edit, delete, and update task statuses, ensuring efficient task tracking and organization.

Features

User Authentication (Login/Logout)

Task CRUD Operations (Create, Read, Update, Delete)

Task Status Updates (Pending/Completed)

Due Date Management

Backend:

Laravel 11 (PHP Framework), MySQL (Database) ,Laravel Sanctum (Authentication), i

installation & Setup-Prerequisites:

PHP 8.1+ , Composer, Node.js 16+, MySQL, Laravel CLI

Backend Setup
Clone the repository: 
git clone https://github.com/KingNtuk/TaskManagementSystem
cd TaskManagementSystem
composer install
cp .env.example .env

Generate application key:
php artisan key:generate

Configure database in .env file:
DB_DATABASE=task_manager
DB_USERNAME=root
DB_PASSWORD=yourpassword

Run migrations:
php artisan migrate

Start Laravel server:
php artisan serve

API Endpoints:

Method      Endpoint            Description

GET         /tasks          Fetch all tasks

POST        /tasks          Create a new task

PUT         /tasks/{id}     Update a task

DELETE      /tasks/{id}     Delete a task
