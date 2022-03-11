# Chakitan Vyas Portfolio Project
FROM php:7.2-cli

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN echo @php "%~dp0composer.phar" %*>composer.bat
RUN composer -V

WORKDIR /src
COPY . /src

RUN composer install

EXPOSE 8090
CMD php artisan serve --host=127.0.0.1 --port=8090