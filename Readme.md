# How to run

After cloning the repo, run the following commands

`composer install` To install dependencies   
`php artisan migrate --seed` To run migrations and seeders   
`php artisan serve` To start the server  

Since emails requires queues, you have run the queue command on a different terminal use this command   

`php artisan queue:work --tries=3 `
