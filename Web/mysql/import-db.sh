mysql -u root -p${MYSQL_ROOT_PASSWORD}  -e "GRANT ALL PRIVILEGES ON wp_test.* TO 'wpuser'@'%' IDENTIFIED BY 'wppassword';FLUSH
PRIVILEGES;" && \
mysql -u root -p${MYSQL_ROOT_PASSWORD}  --database=wp_test < /tmp/wp_test.sql