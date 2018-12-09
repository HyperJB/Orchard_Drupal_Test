# Instructions

The directory **orchard_drupal_test** contains the sql file and drupal files.
The rest of the files are the chosen php tests.


## First Part of the Test (Drupal)

### Setup
 - XAMPP Version: 7.2.12.
 - PHP Version: 7.2.12.
 - Drupal version : 8.6.4
 - mySQL database.
 - GitBash as commandline
 - Visual Code as editor

### Details of the project:

Decided to do this test in Drupal 8 since I have been doing projects with this version recently.
The way how I set this project up was by creating the taxonomy to mimic the main navigation.
This way the user can change the image in admin and no need to ftp the image.

I used the block hook to find where the node belows and check if the node has a parent or not. Then it uses the weight of the menu item to
locate the weight of the taxonomy weight.  Then loads the image from the taxonomy term.

- Use "drush uli" command to login. Will also email with login details.


## Second Part of the test (choosing 3 from 5 tasks)

I picked the following:

 - 1 emordnilaP
 - 2 Insta-gram
 - 5 Snap, Crackle, Pop
