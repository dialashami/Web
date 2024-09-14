<?php
session_start();


if(isset($_SESSION['islogin'])){
    if($_SESSION['islogin']!=1){
        header("location: login.php");
    }

}
else {
    header("location: login.php");
}

?>