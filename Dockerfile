FROM php:7.2-apache
# RUN addgroup --gid 1012 multiplemy
# RUN adduser --disabled-password --gecos "" --force-badname --gid 1012 dockermy
# USER dockermy

COPY vendor/ /var/www/vendor
COPY src/ /var/www/html
EXPOSE 80


# run command: docker run -v /home/ties/projects/personal/php/composer_test/logs:/var/log/nginx -p 80:80 my-php-app