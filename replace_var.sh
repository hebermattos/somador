
sed -i 's/%APP_ENV%/$APP_EN}/g' '.env'
sed -i 's/%DB_HOST%/$DB_HOST/g' '.env'
sed -i 's/%DB_DATABASE%/$DB_DATABASE/g' '.env'
sed -i 's/%DB_USERNAME%/$DB_USERNAME/g' '.env'
sed -i 's/%DB_PASSWORD%/$DB_PASSWORD/g' '.env'