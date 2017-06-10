## Laravel First Project TODO List

This project is a simple TODO List in php laravel framework. This includes MySQL and Laravel Framework. Laravel folder obtains from [this project](https://github.com/laravel/laravel)

 ### Requirements
 - [Docker](https://docs.docker.com/)

 ### Install
- `$ sudo docker-compose up -d` Installs MySQL, php and Laravel Framework to docker.
- `$ sudo docker exec -it todo_list_app bash` Connects the docker.
#### In Docker
- `$ composer install` Installs required package.
- `$ php artisan key:generate` Gives a key. (ie. "base64:Nd/kXnzZfPRhQV+ELuKdOuFc4DzFH99WQfNK2gKRm10=") Open /laravel/.env and assign "APP_KEY=" field to this key.
- `$ php artisan migrate:refresh` Creates the tasks table.

Now, you can access the website with [localhost:8080](http://localhost:8080).
