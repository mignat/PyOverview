FROM mysql
MAINTAINER Marius Ignat <marius.ignat13@gmail.com>

# Environment variables
ENV MYSQL_ROOT_PASSWORD=mensmentis
ENV default-authentication-plugin=mysql_native_password

#Add payload to container
ADD pyoverview_db_1.sql /docker-entrypoint-initdb.d
