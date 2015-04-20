Proprosal
===============

The OpenFood Project
https://g0v.hackpad.com/OpenFood-project-jArtZeaeUeL


Setup
===============

Make sure there is a `cache` directory:

    mkdir -p cache

Run composer to install the packages:

    composer install --dev --prefer-source

Modify config/database.yml for your environment.

    cp -v config/database.prod.yml config/database.yml

Now compile it to config/database.php file:

    php bin/lazy build-conf config/database.yml

Build the static schema files:

    php bin/lazy schema build -f

Create database:

    php bin/lazy create-db

Build up database from schema:

    php bin/lazy sql --rebuild

Or you can do it with `--debug` flag if you are interested in the SQL queries:

    php bin/lazy --debug sql --rebuild

Initialize asset files:

    php bin/phifty asset --link

Run the command below to ensure everything works fine:

    php main.php

