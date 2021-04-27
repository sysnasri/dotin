FROM mariadb
RUN apt-get update && apt-get upgrade -y
COPY ./import-db.sh /docker-entrypoint-initdb.d/
COPY ./wp_test.sql /tmp/wp_test.sql
EXPOSE 3306
