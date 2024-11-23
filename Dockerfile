# Utiliser une image de base PHP avec Apache
FROM php:7.4-apache

# Copier le code de l'application dans le répertoire de travail du conteneur
COPY src/ /var/www/html/

# Modifier la configuration d'Apache pour écouter sur le port 81
RUN sed -i 's/Listen 80/Listen 81/' /etc/apache2/ports.conf
RUN sed -i 's/:80/:81/' /etc/apache2/sites-available/000-default.conf

# Exposer le port 81
EXPOSE 81