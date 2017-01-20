#!/bin/bash
#author:knight
#os：centos/Redhat

linux_type=`cat /etc/issue | head -1 | awk '{print tolower($1)}'`

yum install -y libxml2 libxslt-devel libxml2-devel openssl-devel openssl bzip2-devel libcurl libcurl-devel libjpeg libpng freetype libjpeg-devel libpng-devel freetype-devel libtool gcc+ gcc-c++ ImageMagick-devel ImageMagick

#建立用户和用户组
groupadd www
useradd -g www www -s /sbin/nologin

#安装php
install_php_path=/opt/php
mkdir /opt/soft
cd /opt/soft

#下载libmcrypt-2.5.7.tar.gz
#git clone ...../libmcrypt-2.5.7.tar.gz
tar -xzf libmcrypt-2.5.7.tar.gz
cd libmcrypt-2.5.7
./configure
make && make install

#下载php-5.3.10.tar.bz2
##git clone ..../phpsoft/php-5.3.10.tar.bz2
tar -xjf php-5.3.10.tar.bz2
cd php-5.3.10/
./configure --prefix=/opt/php --enable-zip --with-bz2 --with-curl --with-gd --with-jpeg-dir --enable-shared --enable-mbstring --with-mcrypt --with-mysql=mysqlnd --with-pdo-mysql=mysqlnd --with-mysqli=mysqlnd --enable-fpm --enable-phar --enable-bcmath --with-openssl --with-zlib --enable-zip --enable-ftp --with-gettext --enable-sockets --with-freetype-dir --with-fpm-user=www --with-fpm-group=www

if [ $? != 0 ]
then
  echo "configure php error, need install php manually"
  exit 32
fi
make && make install
if [ $? != 0 ]
then
  echo "install php error, need install php manually"
  exit 33
fi

cp sapi/fpm/init.d.php-fpm /etc/init.d/php5-fpm
chmod +x /etc/init.d/php5-fpm
sed -i 's/^php_fpm_PID=.*$/php_fpm_PID=\/var\/run\/php-fpm.pid/g' /etc/init.d/php5-fpm
sed -i 's/^php_fpm_CONF=.*$/php_fpm_CONF=\/usr\/local\/etc\/php-fpm.conf/g' /etc/init.d/php5-fpm
sed -i 's/^php_fpm_BIN=.*$/php_fpm_BIN=\/usr\/local\/sbin\/php-fpm/g' /etc/init.d/php5-fpm

#设置开机启动
	chkconfig --add php5-fpm
	chkconfig --level 234 php5-fpm on

cd /usr/local/lib/
if [ -f php.ini ]
then
  mv php.ini php.ini.bak
fi
#下载php.ini 的配置文件
#git clone ..../phpsoft/php.ini

#下载php-fpm配置文件
#git clone ..../phpsoft/php-fpm.conf


service php5-fpm start

