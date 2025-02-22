PREREQUISITES
=============

The NETCONF PHP APIs depends on expect package of php http://pecl.php.net/package/expect

INSTALLING PREREQUISITES IN UBUNTU
===================================
	* Install PHP and PHP Development Framwork
	  sudo apt-get install php5.6 php5.6-dev (current stable version of php).
     
        Update 2023-6-1: [source](https://linuxize.com/post/how-to-install-php-8-on-ubuntu-20-04/)
         sudo apt install -y software-properties-common
         sudo add-apt-repository ppa:ondrej/php
         sudo apt install -y php7.4 php7.4-dev php7.4-xml # PHP expect module does not support PHP 8.0 yet, and PEAR only supports 4/5
	 
	* Install php-pear (PHP Extension and Application Repository)
	  apt-get install php-pear
	  to verify whether pear is installed properly or not, type command pear, there you will get
     list of command like discover-channel, upgrade,upgrade-all,if pear is successfully installed.
	* Install Tool command language (TCL) and TK,for installing expect package 
	  apt-get install tcl tcl-dev tk tk-dev
	* Install Expect package, required for php-expect
	  apt-get install expect tcl-expect-dev
	* Install php-expect using pecl
       pecl install expect
	  Sometime it may give error regarding channel, then use the path mentioned in suggestion like
	  pecl install channel://pecl.php.net/expect-0.3.1
      After successful installation of expect package, add the following line under extension in
      php.ini file (this will also be shown after successful installation of expect function)   	
	  extension = expect.so

Note: These installation steps are tested in Ubuntu12.04LTS and other higher version.

INSTALLING PREREQUITES IN FEDORA/CENTOS
=======================================

	* Install PHP and its Development Framework
	  yum install php php-devel php-common
	* Install php-pear (PHP Extension and Application Repository)
	  yum install php-pear
	  To verify whether pear is installed properly or not, type command pear, there you will get
      list of command like discover-channel, upgrade,upgrade-all,if pear is successfully installed.
	* Install Tool command language (TCL) and TK, required for expect package
	  yum install tcl tcl-devel tk tk-devel 
	* Install Expect package required for php-expect
	  yum install expect expect-devel
	* Install php-expect using pecl
	  pecl install expect
	  sometimes it may give error regarding channel,then use the path mentioned in suggestion like
	  pecl install channel://pecl.php.net/expect-0.3.1
	  After successful installation of expect package, add the following line under extension in
      php.ini file (this will also be shown after successful installation of expect function) 
	  extension = expect.so

Note: These installation steps are successfully tested in Fedora 15 i686 and Centos-6.5-i386.

INSTALLING PHP-NETCONF-APIs
===========================

Before installing NETCONF PHP APIs make sure your system has all above mentioned requirements.
	
	Download netconf-php folder fom github at any path in your Desktop
      * wget  -O /any/path/in/Desktop/netconf-php-master.zip https://github.com/Juniper/netconf-php/archive/master.zip
      * unzip netconf-php-master.zip
      * copy netconf folder in default path of php (usually default path is /usr/share/php)
	
      include this path in your program for Device.php,For example while writing your code, include path
      include('netconf/Device.php')
                                     

