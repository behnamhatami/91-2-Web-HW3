sudo chown -R behnam *
sudo setfacl -R -m u:www-data:rwX -m u:`whoami`:rwX app/cache app/logs
sudo setfacl -dR -m u:www-data:rwX -m u:`whoami`:rwX app/cache app/logs
sudo setfacl -R -m u:www-data:rwX -m u:`whoami`:rwX app/cache app/config/parameters.yml
sudo setfacl -dR -m u:www-data:rwX -m u:`whoami`:rwX app/cache app/config/parameters.yml
sudo chown -R www-data web