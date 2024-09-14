<!DOCTYPE html>
<html>
<head>

</head>

<?php
$id='';
if(isset($_POST['email'])){
    $email=$_POST['email'];
}
if(isset($_POST['password'])){
    $pass=$_POST['password'];
}
if(isset($_POST['number'])){
    $number=$_POST['number'];
}
if(!$email || !$pass || !$number){
    echo '<span style="color: red">You have not entered all the required details</span>';
    exit;
}
if (!get_magic_quotes_gpc()) { $number = addslashes($number); //Returns a string with backslashes before characters that need to be quoted in database queries etc. //These characters are single quote ('), double quote ("), backslash (\) and NUL (the NULL byte). // for example when adding the string to insert the name O'reilly
    $email = addslashes($email);
    $pass = addslashes($pass);
}
@ $db = new mysqli('localhost', 'root', '', 'project1');
if (mysqli_connect_errno())
{ echo "Error: Could not connect to database. Please try again later."; exit; }
$query = "insert into members values('".$email."', '".$pass."', '".$number."', '".$id."')";
$result = $db->query($query);
if ($result) {
    header("location: login.php");

} else { echo 'alert ("An error has occurred. The item was not added.")'; }
$db->close();
?>
</html>
