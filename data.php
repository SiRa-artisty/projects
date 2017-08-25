<?php

session_start();


$id=$_SESSION['user_id'];


$subject=$_POST['sub'];

$first=$_POST['subject'];
$second=$_POST['placement'];
$third=$_POST['act'];
$fourth=$_POST['expl'];
$fifth=$_POST['prep'];
$sixth=$_POST['inte'];
$seventh=$_POST['repl'];
$eighth=$_POST['qual'];
$ninth=$_POST['leve'];
$tenth=$_POST['exam'];
$eleventh=$_POST['info'];
$twelveth=$_POST['syll'];
$thirteen=$_POST['over'];


$dbDatabase = "studata";

$dbServer = "localhost";



$dbUser = "root";

$dbPass = "";

$sConn = mysql_connect($dbServer, $dbUser, $dbPass) or die("Couldn't connect to database server");

$dConn = mysql_select_db($dbDatabase, $sConn) or die("Couldn't connect to database $dbDatabase");

$query="insert into take values('{$subject}','{$id}','{$first}','{$second}','{$third}','{$fourth}','{$fifth}', '{$sixth}','{$seventh}','{$eighth}','{$ninth}','{$tenth}','{$eleventh}','{$twelveth}','{$thirteen}')";

if(mysql_query($query,$sConn))
{
echo "<h3>Your feedback is successfull added..<h3><h4>Thank you</h4>";
}
else
{
echo "Error in feedback";
}

session_destroy();
?>