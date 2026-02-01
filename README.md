# CoffeSkuy ☕

Sebuah aplikasi web untuk review dan discovery cafe yang dibangun dengan Laravel. CoffeSkuy memungkinkan pengguna untuk menemukan cafe terbaik, membaca dan menulis review, serta menyimpan cafe favorit.

## 🚀 Fitur Utama

- **Pencarian Cafe**: Temukan cafe berdasarkan lokasi dan rating
- **Review & Rating**: Baca dan tulis review untuk cafe favorit
- **Favorit**: Simpan cafe favorit untuk akses cepat
- **User Authentication**: Sistem login dan registrasi yang aman
- **Admin Dashboard**: Panel admin untuk mengelola cafe dan review
- **Payment Integration**: Integrasi dengan Stripe untuk pembayaran

## 🛠 Teknologi yang Digunakan

- **Backend**: Laravel 11
- **Frontend**: Blade Templates, Bootstrap
- **Database**: MySQL
- **Payment**: Stripe
- **Authentication**: Laravel Sanctum
- **Alerts**: SweetAlert2

## 📋 Prasyarat

- PHP 8.2 atau lebih tinggi
- Composer
- MySQL/MariaDB
- Node.js & NPM
- Git

## ⚙️ Instalasi

1. **Clone repository**
   ```bash
   git clone [URL_REPOSITORY]
   cd coffeskuy_new
   ```

2. **Install dependensi PHP**
   ```bash
   composer install
   ```

3. **Install dependensi JavaScript**
   ```bash
   npm install
   npm run build
   ```

4. **Setup environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Konfigurasi database**
   Edit file `.env` dan sesuaikan konfigurasi database:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=coffeskuy_db
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Konfigurasi Stripe (Optional)**
   ```env
   STRIPE_KEY=your_stripe_publishable_key
   STRIPE_SECRET=your_stripe_secret_key
   ```

7. **Migrasi database**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

8. **Storage link**
   ```bash
   php artisan storage:link
   ```

9. **Jalankan server**
   ```bash
   php artisan serve
   ```

## 📁 Struktur Project

```
coffeskuy_new/
├── app/
│   ├── Http/Controllers/     # Controllers
│   ├── Models/              # Eloquent Models
│   └── Http/Middleware/     # Custom Middleware
├── database/
│   ├── migrations/          # Database Migrations
│   └── seeders/            # Database Seeders
├── resources/
│   ├── views/              # Blade Templates
│   └── js/                 # JavaScript Files
└── routes/
    └── web.php             # Web Routes
```

## 🎯 Fitur Utama

### User Management
- Registrasi dan login pengguna
- Role-based access (User, Admin)
- Profile management

### Cafe Management
- CRUD cafe
- Upload gambar cafe
- Kategorisasi cafe

### Review System
- Rating 1-5 bintang
- Komentar review
- Filter berdasarkan rating

### Admin Features
- Dashboard admin
- Manajemen pengguna
- Manajemen cafe
- Monitoring review

## 🔑 API Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/` | Homepage |
| GET | `/cafe` | List cafe |
| GET | `/cafe/{id}` | Detail cafe |
| POST | `/reviews` | Create review |
| GET | `/favorites` | User favorites |

## 🤝 Kontribusi

1. Fork repository ini
2. Buat branch fitur baru (`git checkout -b feature/AmazingFeature`)
3. Commit perubahan (`git commit -m 'Add some AmazingFeature'`)
4. Push ke branch (`git push origin feature/AmazingFeature`)
5. Buat Pull Request

## 📝 License

Proyek ini menggunakan lisensi MIT - lihat file [LICENSE](LICENSE) untuk detail.

## 👥 Tim Pengembang

- **[Nama Tim]** - *Initial work*

## 📧 Kontak

Untuk pertanyaan atau saran, silakan hubungi:
- Email: [email@example.com]
- Project Link: [https://github.com/username/coffeskuy]

---
⭐ Jangan lupa untuk memberikan star jika project ini membantu!
