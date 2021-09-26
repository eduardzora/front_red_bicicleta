# imagen de dockerhub que descargara
FROM php:7.4-fpm

# algunas configuraciones para que funcione el contenedor

# instala composer en el contenedor
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN apt update && apt install git -y

# da permisos para editar los archivos en esta ruta del container
RUN chown -R www-data:www-data /var/www
RUN chmod 775 /var/www

