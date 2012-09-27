Project:
Remote Bookmarklet

Author:
Greg Kraus
greg_kraus@ncsu.edu
North Carolina State University
http://go.ncsu.edu/itaccess

Description:
A system to create bookmarklets that pull JavaScript code live from a specified server instead of storing the entire functionality of the bookmarklet in the href attribute. This allows you to provide live updates to your bookmarklet without having to update it in your browser's bookmarks menu.

Instructions:

1. Write your JavaScript functions in code.js

2. Update remote-bookmarklet.php to load jQuery, if it is needed

3. Create the bookmarklet to point to your remote-bookmarklet.php. This can be done by editing the yourURL variable in the following bookmarklet.

<a href="javascript:%20(function()%7Bvar%20yourURL='http://accessibility.oit.ncsu.edu/tools/remote-bookmarklet/remote-bookmarklet.php';function%20getScript(url,success)%7Bvar%20script=document.createElement('script');script.src=url;var%20head=document.getElementsByTagName('head')%5B0%5D,done=false;script.onload=script.onreadystatechange=function()%7Bif(!done&&(!this.readyState%7C%7Cthis.readyState=='loaded'%7C%7Cthis.readyState=='complete'))%7Bdone=true;success();script.onload=script.onreadystatechange=null;head.removeChild(script);%7D%7D;head.appendChild(script);%7D%20getScript(yourURL,function()%7B%7D);%7D)();">Auto Code Loader</a>

This bookmarklet is implemented at the following page.

http://accessibility.oit.ncsu.edu/tools/remote-bookmarklet/
