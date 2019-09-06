## Installation for Development

### Clone Project
```
git clone https://github.com/seup/setraining
```
### Installation
```
cd setraining
composer install
```

### Configuration



1. copy .env file from .env.example

Windows
```
copy .env.example .env
```

OSX/Linux/Unix
```
cp .env.example .env
```

3. open .env file and fill additional configuration
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```
Then set the google id and secret
```
GOOGLE_CLIENT_ID=1027299201170-1r2idq0l56adbuvk0c4sbfm9bsn3khoj.apps.googleusercontent.com
GOOGLE_CLIENT_SECRET=py170Wpiczx8t8qPFov8a9Bp
GOOGLE_REDIRECT=http://localhost:8000/callback
```


2 Generate Key
```
php artisan key:generate
```

### Database

Migrate Database
```
php artisan migrate
```

Seeder
```
php artisan db:seed
```

Passport Install
```
php artisan passport:install
```


### Start Server
```
php artisan serve
```
