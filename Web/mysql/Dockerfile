FROM mariadb
RUN apt-get update && apt-get upgrade -y
ENV MYSQL_ROOT_PASSWORD: 123456
ENV MYSQL_DATABASE: wp_test
ENV MYSQL_USERNAME: wpuser
ENV MYSQL_PASSWORD: wppassword
COPY ./import-db.sh /docker-entrypoint-initdb.d/
COPY ./wp_test.sql /tmp/wp_test.sql
EXPOSE 3306
