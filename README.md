# User-Management
User Management in Laravel


1. Clone the App

2. Create a database

3. Update .env File with APP_URL and DB configuration

4. php artisan migrate

5. php artisan db:seed --class=UsersTableSeeder



There are 2 level Users 1. Admin and 2. Normal users

Admin user will be created on running the db seed
Admin user username: superadmin and password: 123456

Normal users can register themself using the register button

Super admin can add user, List users and export user list to excel
