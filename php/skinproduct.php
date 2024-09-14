<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Cart </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//s.w.org' />
</head>
<body>
<?php
session_start();
include('db.php');
$con = mysqli_connect("localhost","root","","project1");
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
    $code = $_POST['code'];
    $result = mysqli_query($con, "SELECT * FROM `skinproduct` WHERE `code`='$code'"
    );
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $code = $row['code'];
    $price = $row['price'];
    $image = $row['image'];

    $cartArray = array(
        $code=>array(
            'name'=>$name,
            'code'=>$code,
            'price'=>$price,
            'quantity'=>1,
            'image'=>$image)
    );

    if(empty($_SESSION["shopping_cart"])) {
        $_SESSION["shopping_cart"] = $cartArray;
        $status = "<div class='box'>Product is added to your cart!</div>";
    }else{
        $array_keys = array_keys($_SESSION["shopping_cart"]);
        if(in_array($code,$array_keys)) {
            $status = "<div class='box' style='color:red;'>
 Product is already added to your cart!</div>";
        } else {
            $_SESSION["shopping_cart"] = array_merge(
                $_SESSION["shopping_cart"],
                $cartArray
            );
            $status = "<div class='box'>Product is added to your cart!</div>";
        }

    }
}
?>

$result = mysqli_query($con,"SELECT * FROM `skinproduct`");
while($row = mysqli_fetch_assoc($result)){
echo "<div class='product_wrapper'>
    <form method='post' action=''>
        <input type='hidden' name='code' value=".$row['code']." />
        <div class='image'><img src='".$row['image']."' /></div>
        <div class='name'>".$row['name']."</div>
        <div class='price'>$".$row['price']."</div>
        <button type='submit' class='buy'>Add to cart</button>
    </form>
</div>";
}
mysqli_close($con);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
    <?php echo $status; ?>
</div>


</body>
</html>


