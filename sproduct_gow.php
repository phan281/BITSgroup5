<!DOCTYPE html>
<html lang="en">
<?php include('head.php')?>   
<body>
<?php include('header.php')?>

    <section id="prodetail" class="section-p1">
        <div class="single-pro-image">
            <img src="img/products/f6.jpg" width="100%" id="MainImg" alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="img/products/f6.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/gow_2.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/gow_3.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/products/gow_4.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>
        <div class="sing-pro-details">
            <h3>Home / Action - Adventure</h3>
            <h2>GOD OF WAR: RAGNAROK</h2>
            
            <div class = "product-price">
                <p class = "last-price">Old Price: <span>$130</span></p>
                <p class = "new-price">New Price: <span>$100 ($30 off)</span></p>
              </div>
            <select>
                <option>Select version</option>
                <option>God Of War: Ragnarok</option>
                <option>God Of War: Ragnarok (Santa Monica's cut)</option>
            </select>
            <button class="normal">Bookmark</button>
            <h4>Description</h4>
            <span>Played God of War for the first time about 6 months ago and fell in love. After the teaser for God of War: Ragnarok came out I got so excited I had to make an animation for it. It took me many weeks to animate this and has become my most favorite animation I've ever done. I really hope you all enjoy!</span><br>
            <br>
            <span>Side Bar Options:</span>
            <br>
            <span> - 10 adjustable sound effects</span>
            <br>
            <span> - Clock on/off</span>
            <br>
            <span> - Adjustable Clock effects</span>
            <br>
            <span> - Adjustable Snow </span>
            <br>
            <span> - Adjustable Axe glow </span>
            <br>
            <span> - Kratos & Artreus on/off </span>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>More Games</h2>
        <p>Lets explore!</p>
        <div class="pro-container">
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
            <div class="pro" onclick="window.location.href='sproduct_raft.php'">
                <img src="img/products/raft4.jpg" alt="">
                <div class="des">
                    <span>2022 Best Survival Game</span>
                    <h5>RAFT</h5>
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
            <div class="pro" onclick="window.location.href='sproduct_ff7.php'">
                <img src="img/products/ffan2.jpg" alt="">
                <div class="des">
                    <span>2022 Best Soundtracks</span>
                    <h5>FINAL FANTASY VII: REMAKE INTERGRADE </h5>
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