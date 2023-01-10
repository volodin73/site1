FROM ubuntu:14.04.3
WORKDIR ./app
COPY  ./html /var/html/volodin73.ru
COPY  
RUN apt-get update -y
RUN apt-get apache2\
 
