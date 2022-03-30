# docker-php-mysql-starter

This project works for M1 CPUs, feel free to replace the images from within the Dockerfile and docker-compose.yml for
your own system.

[PHP images](https://hub.docker.com/_/php?tab=tags)

[MYSQL images](https://hub.docker.com/_/mysql?tab=tags)

[PHPMYADMIN images](https://hub.docker.com/_/phpmyadmin?tab=tags)

## Requirements
In order to use this repo, you will need to have [Docker](https://www.docker.com/products/docker-desktop/) installed.

## Instalation

Open up a terminal or a command line at the base of the project and run
```bash
docker-compose up
```

## Notes

If all went well, you should be able to see:

Your website at: http://localhost:8000

Your mysql admin page at: http://localhost:8080

To login to your admin page, use the info provided in the docker-compose.yml file, default is:
```yml
MYSQL_USER: MYSQL_USER
MYSQL_PASSWORD: MYSQL_PASSWORD
```

In order to stop containers and remove containers, networks, volumes, and images create by `up`, run this:

```bash
docker-compose down
```

## Extra note
In order to get a successful query in your [page](http://localhost:8000), log into your [database](http://localhost:8080) and run this query:
```sql
drop table if exists `users`;
create table `users` (
    id int not null auto_increment,
    username text not null,
    password text not null,
    primary key (id)
);
insert into `users` (username, password) values
    ("admin","password"),
    ("Alice","this is my password"),
    ("Job","12345678");
```

## End note

All credits for this repo go to this [page](https://www.section.io/engineering-education/dockerized-php-apache-and-mysql-container-development-environment/)