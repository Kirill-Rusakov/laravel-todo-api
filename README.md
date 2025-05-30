# Laravel TODO API

📦 Laravel-приложение для управления задачами с аутентификацией через Sanctum и REST API.

---

## 🚀 Стек технологий

- Laravel 9+
- Sanctum (аутентификация по токену)
- Eloquent ORM
- REST API (`routes/api.php`)
- PHPUnit (тестирование)
- MySQL / SQLite

---

## 🔧 Установка проекта

```bash
git clone https://github.com/your-username/laravel-todo-api.git
cd laravel-todo-api
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve

---

## 🔐 Аутентификация
POST /api/register — регистрация

POST /api/login — получение токена

POST /api/logout — выход

## 📌 После логина передавайте Bearer Token в заголовках Authorization

---

## 📌 Маршруты задач (auth:sanctum)
Метод	URI	Описание
GET	/api/tasks	Получить все задачи
POST	/api/tasks	Создать задачу
GET	/api/tasks/{id}	Получить задачу
PUT	/api/tasks/{id}	Обновить задачу
DELETE	/api/tasks/{id}	Удалить задачу

---

🧪 Тестирование
bash
Копировать
Редактировать
php artisan test

✅ Покрытие тестами (на данный момент): создание задачи
