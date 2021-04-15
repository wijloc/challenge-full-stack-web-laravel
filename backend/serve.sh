./wait-for mysql:3306
./artisan migrate
./artisan serve --host 0.0.0.0
