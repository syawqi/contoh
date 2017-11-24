--- make project ---
composer create-project laravel/laravel namaproject -vvv

--- install vendor dan dependency ---
composer install

--- membuat migration ---
php artisan make:migration create_table_namatable

--- membuat model ---
php artisan make:model Namamodel

--- membuat migration dan model ---
php artisan make:model Namamodel -m

--- migrate database ---
php artisan migrate

--- kembalikan database ---
php artisan migrate:rollback

--- membuat controller ---
php artisan make:controller NamacontrollerController
