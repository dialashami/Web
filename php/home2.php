<?php
$date=$_POST['date'];
$time=$_POST['time'];
$message=$_POST['message'];
if(!$date || !$time || !$message){
    echo '<span style="color: red">You have not entered all the required details</span>';
    exit;
}
if (!get_magic_quotes_gpc()) { $number = addslashes($date); //Returns a string with backslashes before characters that need to be quoted in database queries etc. //These characters are single quote ('), double quote ("), backslash (\) and NUL (the NULL byte). // for example when adding the string to insert the name O'reilly
    $email = addslashes($time);
    $pass = addslashes($message);
}
@ $db = new mysqli('localhost', 'root', '', 'project1');
if (mysqli_connect_errno())
{ echo "Error: Could not connect to database. Please try again later."; exit; }
$query = "insert into reserve (date,time,details) values('".$date."', '".$time."', '".$message."')";
$result = $db->query($query);
if ($result) {

} else { echo 'alert ("An error has occurred. The item was not added.")'; }
$db->close();

?>
