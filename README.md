# Laravel User API

A simple RESTful API built with **Laravel 10** for managing users. Designed to be tested with Postman or any HTTP client.  

This project includes CRUD operations for a `User` model:

- `id`  
- `firstName`  
- `lastName`  
- `age`  
- `gender`  
- `height`  
- `weight`  
- `role` (admin | moderator | user)  

---

## Requirements

- PHP 8.0+  
- Composer  
- MySQL or MariaDB  
- XAMPP or any local server  

---

## Installation

1. Clone the repository:

```bash
git clone https://github.com/aarondiex/laravel-user-api.git
cd laravel-user-api
````

2. Install dependencies:

```bash
composer install
```

3. Copy `.env.example` to `.env` and configure your database:

```bash
cp .env.example .env
```

Update these variables:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=root
DB_PASSWORD=
```

4. Generate application key:

```bash
php artisan key:generate
```

5. Run database migrations:

```bash
php artisan migrate
```

6. Serve the application:

```bash
php artisan serve
```

Default URL: `http://127.0.0.1:8000`

---

## API Endpoints

| Method | Endpoint        | Description       |
| ------ | --------------- | ----------------- |
| GET    | /api/users      | List all users    |
| POST   | /api/users      | Create a new user |
| GET    | /api/users/{id} | Get a single user |
| PUT    | /api/users/{id} | Update a user     |
| DELETE | /api/users/{id} | Delete a user     |

---

### Example: Create User

POST `/api/users`
Content-Type: `application/json`

```json
{
  "firstName": "Emily",
  "lastName": "Johnson",
  "age": 28,
  "gender": "female",
  "height": 193.24,
  "weight": 63.16,
  "role": "admin"
}
```

Response: `201 Created`

```json
{
  "id": 1,
  "firstName": "Emily",
  "lastName": "Johnson",
  "age": 28,
  "gender": "female",
  "height": 193.24,
  "weight": 63.16,
  "role": "admin",
  "created_at": null,
  "updated_at": null
}
```

---

## Testing

* Use **Postman**, **Insomnia**, or any REST client to test the API endpoints.
* JSON responses are returned for all requests.

---

## License

This project is **open source** and available under the [MIT License](LICENSE).

```
