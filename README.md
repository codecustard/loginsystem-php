# loginsystem-php
Loginsystem using PHP and mysqli

Requirements:<br/>
-PHP Server<br/>
-Mysqli Database<br/>

The easiest way to setup your local environment is to download and install: <a href="https://www.apachefriends.org/index.html">XAMPP</a><br/>
Once you have XAMPP installed, clone this repository into XAMPP's htdocs.<br/>
Go into phpMyadmin (comes with XAMPP) and create a new database. Then create a new table with the following query: ```CREATE TABLE users(idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL, uidUsers TINYTEXT NOT NULL, emailUsers TINYTEXT NOT NULL, passwordUsers LONGTEXT NOT NULL)```
