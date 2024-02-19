MOODLE FOR WINDOWS 
==================

This package contains everything you need to run Moodle on a windows machine.

Moodle has been packaged with Apache, MariaDB and PHP.




HOW TO USE IT
=============

1. Run 'Start Moodle.exe' to start up the system.

2. Visit http://localhost/ to use your Moodle site!

3. Other people have to access it via http://xxx.xxx.xxx.xxx where
   xx.xx.xx.xx is the IP number or name of your Windows computer.

4. If you want to shut down the Moodle server, use 'Stop Moodle.exe'




TECHNICAL INFORMATION
=====================

1. Start/Stop Moodle.exe

'Start Moodle.exe' runs the xampp installation script
located in server/install/install.php. Then it starts Apache and MariaDB.
'Stop Moodle.exe' stops the Apache and MariaDB processes.


2. XAMPP (https://www.apachefriends.org/en/xampp.html)

You can use xampp executable files directly if you like.  They are 
located in the "server" directory. 
 

3. Moodle (https://moodle.org/)

All moodle files are located in server/moodle/


4. Performance Settings (https://docs.moodle.org/en/Performance)

In order to optimize your Moodle Environment, see the Moodle Performance docs. 




TROUBLESHOOTING
===============

If 'Start Moodle.exe' fails to work and the windows closes automatically, 
you may have something blocking port 80 on your machine.  Make sure there
are no other web servers running on this port, Skype is configured not 
to use port 80, firewalls are open etc

Another reason could be because PHP in this package needs the Microsoft
Visual C++ 2019 (VS16) or newer Redistributable package from:
https://learn.microsoft.com/en-us/cpp/windows/latest-supported-vc-redist

For more information, visit:
https://docs.moodle.org/en/Complete_install_packages_for_Windows

Do not rename the 'server/' folder. Otherwise 'Start Moodle.exe' and 
'Stop Moodle.exe' will stop working and you'll have to use xampp 
executable files. (xammp-control.exe)



Thank you for using Moodle!

Moodle HQ (https://moodle.com)

