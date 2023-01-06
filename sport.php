<!DOCTYPE html>
<html lang="en">
<?php include('head.php')?>   
<body>
<?php include('header.php')?>
<?php if (empty($_SESSION['username'])) {
  header("Location: account.php?account");
}?>

    <section id="product1" class="section-p1">
        <h2>Sports</h2>
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct_scum.php'">
                <img src="img/products/f4.jpg" alt="">
                <div class="des">
                    <span>Developer : Gamepires</span>
                    <h5>SCUM</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$60</h4>
                </div>
                <a href="#"><i class="fa-regular fa-bookmark bookmark"></i></a>
            </div>
        </div>