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

php artisan make:controller ControllerFolderName/ControllerName

(if you don't writte a ControllerFolderName then the controller will be created in the Controllers main folder)

** Admin Controller **
php artisan make:controller AdminController
** Index Controller **
php artisan make:controller Frontend/IndexController

// MIDDLEWARE //
** Role middleware **
php artisan make:middleware Role