# Utiliser une image de base Python
FROM python:3.8-slim

# D�finir le r�pertoire de travail dans le conteneur
WORKDIR /app

# Copier le script dans le conteneur
COPY calculate_product.py .

# Commande pour lancer le script
CMD ["python", "calculate_product.py"]
