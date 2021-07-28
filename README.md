# Api-CRUD Lumen
## Clone the Project
```
gh repo clone Josehpequeno/Api-CRUD-Lumen
```

## Configure your .env File
```
# the .env file should resemble the following when complete
APP_NAME=Lumen
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost
APP_TIMEZONE=UTC

LOG_CHANNEL=stack
LOG_SLACK_WEBHOOK_URL=

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

CACHE_DRIVER=file
QUEUE_CONNECTION=sync
```
## Install Lumen and Run Migrations
```
# install the libraries listed in the composer.json file
composer install

php artisan make:migration create_users_table

php artisan migrate
```
## API
### Create
Create a user. Method POST. 
```
http://localhost:8000/api/users
```
### Users
Get all users. Method GET. 
```
http://localhost:8000/api/users
```
### Update
Update a user. Method POST. 
```
 http://localhost:8000/api/usersUpdate/{id}
```
### Delete
Delete a user. Method DELETE. 
```
 http://localhost:8000/api/users/{id}
```
