<?php
session_start();


if(isset($_SESSION['islogin1'])){
    if($_SESSION['islogin1']!=1){
        header("location: adminlogin.php");
    }

}
else {
    header("location: adminlogin.php");
}

?>