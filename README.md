<div align="center">

### ABUTEL API

</div>

## 📙 Description

ABUTEL API is a RESTful API that allows users to manage telephone directory entries such as names, phone numbers, addresses, and departments. It also supports user authentication using email or username via Laravel Sanctum.

### API Endpoints

Below is the table of available API endpoints:

| Method | Endpoint         | Description                              |
| ------ | ---------------- | ---------------------------------------- |
| POST   | /login           | Authenticate user via email or username  |
| POST   | /logout          | Logout current authenticated user        |
| GET    | /telephones      | Retrieve all telephone directory entries |
| POST   | /telephones      | Create a new telephone directory entry   |
| GET    | /telephones/{id} | Retrieve details of a specific entry     |
| PUT    | /telephones/{id} | Update a specific telephone entry        |
| DELETE | /telephones/{id} | Delete a specific telephone entry        |

## 📖 Features

1. Login using email or username.
2. Manage telephone directory (CRUD operations).
3. Authentication is only required for login/logout.

## Project Resources

1. PHP
2. Laravel Framework
3. Sanctum for API Authentication

## 🛠️ Project Installation Guide

Here are the steps to install and run the project:

### Prerequisites

- PHP >= 8.1
- Composer
- MySQL or any supported database

### Steps

**1.** Clone the repository into a local directory:

```bash
git clone https://github.com/ramadhanabelio/abutel-api.git
```

**2.** Navigate to the project directory:

```bash
cd abutel-api
```

**3.** Install Laravel dependencies using Composer:

```bash
composer install
```

**4.** Copy and configure the environment variables:

```bash
cp .env.example .env
php artisan key:generate
```

**5.** Configure your database credentials in `.env`, then run:

```bash
php artisan migrate
```

**6.** Serve the application:

```bash
php artisan serve
```

The server should now be running at `http://localhost:8000`.

### Authentication Usage

**Login:**

```bash
POST /login
Body: {
    "login": "adminitkpi",
    "password": "magangitkpi"
}
```

**Logout:**

```bash
POST /logout
Header: Authorization: Bearer {your_token}
```
