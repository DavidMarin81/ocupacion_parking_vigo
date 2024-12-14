# Usa una imagen base de PHP con Apache
FROM php:8.2-apache

# Copia tu aplicación al directorio raíz de Apache
COPY . /var/www/html/

# Establece los permisos adecuados para los archivos
RUN chown -R www-data:www-data /var/www/html

# Expón el puerto 80 para acceder a la aplicación
EXPOSE 80
