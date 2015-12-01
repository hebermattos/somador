appenv = $APP_ENV
dbhost = $DB_HOST
dbdatabase = $DB_DATABASE
dbusername = $DB_USERNAME
dbpassword = $DB_PASSWORD

sed -i "s/%APP_ENV%/$appenv/" .env
sed -i "s/%DB_HOST%/$dbhost/" .env
sed -i "s/%DB_DATABASE%/$dbdatabase/" .env
sed -i "s/%DB_USERNAME%/$dbusername/" .env
sed -i "s/%DB_PASSWORD%/$dbpassword/" .env