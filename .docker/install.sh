docker-compose build
docker-compose up -d
echo create database ireceipt | docker exec -i sf5_ukr_mysql /usr/bin/mysql -u root --password=root
docker exec -it -u root sf5_ukr_php bash -c "cd sf5_ukr/ && composer install && bin/console do:sc:u --force"
