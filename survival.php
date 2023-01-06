<!DOCTYPE html>
<html lang="en">
<?php include('head.php')?>   
<body>
<?php include('header.php')?>
<?php if (empty($_SESSION['username'])) {
  header("Location: account.php?account");
}?>

    <section id="product1" class="section-p1">
        <h2>Survival</h2>
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct_dayz.php'">
                <img src="img/products/f2.jpg" alt="">
                <div class="des">
                    <span>Developer : Bohemia Interactive</span>
                    <h5>DAYZ</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$75</h4>
                </div>
                <a href="#"><i class="fa-regular fa-bookmark bookmark"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct_dhunger.php'">
                <img src="img/products/f7.jpg" alt="">
                <div class="des">
                    <span>Developer : Dread Hunger Team</span>
                    <h5>DREAD HUNGER</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <h4>$45</h4>
                </div>
                <a href="#"><i class="fa-regular fa-bookmark bookmark"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct_raft.php'">
                <img src="img/products/f8.jpg" alt="">
                <div class="des">
                    <span>Developer : Redbeet Interactive</span>
                    <h5>RAFT</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <h4>$25</h4>
                </div>
                <a href="#"><i class="fa-regular fa-bookmark bookmark"></i></a>
            </div>
        </div>