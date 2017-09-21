#juurkaustas, loome uue projekti kausta
composer create-project --prefer-dist laravel/laravel todo
#muuda .env faili (pane andmebaasi kasutaja ja andmebaasi nimi paika)

#Loome tabeli loomiseks "migratsiooni" faili
php artisan make:migration create_tasks_table --create=tasks
#lisasime "tasks" tabeli up funktsiooni $table->string('name');

#mariaDB-d kasutades tulbe muuta app->providers->appServiceProviders.php faili
php artisan migrate

#loob Task.php mudeli app kausta
php artisan make:model Task
