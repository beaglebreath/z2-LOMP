# z2-LOMP
this is my attempt to get a LOMP stack (lighttpd, openwrt, mysql, php5) working on a zipit z2.

the purpose of this project is to give me a set of software which will be integrated with additinal smal programs which interact with sensors and circuits attached to the zipit's docking connector.  

*lighttpd
    at this time i have lighttpd web-server installed and running on the zipit.  
    i have edited the file  "/ect/lighttpd/lighttpd.conf"
    i have also setup my document root at //www/
    finally i made some silly web pages and looked at them from a browser outside the zipit.
    
    at some point i decided i needed a package called "lighttpd-mod-fastcgi"
    after installing this package using ovpkg, i further edited lighttpd.conf 
    as instructed on the following site
    
    http://php.net/manual/en/install.unix.lighttpd-14.php
    
    if i remember correctly i was having trouble ovpkg.  i eventually manually deleted as well as using "ovpkg remove
    lighttpd" to remove the lighttpd package, then i installed lighttpd-mod-fastcgi.  by installing that package, the
    dependancy of lighttpd was seen by ovpkg, and lighttpd was then automatically installed.
*mysql
    at this time i have mysql installed and working.  i can happily create databases, tables and execute tedious sql
    statements.  i think i have mysql installed and working correctly.
*php5
    installing this took some trial and error.  i think that my zipit is doing something strange with files which are        installed from ovpkg.  it seems like i need to edit files at the location //overlay/path/to/file rather than             //path/to/file.  I'll come back a address this later.
    
    anyway, i ultimately wanted to install php5-fastcgi, so i did so without worring about installing php5 itself.
    as with the lighttpd; php5 was installed as well as the php5-fastcgi.
