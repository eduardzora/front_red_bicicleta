# imagen de dockerhub que descargara
FROM php:7.4-fpm

# algunas configuraciones para que funcione el contenedor
RUN curl -sS https://getcomposer.org/installer | php -- \
     --install-dir=/usr/local/bin --filename=composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html/

# instala composer en el contenedor
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN apt update && apt upgrade -y && apt install git -y

COPY ./src/* /var/www/html
RUN chmod -R 775 /var/www/html

#RUN composer install
RUN php artisan key:generate

# da permisos para editar los archivos en esta ruta del container
#RUN chown -R www-data:www-data /var/www
RUN chmod 775 /var/www/html

EXPOSE 9000
CMD ["php-fpm"]
