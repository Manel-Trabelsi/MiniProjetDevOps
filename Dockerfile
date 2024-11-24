# Utiliser une image de base PHP avec Apache
FROM php:7.4-apache

# Copier le code de l'application dans le r�pertoire de travail du conteneur
COPY src/ /var/www/html/

# D�finir le ServerName pour �viter l'avertissement
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Exposer le port 80
EXPOSE 80
