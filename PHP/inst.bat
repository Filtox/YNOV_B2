@echo on
cd C:\Users\pierre\Documents\GitHub\YNOV_B2\PHP\FramworkPHP12
call composer install
call npm install
copy .env.example .env
call php artisan key:generate
call php artisan migrate
call php artisan db:seed
pause