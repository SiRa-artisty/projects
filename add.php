<?php
$regno=$_POST['regno'];
$name=$_POST['name'];
$branch=$_POST['branch'];
$year=$_POST['year'];

$username=$_POST['username'];
$password=$_POST['password'];

$dbDatabase = "studata";

$dbServer = "localhost";
$dbUser = "root";

$dbPass = "";

$sConn = mysql_connect($dbServer, $dbUser, $dbPass) or die("Couldn't connect to database server");

$dConn = mysql_select_db($dbDatabase, $sConn) or die("Couldn't connect to database $dbDatabase");

$query="insert into student values('{$regno}','{$name}','{$branch}','{$year}','{$username}','{$password}')";

if(mysql_query($query,$sConn))
{
echo "<br>Student details added to the database<br>";
echo"<br><a href="./add.html">Add student details<a>";
}
else
{
echo "<br><b>Student already exist<b><br>";
echo "<a href="./add.html">Back</a><br>";
}
?>