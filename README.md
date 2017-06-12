## Laravel First Project TODO List

This project is a simple TODO List in php laravel framework. This includes MySQL and Laravel Framework. Laravel folder obtains from [this project](https://github.com/laravel/laravel)

 ### Requirements
 - [Docker](https://docs.docker.com/)

 ### Install w/ MySQL
- `$ sudo docker-compose up -d` Installs MySQL, php and Laravel Framework to docker.
- `$ docker-compose build`
- `$ sudo docker exec -it todo_list_app bash` Connects the docker.
#### In Docker
- `$ composer install` Installs required package.
- `$ chmod -R 777 storage` Gives privilege to access logs.
- `$ php artisan key:generate` Gives a key ("base64:Nd/kXnzZfPRhQV+ELuKdOuFc4DzFH99WQfNK2gKRm10="). Open /MySQL DB/laravel/.env and assign "APP_KEY=" field to this key.
- `$ php artisan migrate:refresh` Creates the tasks table.


 ### Install w/ Mongo
- `$ sudo docker-compose up -d` Installs MongoDB, php and Laravel Framework to docker.
- `$ docker-compose build`
- `$ sudo docker exec -it todo_list_app bash` Connects the docker.
#### In Docker
- `$ composer install` Installs required package.
- `$ chmod -R 777 storage` Gives privilege to access logs.
-  Uncomment the line that is last line of /MongoDB/laravel/config/app.php 'providers' variable.
```php
Jenssegers\Mongodb\MongodbServiceProvider::class,
```
- `$ php artisan key:generate` Gives a key ("base64:Nd/kXnzZfPRhQV+ELuKdOuFc4DzFH99WQfNK2gKRm10="). Open /MongoDB/laravel/.env and assign "APP_KEY=" field to this key.
- `$ php artisan migrate:refresh` Creates the tasks table.


Now, you can access the website with [localhost:80](http://localhost:80).
