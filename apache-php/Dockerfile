# Usa una imagen base con Apache y PHP
FROM php:7.4-apache

#Directorio principal donde apache busca los archivos que debe mostrar
WORKDIR /var/www/html/

# Instala el módulo de Apache para que soporte PHP
RUN docker-php-ext-install mysqli && a2enmod rewrite

# Copia el archivo index.php al contenedor
#COPY index.php ./
COPY info.php random.php ./

# Expone el puerto 80
EXPOSE 80