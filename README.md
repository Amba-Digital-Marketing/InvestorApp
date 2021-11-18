First time use
run migration
0->php artisan migrate

1->
php artisan db:seed --class=PermissionTableSeeder
2->
php artisan db:seed --class=CreateAdminUserSeeder
