> Fork form : https://github.com/kkmike999/docker-compose-php-nginx-mysql
> 因某些原因没有使用 GitHub 的 fork 表示歉意,希望理解

# 感谢 ys 同学督促我学习 php 及各种相关知识

ys 同学你懂得

# 坑

- php 语言版本坑
- Docker 部署坑

# 迁移指南

本项目适用于各种 mysql+php+nginx 的 Docker 配置  
具体使用:

- 将./html/目录下换为目标 php 根目录
- 将./php-mysqli/sql-repo 下的部分换为 sql 的目录 -> 映射关系见 docker-compose.yml 的 41 行
- 还原默认
  - 留心 Docker 的默认镜像 : ./docker-compose.yml 中的 Changed: 行
  - 留心 php 的默认库 : ./php-mysqli/Dockerfile 中的 Changed:
    - 源代码和源代码改留下,不用但是那个代码里指定的 php 包记得先注释掉,进入 docker exec 的 php 里面后 apt-get install 下载了 docker-php-ext-install mysqli && docker-php-ext-enable mysqli 执行了
    - 自定义部分删了就行

ps:原项目Readme.md:

# php-nginx-mysql-compose

docker-compose php + nginx + mysql

## 安装 docker

```
$ curl -sSL http://acs-public-mirror.oss-cn-hangzhou.aliyuncs.com/docker-engine/internet | sh -
$ service docker restart
```

参考[《docker 入门——安装(CentOS)、镜像、容器》](https://www.jianshu.com/p/edba6551d256)

## 安装 docker-compose

```
# 下载文件
sudo curl -L https://github.com/docker/compose/releases/download/1.19.0/docker-compose-`uname -s`-`uname -m` -o /usr/local/bin/docker-compose

# 设置权限
sudo chmod +x /usr/local/bin/docker-compose

# 检测是否安装成功
$ docker-compose --version
docker-compose version 1.19.0, build 1719ceb
```

参考[《docker-compose 搭建 nginx+php+mysql》](https://www.jianshu.com/p/0561d3cfccda)

## git clone 本工程

```
git clone https://github.com/kkmike999/docker-compose-php-nginx-mysql.git demo
```

`demo`为用户自定义目录，可以是任意名称

## 启动容器

```
cd demo
docker-compose up -d
```
