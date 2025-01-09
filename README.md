
<p align="center"><img width="300" src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" alt="Livewire Logo">

# Modeling Agency API

Modeling agency Management API with a modular architecture

## Installation

### 1. Clone the Repository
```bash
git clone https://github.com/mohamad-zatar/modeling-agency.git
```
### 2. Install Dependencies
```bash
composer install
```
### 3. Configure the Environment
```bash
cp .env.example .env
```
Update the .env file with:DB_DATABASE | DB_USERNAME | DB_PASSWORD

### 4. Generate the Application Key
```bash
php artisan key:generate
```
### 5. Run Migrations
```bash
php artisan migrate
```
### 6. Start the Development Server
```bash
php artisan serve
```
## Code Style

This project uses [Laravel Pint](https://laravel.com/docs/pint) - an opinionated PHP code style fixer for Laravel. Laravel Pint helps maintain consistent code style across the project by automatically fixing code to follow the PHP-FIG standards and Laravel conventions.

To run Pint:
```
./vendor/bin/pint
```

## Potential Enhancements

### - Pagination
### - File Upload and Management
### - Search and Filtering
### - Caching
### - Unit and Feature Testing
### - User-Friendly Error Handling

### - Booking
* **Conflict Detection**: Prevent double-booking models for the same time slot.
* **Booking Status:** Add statuses for bookings like Pending, Confirmed, and Cancelled.
### - Notifications
   Notify customers or agents via email/SMS when bookings are created or updated.
