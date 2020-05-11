FROM debian:buster

RUN apt-get update
RUN apt-get -y install nginx wget unzip default-mysql-server
RUN apt install php-fpm php-mysql php-mbstring php-dev php-gd php-pear php-zip php-xml php-curl -y

COPY ./srcs/script.sh ./
COPY ./srcs/index.html ./tmp/index.html
COPY ./srcs/index.php ./tmp/index.php
COPY ./srcs/config_nginx ./tmp/config_nginx
COPY ./srcs/config.inc.php ./tmp/config.inc.php
COPY ./srcs/wp-config.php ./tmp/
COPY ./srcs/wordpress.zip ./tmp/

ENTRYPOINT ["sh","script.sh"]