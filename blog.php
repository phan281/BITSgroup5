<!DOCTYPE html>
<html lang="en">
<?php include('head.php')?>   
<body>
<?php include('header.php')?>
<?php if (empty($_SESSION['username'])) {
  header("Location: account.php?account");
}?>   
<body>


    <section id="blog-header">
        
        <h2>COMMUNITY</h2>
        
        <p>Discussion Workshops and Market</p>
        
    </section>

    <section id="blog">
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/f1.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Workshop Items Now Support Sketchfab Interactive Previews</h4>
                <p>Ever dreamed of seeing your brilliant ideas come to life in games played by millions of people? Now you can, with the Steam Workshop. Here you can submit, find, rate, and download new content and modifications for your favorite Steam games.</p>
                <a href="#">Continue reading</a>    
            </div>
            <h1>28/1</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/f2.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Bartololomeo's Workshop : Chained Echoes</h4>
                <p>Spectacular pixel art, highly detailed for both sprites and backgrounds, yet perfectly nostalgic for the classic 16bit era of jRPGs. This would have been comfortable on the SNES and lauded for its visuals to boot. There was a definite missed opportunity for implementing a lovely scanline or CRT shader, that would have just amped the nostalgia factor.</p>
                <a href="#">Continue reading</a>    
            </div>
            <h1>29/12</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/f3.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>100% Achievements Guide [Vampire Survivors]</h4>
                <p>The Following Relics are extremely important and should be prioritized above all else, as they are requirements for several dozens of achievements</p>
                <a href="#">Continue reading</a>    
            </div>
            <h1>5/1</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/f4.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>NFS Unbound Review</h4>
                <p>Bought this game last week, finished The Grand. There is still more: Lakeshore Online, Activities and Collectibles for that custom M1, rice some cars, oh and write a review about this game.</p>
                <a href="#">Continue reading</a>    
            </div>
            <h1>16/10</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="img/blog/f5.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Ubisoft's interpretation of an open world adventure.</h4>
                <p>Assassin's Creed Valhalla. A typical Ubisoft game. A so called Ubisoft Original. A great open world bottlenecked by a "storyline" that's okay-ish at best but why did i hit the recommend button? Most likely because there is still no neutral review option on Steam.</p>
                <a href="#">Continue reading</a>    
            </div>
            <h1>15/06</h1>
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
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

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> 702 Nguyen Van Linh District 7, Ho Chi Minh City</p>
            <p><strong>Tel:</strong> (+84) 28 3776 1369</p>
            <p><strong>Hours:</strong> Monday to Saturday from 8am to 5pm (GMT+7)</p>
        </div>
        <div class="follow">
            <h4>Follow and support us</h4>
            <div class="icon">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-twitter"></i>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View bookmark</a>
            <a href="#">Help</a>
        </div>
        
    </footer>


    <script src="script.js"></script>
</body>
</html>