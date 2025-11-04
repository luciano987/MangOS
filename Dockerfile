# Imagen base con PHP y Apache
FROM php:8.2-apache

# Instalar extensiones necesarias para MariaDB y otras dependencias
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Configurar el DocumentRoot
ENV APACHE_DOCUMENT_ROOT=/var/www/html/mini-framework/public

# Actualizar configuración de Apache
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf && \
    sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Copiar todo el proyecto
COPY ./mini-framework /var/www/html/mini-framework

# Dar permisos correctos
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80
EXPOSE 80

# Iniciar Apache
CMD ["apache2-foreground"]

