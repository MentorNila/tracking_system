I have developed this application using laravel on backend and vue on front. To start using application, go to main application path and execute:
1. php artisan migrate // to import database structure.
2. php artisan db:seed // to enter some dummy data to our tables.
3. php artisan serve // to start the application.

Routes register/login are used to register a new user account and login on it after.
After login user will be redirected to dashboard path where he can see a form where he can enter a shipping tracking number, after he writes the code and pressed check, a message will show up showing his estimated delivery time if that tracking code exists. Otherwise it will tell him that the tracking code doesnt exist.
