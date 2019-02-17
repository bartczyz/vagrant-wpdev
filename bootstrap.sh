# set up dependencies
apt-get install -y software-properties-common
add-apt-repository ppa:ondrej/php
apt-get update

# set up Apache 2.4
apt-get install -y apache2

# set up MySQL
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password root'
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password root'
apt-get install -y mysql-server

mysql -u root -proot -e 'CREATE DATABASE wordpress;';

# set up PHP 7.2
apt-get install -y php7.2 libapache2-mod-php7.2 php7.2-mysql

cp /vagrant/config/wp-config.php /var/www/html
cp /vagrant/config/dir.conf /etc/apache2/mods-enabled/dir.conf
cp /vagrant/config/apache2.conf /etc/apache2

# download latest WordPress
curl -O https://wordpress.org/latest.tar.gz 
tar xzf latest.tar.gz
rm -r wordpress/wp-content
cp -r wordpress/. /var/www/html
rm -r wordpress/

chown -R www-data:www-data /var/www/html
a2enmod rewrite

# restart apache after PHP 7.2 is ready
service apache2 restart
