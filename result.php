<?php

$sub=$_POST['sub'];

$dbDatabase = "studata";

$dbServer = "localhost";


$dbUser = "root";

$dbPass = "";

$sConn = mysql_connect($dbServer, $dbUser, $dbPass) or die("Couldn't connect to database server");

$dConn = mysql_select_db($dbDatabase, $sConn) or die("Couldn't connect to database $dbDatabase");

$query="SELECT * FROM take WHERE sub='$sub'";

$data=mysql_query($query,$sConn);

$count=0;
$cin=0;

while($row = mysql_fetch_array($data))
{

$count=$count+($row['2']+$row['3']+$row['4']+$row['5']+$row['6']+$row['7']+$row['8']+$row['9']+$row['10']+$row['11']+$row['12']+$row['13']+$row['14']);
$cin++;
}

echo "<b>Number of students given feedback is </b>";
echo $cin;
echo "<br><br><b>The result for</b> ";
echo $sub;
$total=65*$cin;
$per=($count/$total)*100;
echo "<b> is</b> ";
echo $count;

echo "<br><br><h4> Percentage score for ";
echo $sub;
echo " is ";
echo $per;

?>