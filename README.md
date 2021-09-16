# test-interv-elisoft
A personal project

#### Create mysql database with following name and collation
```sh
laravel-test latin1_swedish_ci
```
#### Migrate database along with seed.
```sh
php artisan migrate:fresh --seed
```
#### Modify .env Mailtrap
```sh
MAIL_USERNAME=<your mailtrap username>
MAIL_PASSWORD=<your mailtrap password>
```
#### Run project
```sh
php artisan serve
```
