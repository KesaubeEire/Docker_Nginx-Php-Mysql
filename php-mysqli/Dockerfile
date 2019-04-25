FROM php:7.2-fpm

RUN mv /etc/apt/sources.list /etc/apt/sources.list.bak && \
	echo "deb http://mirrors.163.com/debian/ jessie main non-free contrib" >/etc/apt/sources.list && \
	echo "deb http://mirrors.163.com/debian/ jessie-proposed-updates main non-free contrib" >>/etc/apt/sources.list && \
	echo "deb-src http://mirrors.163.com/debian/ jessie main non-free contrib" >>/etc/apt/sources.list && \
	echo "deb-src http://mirrors.163.com/debian/ jessie-proposed-updates main non-free contrib" >>/etc/apt/sources.list

# Changed:原代码
# RUN apt-get update \
# 	&& apt-get install iputils-ping \
# 	&& docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Changed:可能需要的代码
# RUN apt update \
# 	&& apt install iputils-ping \
# 	&& docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Changed:自定义代码
RUN mysql -uroot -p123456  -e "source sql/signup.sql" \
	&& mysql -uroot -p123456  -e "show databases;"