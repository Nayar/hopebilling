# hopebilling

## Install on Ubuntu 18.04

```
# apt install php-zip php-gd php-simplexml
# systemctl restart apache2

# apt install php-dev libmcrypt-dev php-pear
# pecl channel-update pecl.php.net
# pecl install mcrypt-1.0.1
```

Add `extension=mcrypt.so` to `/etc/php/7.2/apache2/php.ini`

Follow this guide to install ioncube: https://www.digitalocean.com/community/tutorials/how-to-install-ioncube-on-ubuntu-16-04

5
