<?php
session_start();
if(isset($_SESSION['islogin3'])){
    if($_SESSION['islogin3']!=1){
        header("location: profile.php");
    }

}
else {
    header("location: profile.php");
}

?>