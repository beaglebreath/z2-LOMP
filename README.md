# z2-LOMP
this is my attempt to get a LOMP stack (lighttpd, openwrt, mysql, php5) working on a zipit z2.
i actually wanted a LAMP stack, but i was having problems with apache.  i switched over to 
lighttpd, and my LAMP acronym no longer worked.  hence LOMP...

the following describes some of the problems i encountered installing software.  i think
everything is working now, except for the connection between php and mysql.  at the bottom of 
this description, i'll show what i'm befuddled with at this time.

i have completed these steps on a kali-linux pc (except i used apache instead of lighttpd).
everthing is working wonderfully from the pc.

the purpose of this project is to setup a software stack which will be integrated with 
additional programs i've written which interact with electronic sensors and circuits 
attached to the zipit's docking connector.  i hope to eventually be able to have a 
webserver providing a page where my circuit's output is accessible from a browser.
(i.e. a temperature sensor showing the current temperature)
i'd like php commands embedded in an html page to control the execution of my sensor program.
additionally, i'd like to be able to use a database for the storage of calibration data of
the sensor, and logging of data as time goes on.

****lighttpd****

at this time i have lighttpd web-server installed and running on the zipit.  
i have edited the file  "/ect/lighttpd/lighttpd.conf"
i have also setup my document root at //www/
finally i made some silly web pages and looked at them from a browser outside the zipit.
at some point i decided i needed a package called "lighttpd-mod-fastcgi"
after installing this package using ovpkg, i further edited lighttpd.conf 
as instructed on the following site
    
http://php.net/manual/en/install.unix.lighttpd-14.php
    
if i remember correctly i was having trouble ovpkg.  i eventually manually deleted as well 
as using "ovpkg remove lighttpd" to remove the lighttpd package, then i installed 
lighttpd-mod-fastcgi.  when lighttpd-mod-fastcgi was installed, the dependancy of lighttpd 
was noticed by ovpkg, and lighttpd was then automatically installed.

****mysql****

this program was installed easily.  at this time i have mysql installed and working.  
i can happily create databases, tables and execute tedious sql statements.  i think 
i have mysql installed and working correctly.

****php5****

installing this took some trial and error just like installing lighttpd.  i think that my 
zipit is doing something strange with files which are installed from ovpkg.  it seems 
like i need to edit files at the location //overlay/path/to/file rather than //path/to/file.
I'll come back a address this later. anyway, i ultimately wanted to install php5-fastcgi,
so i did so without worring about installing php5 itself. as with the lighttpd; php5 was 
installed as well as the php5-fastcgi.

after these steps were completed, i created a file //www/index.php.  it contained;

<?php phpinfo(); ?>

and that worked eventually worked.

****php5-mod-mysqli****

i think this is the last piece of the puzzle.  i have not been able to get this part working.

i have installed "ovpkg install php5-mod-mysqli".

i think there is something weird happening when I install this.  it seems like i suddenly had 
problems with lighttpd loading.  the lighttpd.conf seems to have been changed and the line 
regarding the error.log. it seems like the new location i typed in //etc/lighttpd/lighttpd.conf
line 32 keeps changing.  also the actual file and directory get deleted between bootups.
I recently changed the file location to //www/

