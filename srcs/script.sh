# Generate website folder
mkdir /var/www/localhost
touch /var/www/localhost/index.php
mv ./tmp/index.html /var/www/localhost/index.html
mv ./tmp/index.php /var/www/localhost/index.php

# Config Access
chown -R www-data /var/www/*
chmod -R 755 /var/www/*

# SSL
mkdir /etc/nginx/ssl
openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes -out /etc/nginx/ssl/localhost.pem -keyout /etc/nginx/ssl/localhost.key -subj "/C=FR/ST=Paris/L=Paris/O=42 School/OU=mlaraki/CN=localhost"
openssl rsa -noout -text -in /etc/nginx/ssl/localhost.key

# NGINX
mv ./tmp/config_nginx /etc/nginx/sites-available/localhost
ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/localhost
rm -rf /etc/nginx/sites-enabled/default

# Phpmyadmin
wget https://files.phpmyadmin.net/phpMyAdmin/4.9.4/phpMyAdmin-4.9.4-all-languages.zip
unzip phpMyAdmin-4.9.4-all-languages.zip -d /var/www/localhost/
mv /var/www/localhost/phpMyAdmin-4.9.4-all-languages /var/www/localhost/phpmyadmin
mv ./tmp/config.inc.php /var/www/localhost/phpmyadmin/config.inc.php

# SQL
service mysql start
echo "CREATE DATABASE wordpress;" | mysql -u root
echo "GRANT ALL ON wordpress.* TO 'root'@'localhost';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root
echo "update mysql.user set plugin = 'mysql_native_password' where user='root';" | mysql -u root

# Wordpress
unzip ./tmp/wordpress.zip -d /var/www/localhost/
cp ./tmp/wp-config.php /var/www/localhost/wordpress/

service php7.3-fpm start
service nginx start
service nginx configtests
service nginx status

# Displays the logs and then monitors them
tail -f /var/log/nginx/access.log /var/log/nginx/error.log 