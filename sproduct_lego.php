<!DOCTYPE html>
<html lang="en">
<?php include('head.php')?>   
<body>
<?php include('header.php')?>


    <section id="prodetail" class="section-p1">
        <div class="single-pro-image">
            <img src="img/products/p4.png" width="100%" id="MainImg" alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="img/products/lego2.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/lego3.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/lego4.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/death4.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>
        <div class="sing-pro-details">
            <h3>Home / Lego - Adventure</h3>
            <h2>LEGO: STAR WAR</h2>
            <h2>$90</h2>
            <select>
                <option>Select version</option>
                <option>Lego: Star War</option>
                <option>Lego: Star War II</option>
                <option>Lego: Star War III</option>
            </select>
            <button class="normal">Bookmark</button>
            <h4>Description</h4>
            <span>Cyberpunk 2077 is an open-world, action-adventure RPG set in the megalopolis of Night City, where you play as a cyberpunk mercenary wrapped up in a do-or-die fight for survival. Improved and featuring all-new free additional content, customize your character and playstyle as you take on jobs, build a reputation, and unlock upgrades. The relationships you forge and the choices you make will shape the story and the world around you. Legends are made here. What will yours be?</span><br>
            <br>
            <span>Cyberpunk 2077 contains strong language, intense violence, blood and gore, as well as nudity and sexual material.</span>

        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>More Games</h2>
        <p>Lets explore!</p>
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct_hitman3.php'">
                <img src="img/products/p1.jpg" alt="">
                <div class="des">
                    <span>2022 Mission Game</span>
                    <h5>HITMAN 3</h5>
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
            <div class="pro" onclick="window.location.href='sproduct_stray.php'">
                <img src="img/products/f5.jpg" alt="">
                <div class="des">
                    <span>2022 Most Innovative Gameplay</span>
                    <h5>STRAY</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$45</h4>
                </div>
                <a href="#"><i class="fa-regular fa-bookmark bookmark"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct_gow.php'">
                <img src="img/products/f6.jpg" alt="">
                <div class="des">
                    <span>2022 Outstanding Story-rich Game</span>
                    <h5>GOD OF WAR</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$25</h4>
                </div>
                <a href="#"><i class="fa-regular fa-bookmark bookmark"></i></a>
            </div>
        </div>

    </section>
    
    
     <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletter</h4>
            <p>Get E-mail updates about latest games and <span>special offers</span>.</p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <?php include('footer.php')?>

    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function(){
            MainImg.scr = smallimg[0].src;
        }
        smallimg[1].onclick = function(){
            MainImg.scr = smallimg[1].src;
        }
        smallimg[2].onclick = function(){
            MainImg.scr = smallimg[2].src;
        }
        smallimg[3].onclick = function(){
            MainImg.scr = smallimg[3].src;
        }
    </script>



    <script src="script.js"></script>
</body>
</html>