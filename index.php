<?php include ("../inc/bd.php");
mysql_query('SET NAMES utf8');
?>
<html>
<head>
    <title>Hit Counter</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<?php
        $result=mysql_query("SELECT * FROM counter ORDER BY id",$db);
        $myrow=mysql_fetch_array($result);
    do{
        $count=$myrow['pnam'];
        echo $count;
    }
    while($myrow=mysql_fetch_array($result));

?>
</body>
</html>
