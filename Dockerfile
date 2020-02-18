FROM php:7.2-apache
RUN addgroup --gid 1012 multiplemy
RUN usermod -a -G 1012 www-data

COPY vendor/ /var/www/vendor
COPY src/ /var/www/html
EXPOSE 80


# run command: docker run -v /home/ties/projects/personal/php/composer_test/logs:/var/www/logs -p 80:80 my-php-app