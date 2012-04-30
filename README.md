YiiBlog
=======

Yii framework blog application for testing purposes

Please note:
The following instructions are not intended as a secure installation - in fact they probably aren't.
It's just intended as a way to get the application installed and running.

Basic Setup Instructions
========================

* Clone this repository to in the htdocs directory of the apahe server
* Download Yii framework (Version 1.1.10 works) http://yii.googlecode.com/files/yii-1.1.10.r3566.tar.gz
* Extract the framework under the htdocs directory of the apache server
* Rename the extracted directory as "yii" (or make a symbolic link).
* Create a yiiblog database in the local mysql database.
* Create a database with the mysql dump file from the data directory.
* Start up the apache server
* Test link http://localhost/YiiBlog/index.php/post
* Assuming that works you can proceed to populate the database with posts.
* cd to the `protected` directory and run `./yiic populate`
* Check that 50 posts were added.