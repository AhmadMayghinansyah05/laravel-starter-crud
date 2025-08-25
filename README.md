# 🎉 Event Management - Laravel Dummy Project

Proyek ini adalah contoh aplikasi Laravel sederhana untuk latihan **Landing Page**, **Autentikasi**, dan **CRUD Event**.  
Dibuat sebagai fondasi awal pengembangan aplikasi Laravel dalam tim.

---

## 🚀 Cara Instalasi

1. **Clone repository**
   ```bash
   git clone https://github.com/AhmadMayghinansya05/laravel-starter-crud.git
   cd laravel-starter-crud
Install dependencies

bash
Copy
Edit
composer install
npm install && npm run build
Copy file .env

bash
Copy
Edit
cp .env.example .env
Generate key

bash
Copy
Edit
php artisan key:generate
Atur database di .env
Contoh menggunakan MySQL:

env
Copy
Edit
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=larvel_event
DB_USERNAME=root
DB_PASSWORD=
Jalankan migrasi & seeder

bash
Copy
Edit
php artisan migrate --seed
▶️ Cara Menjalankan Proyek
bash
Copy
Edit
php artisan serve
Akses di browser: http://localhost:8000

📂 Struktur Folder Penting
bash
Copy
Edit
event-management/
├── app/
│   ├── Http/Controllers/   # Controller (EventController, LandingController, Auth, dll.)
│   ├── Models/             # Model (Event, User)
│
├── database/
│   ├── migrations/         # File migrasi tabel (users, events)
│   └── seeders/            # Seeder untuk dummy data
│
├── resources/
│   ├── views/              # Blade templates
│   │   ├── layouts/        # app.blade.php, dashboard.blade.php
│   │   ├── auth/           # Login, Register, Verify, Confirm Password
│   │   └── events/         # index, create, edit, show
│
├── routes/
│   └── web.php             # Routing aplikasi
│
└── README.md
👤 Sample User Login
Seeder membuat akun dummy otomatis, gunakan data berikut untuk mencoba login:

Email: demo@example.com

Password: password

🛠️ Tech Stack
Backend: Laravel 11+

Frontend: Blade + Bootstrap 5

Database: MySQL / SQLite

Auth: Laravel Breeze
