<!DOCTYPE html>
<html lang="en">
<?php include('head.php')?>   
<body>
<?php include('header.php')?>
<?php if (empty($_SESSION['username'])) {
  header("Location: account.php?account");
}?>

    <section id="product1" class="section-p1">
        <h2>Scifi</h2>
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct_cyperp.php'">
                <img src="img/products/f1.jpg" alt="">
                <div class="des">
                    <span>Developer : CD PROJEKT RED</span>
                    <h5>CYBERPUNK</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <h4>$85</h4>
                </div>
                <a href="#"><i class="fa-regular fa-bookmark bookmark"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct_lego.php'">
                <img src="img/products/p4.png" alt="">
                <div class="des">
                    <span>2022 Sit Back and Relax</span>
                    <h5>LEGO STAR WAR</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$98</h4>
                </div>
                <a href="#"><i class="fa-regular fa-bookmark bookmark"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct_dstrand.php'">
                <img src="img/products/p3.png" alt="">
                <div class="des">
                    <span>2022 Best Game on the go</span>
                    <h5>DEATH STANDING: DIRECTOR'S CUTS</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$50</h4>
                </div>
                <a href="#"><i class="fa-regular fa-bookmark bookmark"></i></a>
            </div>
        </div>