# Soluna Solar Supply & Installation

A four-page Laravel 13 project for IT0049 Technical Formative Assessment 5. It reimagines the earlier POS foundation as a Philippine solar supply and installation workspace. The customer and user directories are deliberately read-only and use static PHP arrays, as the activity requires.

## Requirements

- PHP 8.3 or newer with the extensions required by Laravel 13
- Composer

## Run locally

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve --host=127.0.0.1 --port=8080
```

Open `http://127.0.0.1:8080`. The four pages do not need a database connection. Laravel's default migration and seeder files are retained in `database/` for future database work; these pages read the arrays in their controllers.

## Pages and source

| Route | Controller | Blade view |
| --- | --- | --- |
| `/` | `PageController@home` | `resources/views/pages/home.blade.php` |
| `/about` | `PageController@about` | `resources/views/pages/about.blade.php` |
| `/customers` | `CustomerController@index` | `resources/views/pages/customers.blade.php` |
| `/users` | `UserController@index` | `resources/views/pages/users.blade.php` |

Each account controller defines five sample records. The customer and user views render them with Blade `@foreach`. Search and banner filters only hide or show existing rows in the browser; they do not write data. The About page and home rooftop image include short educational interactions.

## Verify

```bash
php artisan route:list --except-vendor
php artisan test --compact
```

Screenshots captured from the application on port 8080 are in [`docs/evidence`](docs/evidence). They are evidence of the running UI, not design mockups. The rooftop photo used inside the site is an AI-generated illustrative asset and is labeled as such in the interface.

The completed activity report is [`docs/ACOB_IT0049_TFA5_Soluna_Laravel_Report.docx`](docs/ACOB_IT0049_TFA5_Soluna_Laravel_Report.docx). [`docs/SCREENSHOT_CHECKLIST.md`](docs/SCREENSHOT_CHECKLIST.md) maps each figure to its original capture.

## Privacy and publishing

Do not commit `.env`, credentials, `vendor/`, `node_modules/`, runtime caches, or database files. The included `.gitignore` excludes these. The user directory displays sample names and usernames carried from the earlier school project; it does not store passwords or provide sign-in.
