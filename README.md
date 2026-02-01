# CoffeSkuy

A web application for cafe review and discovery built with Laravel. CoffeSkuy allows users to find the best cafes, read and write reviews, and save favorite cafes.

## Key Features

- **Cafe Search**: Find cafes based on location and rating
- **Review & Rating**: Read and write reviews for favorite cafes
- **Favorites**: Save favorite cafes for quick access
- **User Authentication**: Secure login and registration system
- **Admin Dashboard**: Admin panel to manage cafes and reviews
- **Payment Integration**: Stripe integration for payments

## Technologies Used

- **Backend**: Laravel 11
- **Frontend**: Blade Templates, Bootstrap
- **Database**: MySQL
- **Payment**: Stripe
- **Authentication**: Laravel Sanctum
- **Alerts**: SweetAlert2

## Prerequisites

- PHP 8.2 or higher
- Composer
- MySQL/MariaDB
- Node.js & NPM
- Git

## Installation

1. **Clone repository**
   ```bash
   git clone [REPOSITORY_URL]
   cd coffeskuy_new
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install JavaScript dependencies**
   ```bash
   npm install
   npm run build
   ```

4. **Setup environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure database**
   Edit the `.env` file and adjust database configuration:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=coffeskuy_db
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Configure Stripe (Optional)**
   ```env
   STRIPE_KEY=your_stripe_publishable_key
   STRIPE_SECRET=your_stripe_secret_key
   ```

7. **Database migration**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

8. **Storage link**
   ```bash
   php artisan storage:link
   ```

9. **Run server**
   ```bash
   php artisan serve
   ```

## Project Structure

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

## Main Features

### User Management
- User registration and login
- Role-based access (User, Admin)
- Profile management

### Cafe Management
- CRUD operations for cafes
- Cafe image upload
- Cafe categorization

### Review System
- 1-5 star rating system
- Review comments
- Filter by rating

### Admin Features
- Admin dashboard
- User management
- Cafe management
- Review monitoring

## API Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/` | Homepage |
| GET | `/cafe` | List cafes |
| GET | `/cafe/{id}` | Cafe details |
| POST | `/reviews` | Create review |
| GET | `/favorites` | User favorites |

## Contributing

1. Fork this repository
2. Create a new feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Create a Pull Request

## License

This project uses the MIT license - see the [LICENSE](LICENSE) file for details.

## Development Team

- **[Team Name]** - *Initial work*

## Contact

For questions or suggestions, please contact:
- Email: [email@example.com]
- Project Link: [https://github.com/adhitamaw/caffeskuy-web]

---
Don't forget to give a star if this project helps you!
