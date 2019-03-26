To run this application, you need to make sure you have the following setup on your server

 php 7.0 or greater webserver
 mysql database
 Make sure your database is using the default port and available at localhost
 make sure your database username and password is 'root' or simply update the following variables in /config/config.php and config/init.sql

$host       = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "nctvadevdb";

Point your webserver to NCTVA/docroot to view the application

You can visit your application at localhost/install.php to create the database and tables automatically or simply use the database dump included to import into your database
