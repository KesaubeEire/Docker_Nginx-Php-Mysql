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
