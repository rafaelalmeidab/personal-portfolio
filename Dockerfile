# Use uma imagem do PHP com Apache
FROM php:7.4-apache

# Instala as extensões necessárias para o CodeIgniter
RUN docker-php-ext-install pdo pdo_mysql

# Copia o código do projeto para o diretório raiz do Apache
COPY . /var/www/html/

# Define as permissões corretas
RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite

# Expõe a porta 80
EXPOSE 80
