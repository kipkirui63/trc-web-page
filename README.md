# TRC AGC Church Website

A professional church website built using Laravel, Tailwind CSS, and Blade templates for the Africa Gospel Church.

## Project Overview

This project is a complete website for TRC Africa Gospel Church featuring a custom design with purple, white, and red color scheme. The website includes the following core features:

- Responsive home page with welcome message, upcoming events, and service times
- About page (history, mission, vision, leadership)
- Events calendar and management system
- Ministries/Departments section
- Donations system
- Contact information and form
- Blog/Announcements
- Admin dashboard with authentication and CRUD operations

## Technical Requirements

### Prerequisites

- PHP >= 8.1
- Composer
- Node.js and NPM
- MySQL or equivalent database
- Git

### Server Requirements

- Web server (Apache/Nginx)
- PHP >= 8.1
- MySQL >= 5.7 or MariaDB >= 10.3
- SSL certificate (recommended for production)

## Getting Started

Follow these steps to set up the project locally for development:

### 1. Clone the Repository

```bash
git clone git@github.com:fay-simotwo/trc-agc-web.git
cd trc-agc-church-web
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install Frontend Dependencies

```bash
npm install
npm run dev
```

### 4. Environment Configuration

```bash
cp .env.example .env
php artisan key:generate
```

Edit the `.env` file to configure your:
- Database connection
- Mail settings
- Application URL
- Other environment-specific settings

### 5. Database Setup

```bash
php artisan migrate
php artisan db:seed
```

### 6. Storage Setup

```bash
php artisan storage:link
```

### 7. Create Admin User

```bash
php artisan make:admin
```

### 8. Run the Application

```bash
composer run dev
```

The application will be available at `http://localhost:8000`

## Project Structure

```
├── app/                  # PHP application code
│   ├── Console/          # Custom Artisan commands
│   ├── Http/             # Controllers, Middleware, Requests
│   ├── Models/           # Eloquent models
│   └── Services/         # Application services
├── config/               # Configuration files
├── database/             # Database migrations and seeders
├── public/               # Public assets
├── resources/            # Views, language files, and uncompiled assets
│   ├── js/               # JavaScript files
│   ├── sass/             # SCSS files
│   └── views/            # Blade templates
├── routes/               # Route definitions
├── storage/              # Application storage
└── tests/                # Automated tests
```

## Database Schema

The database includes the following main tables:

- `users` - Admin users who can manage the website
- `events` - Church events with dates, times, and details
- `ministries` - Church ministries and departments
- `posts` - Blog posts and announcements
- `media` - Images and other media files
- `donations` - Donation records
- `prayer_requests` - Prayer requests submitted by visitors

## Development Workflow

### Branching Strategy

- `main` - Production code
- `develop` - Development branch
- `feature/*` - New features
- `bugfix/*` - Bug fixes


## Frontend Development

The frontend uses Tailwind CSS with Laravel Blade templates.

### Building Assets

During development:
```bash
npm run dev
```

For production:
```bash
npm run build
```


## Deployment

### Production Environment Setup

1. Set up a production server with required dependencies
2. Configure web server (Apache/Nginx)  
3. Set up SSL certificate
4. Configure database
5. Deploy code

### Deployment Process

```bash
# On production server
git pull origin main
composer install --no-dev --optimize-autoloader
npm install
npm run build
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

##