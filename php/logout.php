<?php
@ $db = new mysqli('localhost', 'root', '', 'project1');
if (mysqli_connect_errno())
{ echo "Error: Could not connect to database. Please try again later."; exit; }
$query = "DELETE FROM card  ";
$d ="DELETE FROM reserve";
$result = $db->query($query);
    $res2=$db->query($d);


if ($res2 && $result) {
    header("location: mainpage.html");


} else { echo 'alert ("An error has occurred. The item was not added.")'; }
$db->close();

?>
