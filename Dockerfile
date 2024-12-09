# Use the official PHP image with Apache
FROM php:8.1-apache

# Copy all project files to the web directory
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Expose port 80
EXPOSE 80
