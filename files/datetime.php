<script>
    let browserTimeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;
    let setCookie = document.cookie = "clientTimeZone="+browserTimeZone;
</script>

<?php
$clientTimeZone = $_COOKIE['clientTimeZone'];
date_default_timezone_set($clientTimeZone);
//date_default_timezone_set();
// Assuming today is March 10th, 2001, 5:16:18 pm, and that we are in the
// Mountain Standard Time (MST) Time Zone
//

//$dateTime = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
//$dateTime = date("m.d.y");                         // 03.10.01
//$dateTime = date("j, n, Y");                       // 10, 3, 2001
//$dateTime = date("Ymd");                           // 20010310
//$dateTime = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
//$dateTime = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
//$dateTime = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
//$dateTime = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
//$dateTime = date("H:i:s");                         // 17:16:18
$dateTime = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)
?>