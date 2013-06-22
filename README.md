Zedek2.0
========

Zedek Web Development Framework version 2.0

This is a PHP web development framework built as a very light framework while taking from some of the nicer modern ideas. 

The features include:

1. Model View Controler
2. Object Oriented
3. Encourages agile development
4. Has an Object Relational Model (ORM) built in called ZORM
5. Has a templating engine accessed from a class called ZView
6. Templating engines allows some logic in the html view fle such as looing through an array 
7. URL rewriting allowing for clean urls

Its designed by Ikakke Ikpe. I hope its useful to someone out there

Requirements
=============

1. PHP5.3+
2. Knowledge of PHP
3. Knowledge of Object Oriented Programming (OOP)


Creating your first applcation follow these steps:
===================================================

1. Download this repo so you have a folder names zedek or what ever else yoiu want to name it in a non web accessible folder. This is one of the security features of Zedek2.0.
2. in your web acessible folder u will require 3 files and a folder being a htaccess file, a router file named as you desire such as router.php, a favicon.ico file and a folder for your public files.
3. The contents of the htaccess file should redirect all traffic to the router file while excluding the public folder contents:

## .htaccess contents ##

    RewriteEngine On
    RewriteCond %{REQUEST_URI} !/public/.*$ 
    RewriteCond %{REQUEST_URI} !/favicon\.ico$
    RewriteRule ^(.*)$ router.php

Ensure you have mod_rewrite enabled and properly configured


## router.php contents ##

    <?php
      require once "/path/to/zedek/anchor.php";
    ?>
    
and you are about done with the web parts.

## anchor.php ##
Within the anchor file online 6 set the root constant to the path leading to the zedek app ending with a trailing slash

    const zroot="/path/to/zedek/";


Once done you should see your app on your website with a successful install message.


Hello World!
============

Zedek 2.0 is built to map urls to controllers and methods in a style:
http://mysite.com/controler/method/arguments
(this is handled by a class named URLMaper)

the MVC is made literal within the engine folder. 

1. To create a new app called foo create a folder with the name foo within the engines folder.
2. within this create a file controler.php
3. within the controler file enter the following code

## ##

    <?php
      class CControler extends ZControler{
        function bar(){
          echo "Hello World";
        }
      }
    ?>

4. Browse to http://mysite.com/foo/bar

and you should see your hello world message!


