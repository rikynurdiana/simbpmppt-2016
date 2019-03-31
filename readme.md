### ============================================================================================

## HOW TO USE

After Pull This Repo

1 . Create database. for the name use 'simbpmppt'

2 . Run database sql file on folder 'sql/simbpmppt/'

3 . Setting SIMBPMPPT configuration in 'application/config/database.php'

        $db['default'] = array(
            'dsn'   => '',
            'hostname' => 'localhost',
            'username' => 'your-mysql-username',
            'password' => 'your-mysql-password',
            'database' => 'simbpmppt',
            'dbdriver' => 'mysqli',
            'dbprefix' => '',
            'pconnect' => FALSE,
            'db_debug' => (ENVIRONMENT !== 'production'),
            'cache_on' => FALSE,
            'cachedir' => '',
            'char_set' => 'utf8',
            'dbcollat' => 'utf8_general_ci',
            'swap_pre' => '',
            'encrypt' => FALSE,
            'compress' => FALSE,
            'stricton' => FALSE,
            'failover' => array(),
            'save_queries' => TRUE
        );

4 . Seting your virtual hosts like this

    for ubuntu
        <VirtualHost *:80>
            ServerAdmin webmaster@simbpmppt.dev
            ServerName simbpmppt.dev
            ServerAlias simbpmppt.dev
            DocumentRoot "/path/to/project/simbpmppt"
            SetEnv APPLICATION_ENV "development"
               ErrorLog ${APACHE_LOG_DIR}/error.log
               CustomLog ${APACHE_LOG_DIR}/access.log combined
            <Directory "/path/to/project/simbpmppt">
                DirectoryIndex index.php
                Options Indexes FollowSymLinks
                AllowOverride all
                Require all granted
            </Directory>
        </VirtualHost>

5 . Dont forget to make sure chmod and chown the folders

6 . Done.. you can use this SIMBPMPPT Applications.


### ============================================================================================


## ACCESS THE ADMIN PAGE

1 . After setting all requirement, you can try to access http://simbpmppt.dev/auth/dashboard

        user / email : admin@admin.com
        password     : password

2 . By the default you will go to dashboard page http://simbpmppt.dev/


### ============================================================================================

