# CoffeSkuy

A modern web application for cafe review and discovery built with Laravel. Discover the best cafes, share your experiences, and connect with fellow coffee enthusiasts.

## Features

- **Cafe Discovery** - Search and explore cafes by location, rating, and category
- **Review System** - Rate cafes and share detailed reviews with the community  
- **Personal Favorites** - Save your favorite cafes for quick access
- **User Dashboard** - Manage your profile, reviews, and favorite locations
- **Admin Panel** - Comprehensive management system for cafes and user content
- **Secure Payments** - Integrated Stripe payment system for premium features

## Technologies

- **Laravel 11** - Modern PHP framework for robust backend development
- **MySQL** - Reliable database management system
- **Bootstrap** - Responsive frontend framework for beautiful UI
- **Stripe** - Secure payment processing integration
- **Laravel Sanctum** - API authentication system
- **SweetAlert2** - Enhanced user notifications and alerts

## Prerequisites

Before you begin, ensure you have the following installed:
- PHP 8.2 or higher
- Composer
- MySQL/MariaDB
- Node.js & NPM
- Git

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/adhitamaw/caffeskuy-web.git
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

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure database**
   Edit the `.env` file and update database configuration:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=coffeskuy_db
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Configure Stripe (Optional)**
   Add your Stripe keys to `.env`:
   ```env
   STRIPE_KEY=your_stripe_publishable_key
   STRIPE_SECRET=your_stripe_secret_key
   ```

7. **Run database migrations**
   ```bash
   php artisan migrate --seed
   ```

8. **Create storage link**
   ```bash
   php artisan storage:link
   ```

9. **Start the development server**
   ```bash
   php artisan serve
   ```

## Project Structure

```
coffeskuy_new/
├── app/
│   ├── Http/Controllers/     # Application controllers
│   ├── Models/              # Eloquent models
│   └── Http/Middleware/     # Custom middleware
├── database/
│   ├── migrations/          # Database migrations
│   └── seeders/            # Database seeders
├── resources/
│   ├── views/              # Blade templates
│   └── js/                 # JavaScript assets
├── routes/
│   └── web.php             # Web routes
└── public/
    ├── css/                # Compiled CSS
    └── js/                 # Compiled JavaScript
```

## Key Components

### User Management
- User registration and authentication
- Role-based access control (User, Admin)
- Profile management and settings

### Cafe Management
- Create, read, update, delete cafe entries
- Image upload for cafe photos
- Categorization and tagging system

### Review System
- 5-star rating system
- Written reviews and comments
- Review filtering and sorting

### Admin Features
- Comprehensive admin dashboard
- User and cafe management
- Review moderation tools

## API Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/` | Application homepage |
| GET | `/cafe` | List all cafes |
| GET | `/cafe/{id}` | Show cafe details |
| POST | `/reviews` | Create new review |
| GET | `/favorites` | User's favorite cafes |

## Contributing

We welcome contributions to CoffeSkuy! Please follow these steps:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is open-sourced software licensed under the [MIT license](LICENSE).


