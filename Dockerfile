FROM debian:stable-slim

RUN apt-get update && \
    apt-get install -y apache2 gnupg2 libc6 && \
    apt-key adv --fetch-keys 'https://packages.sury.org/php/apt.gpg' && \
    echo "deb https://packages.sury.org/php/ bullseye main" | tee /etc/apt/sources.list.d/php.list && \
    apt-get update && \
    apt-get install -y php8.2 libapache2-mod-php8.2 \
    apt-get install -y php8.2-pdo php8.2-gd php8.2-xml php8.2-mbstring php8.2-zip php8.2-curl php8.2-apcu

RUN a2enmod php8.2

RUN sed -i 's/DocumentRoot \/var\/www\/html/DocumentRoot \/var\/www\/html\/public/' /etc/apache2/sites-available/000-default.conf

EXPOSE 80

CMD ["bash", "-c", "/etc/init.d/apache2 start && tail -f /dev/null"]
