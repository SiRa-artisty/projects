<?php
$username=$_POST['user'];
$password=$_POST['pass'];
session_start();

$_SESSION['user_id']=$username;

echo $_SESSION['user_id'];

if($selected_radio=='admin')
{
if($username=='admin' && $password=='sandeep')
{

echo "<br><b><u>Admin page</u></b><br>";


echo "<br><a href="./add.html">Add new student<a><br><br>";
echo "<a href="./feedback/result.html">Check results</a><br>";


}

}
else if($selected_radio=='stud')
{
$dbDatabase = "student";

$dbServer = "localhost";



$dbUser = "root";

$dbPass = "";
$sConn = mysql_connect($dbServer, $dbUser, $dbPass) or die("Couldn't connect to database server");

$dConn = mysql_select_db($dbDatabase, $sConn) or die("Couldn't connect to database $dbDatabase");

$query="select * from student where username='$username' && password='$password'";

$data=mysql_query($query,$sConn);

if($data)
{
echo "<br><b>Login successful</b><br>";
echo "<br><b>Welcome $username</b><br>";
echo "<br><b><u>Student Information</u></b><br><br>";

$info = mysql_fetch_array( $data ); 
 
 Print "<tr>"; 
 Print "<th>Name:</th> <td>".$info['name'] . "</td> "; 
 Print "<th>year:</th> <td>".$info['year'] . "</td> "; 
 Print "<th>branch:</th> <td>".$info['branch'] . " </td></tr>"; 
  
echo "<br><br><b><a href=./feeder.html">Enter Feedback now</a></b><br>";
}


else
{
echo "Invalid username and Password combination<br>";
}

}



?>