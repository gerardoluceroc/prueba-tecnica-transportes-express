FROM php:8.1-apache

COPY index.php /var/www/html/

# Habilita el módulo de reescritura de Apache para permitir URLs limpias
RUN a2enmod rewrite


EXPOSE 8000

# Iniciar Apache y servir la aplicación PHP
CMD ["apache2-foreground"]













# FROM php:8.1-cli

# WORKDIR /app

# COPY index.php .

# EXPOSE 8000

# CMD ["php", "index.php"]
