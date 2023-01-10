FROM ubuntu:14.04.3
WORKDIR /var/www/volodin73.ru
COPY  volodin73/ .
COPY  
RUN apt-get update -y
RUN apt-get apache2\

