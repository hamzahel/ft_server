# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: hel-ayac <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/02/24 15:09:09 by hel-ayac          #+#    #+#              #
#    Updated: 2020/02/27 20:50:45 by hel-ayac         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster
RUN apt-get update
RUN apt-get install nginx -y
EXPOSE 80
EXPOSE 443
COPY srcs/ /root
RUN apt-get install wget -y
RUN apt install -y php php-json php-mbstring php-fpm php-mysql php-curl php-gd php-xml php-xmlrpc php-soap php-intl php-zip -y
RUN apt-get install mariadb-server -y
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz
RUN tar -zxvf phpMyAdmin-4.9.0.1-all-languages.tar.gz
RUN mv phpMyAdmin-4.9.0.1-all-languages /usr/share/phpMyAdmin
RUN mv /root/wordpress /var/www/html/.
RUN mkdir /usr/share/phpMyAdmin/tmp
RUN cp -pr /usr/share/phpMyAdmin/config.sample.inc.php /usr/share/phpMyAdmin/config.inc.php
RUN mv /root/phpMyAdmin.conf /etc/nginx/conf.d/phpMyAdmin.conf
RUN mv /root/config.inc.php /usr/share/phpMyAdmin/config.inc.php
RUN mv /root/default /etc/nginx/sites-available/default
RUN ln -s /usr/share/phpMyAdmin/ /var/www/html/
RUN chmod +x /root/start.sh
CMD /root/start.sh && tail -f /var/log/nginx/access.log
