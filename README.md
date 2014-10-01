<?php include("../inc/bd.php");
mysql_query('SET NAMES utf8');
?>
<html>
<head>
    <title>Hit Counter</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" text="#000000">
<?php


$result_count = mysql_query("SELECT * FROM counter ORDER BY id", $db);
$myrow = mysql_fetch_array($result_count);

do {
    $count = $myrow['hits'];
} while ($myrow = mysql_fetch_array($result_count));

$date_d=date('d');
$date_m=date('M');
$date_y=date('Y');

$visitor = $count + 1;
$result_add_count = mysql_query("INSERT INTO counter (hits,date_d,date_m,date_y) VALUES ('$visitor','$date_d','$date_m','$date_y')", $db);

?>
</body>
</html>




<?php

include("../inc/bd.php");
mysql_query('SET NAMES utf8');
?>
    <html>
    <head>
        <title>Hit Counter</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body bgcolor="#FFFFFF" text="#000000">

<?php

$result_count = mysql_query("SELECT * FROM counter ORDER BY id", $db);
$myrow = mysql_fetch_array($result_count);

do {
    $count = $myrow['hits'];
    echo $count;
} while ($myrow = mysql_fetch_array($result_count));
?>


        </body>
 </html>
