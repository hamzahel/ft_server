#!/bin/sh
chown -R mysql /var/lib/mysql
chmod 777 /usr/share/phpMyAdmin/tmp
chown -R www-data:www-data /usr/share/phpMyAdmin
chown -R www-data:www-data /var/www/html/wordpress
openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt -subj "/CN=MA"
mv /root/self-signed.conf /etc/nginx/snippets/self-signed.conf
mv /root/ssl-params.conf /etc/nginx/snippets/ssl-params.conf
service mysql start
service php7.3-fpm start
service nginx start
mysql < /usr/share/phpMyAdmin/sql/create_tables.sql -u root
mysql < /root/priviliege.sql -u root
mysql < /root/create_wordpress.sql -u root
