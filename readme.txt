// SEED //
Create a seeder :

php artisan make:seeder SeederName

set up NameSeeder.php & NameFactory.php then in the DatabaseSeeder.php uncomment : 

 \App\Models\User::factory(3)->create(); and add $this->call(UsersTableSeeder::class);

Now you can use : php artisan migrate:fresh --seed

** Users table seeder **

php artisan make:seeder UsersTableSeeder

php artisan migrate:fresh --seed


** **

// CONTROLLER //
** Admin Controller **
php artisan make:controller AdminController

// MIDDLEWARE //
** Role middleware **
php artisan make:middleware Role