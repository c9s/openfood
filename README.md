Setup
===============

Make sure there is a `cache` directory:

    mkdir -p cache

Modify config/database.yml for your environment.

    cp -v config/database.prod.yml config/database.yml

Now compile it to config/database.php file:

    php bin/lazy build-conf config/database.yml

Build the static scheam files:

    php bin/lazy schema build -f

Create database:

    php bin/lazy create-db

Initialize asset files:

    php bin/phifty asset --link

Run the command below to ensure everything works fine:

    php main.php

