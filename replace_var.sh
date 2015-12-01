appenv = $APP_ENV
dbhost = $DB_HOST
dbdatabase = $DB_DATABASE
dbusername = $DB_USERNAME
dbpassword = $DB_PASSWORD

sed -i 's/%APP_ENV%/$appenv/g' '.env'
sed -i 's/%DB_HOST%/$dbhost/g' '.env'
sed -i 's/%DB_DATABASE%/$dbdatabase/g' '.env'
sed -i 's/%DB_USERNAME%/$dbusername/g' '.env'
sed -i 's/%DB_PASSWORD%/$dbpassword/g' '.env'