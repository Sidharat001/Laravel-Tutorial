# Migrate All Tables
php artisan migrate

# Rollback Tables with Step 2. Flag is optional
php artisan migrate:rollback --step=2

# Rollback all table then migrate all table
php artisan migrate:refresh

# Drop all table then migrate all table
php artisan migrate:fresh

# Drop all migration or drop all table
php artisan migrate:reset 

# Create model and migration from one line commnad
php artisan make:model <Model_Name> -m

# Create Update Migration For Updtae exsting table
php artisan make:migration update_students_table --table=students


# Migration Refrences 
https://laravel.com/docs/11.x/migrations