# Symfony Docker

## Description

This repository showcases a complete stack for running a Symfony5 project into Docker. For more information about the project itself, have a look [here](https://github.com/NazarioR9/rest_api/tree/master/symfony).

## Installation

Here is a quick walkthrough on how to build and run the project into the Docker container.

```
1. Clone the repository 
2. RUN cd rest_api
3. RUN docker-compose build 
4. RUN docker-compose up -d
5. RUN docker-compose exec php composer install 
6. RUN docker-compose exec php php bin/console doctrine:schema:create
7. RUN docker-compose exec php php bin/console doctrine:fixtures:load

```

Now, you should be able to see the application running on [localhost](http:localhost/).



PS: You may need to add 'sudo' before each of the docker commands. Like "sudo docker-compose build".
