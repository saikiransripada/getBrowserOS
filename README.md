getBrowserOS
============

getBrowserOS is 2 very simple PHP functions to fetch the Browser and Operating System from user agent data. It's made for simple, non-important situations and is offered as a light alternative to using PHP's built in function `get_browser()` which requires the `browscap.ini` file to be up to date.

It has been split into 2 seperate functions to give the option of which information you require depending on your situation.


How-To
======

<ul>
  <li>Host getBrowserOS.php somewhere on your server or put into a global PHP file</li>
  <li>Include getBrowserOS.php or the global PHP file on the pages you wish to use these functions</li>
  <li>Assign the functions return values to variables as shown in index.php</li>
  <li>Then display, store or use the information how ever you wish</li>
</ul>


Reliability
===========

As user agent data is not 100% realiable, this function shouldn't be used as accurate data or for anything of major importance.


Author
======

Joe Mottershaw<br />
Cloud Eight<br />
http://www.cloud-eight.com
