FROM ubuntu:14.04

WORKDIR /var/www/volodin73.ru
 
RUN apt-get update && apt-get install -y \
   apache2 \
   apache2-utils \
   software-properties-common \
   python-software-properties \
   curl \
   mc \
   htop \
   git \
   zip \
   gzip \
   tar \
   language-pack-en \
   mysql-client \
   gcc \
   make \
   libxml2-dev \
   libmysqlclient-dev \
  && rm -rf /var/lib/apt/list/*

RUN apt-get update && apt-get install -y \
    php5 \  
    php5-cli \
    libapache2-mod-php5 \
    php5-curl \
    php5-gd \
    php5-mcrypt \
    php5-mysql \
    php5-xmlrpc \
    php5-cgi \
  && rm -rf /var/lib/apt/list/*

    
RUN  a2enmod php5 rewrite headers && service  apache2 restart
 
COPY ./config/injdor.conf  /etc/apache2/sites-available/
COPY ./config/volodin73.conf /etc/apache2/sites-available/
RUN ln -s /etc/apache2/sites-available/injdor.conf /etc/apache2/sites-enabled/  \
    && ln -s /etc/apache2/sites-available/volodin73.conf /etc/apache2/sites-enabled/


RUN sudo mkdir -p /var/www/injdor.ru \
   && mkdir -p /var/www/volodin73.ru \
   && chmod -R 0775 /var/www/injdor.ru && chmod -R 0775 /var/www/volodin73.ru

COPY  ./volodin73.ru  .
COPY ./injdor.ru /var/www/injdor.ru

#Install composer
#RUN curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer && composer install

EXPOSE 80
EXPOSE 22

 
CMD ["apache2ctl", "-D", "FOREGROUND"]
