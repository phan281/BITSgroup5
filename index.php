<!DOCTYPE html>
<html lang="en">
    <?php include('head.php')?>  
    <?php 
    if (isset($_GET['msg'])) {?>
        <script>
        function Redirect() {
        window.location = 'index.php?index';
        }
        alert('Logged in successfully !') 
        Redirect()
    </script>
<?php } ?> 
    <body>
    <?php include('header.php')?>
    <?php if (empty($_SESSION['username'])) {
  header("Location: account.php?account");
}?>

    <div class="row">
        <div class="col-2">
            <h1>The Virtual World<br> Is Waiting For You</h1>
            <p>I don't need therapy, I just need my video games.</p>
        </div>
        <div class="col-2">
            <img src="https://preview.redd.it/1z31z5y520r61.png?auto=webp&s=8ecf76bc57517ee5f892cb8afe1b5d33fadae107">
        </div>
    </div>


    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            
            <?php if(isset($_GET['simulation'])) {?>
                    <li><a class="active" href="simulation.php?contact">Simulation</a></li>
                <?php } else {?>
                    <li><a href="simulation.php?simulation">Simulation</a></li>
                <?php } ?>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <?php if(isset($_GET['sport'])) {?>
                    <li><a class="active" href="sport.php?sport">All Sports</a></li>
                <?php } else {?>
                    <li><a href="sport.php?sport">All Sports</a></li>
                <?php } ?>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <?php if(isset($_GET['scifi'])) {?>
                    <li><a class="active" href="scifi.php?scifi">Scifi</a></li>
                <?php } else {?>
                    <li><a href="scifi.php?scifi">Scifi</a></li>
                <?php } ?>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <?php if(isset($_GET['adventure'])) {?>
                    <li><a class="active" href="adventure.php?adventure">Adventure</a></li>
                <?php } else {?>
                    <li><a href="adventure.php?adventure">Adventure</a></li>
                <?php } ?>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <?php if(isset($_GET['survival'])) {?>
                    <li><a class="active" href="survival.php?survival">Survival</a></li>
                <?php } else {?>
                    <li><a href="survival.php?survival">Survival</a></li>
                <?php } ?>
        </div>
    </section>



    <section id="product1" class="section-p1">
        <h2>Featured Games</h2>
        <p>Featured In-Game Discount</p>
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
            <div class="pro" onclick="window.location.href='sproduct_elring.php'">
                <img src="img/products/f3.jpg" alt="">
                <div class="des">
                    <span>Developer : FromSoftware Inc</span>
                    <h5>ELDEN RING</h5>
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
            <div class="pro" onclick="window.location.href='sproduct_stray.php'">
                <img src="img/products/f5.jpg" alt="">
                <div class="des">
                    <span>Developer : BlueTwelve Studio</span>
                    <h5>STRAY</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-regular fa-bookmark bookmark"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct_gow.php'">
                <img src="img/products/f6.jpg" alt="">
                <div class="des">
                    <span>Developer : Santa Monica Studio</span>
                    <h5>GOD OF WAR</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <h4>$50</h4>
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

    </section>

    <section id="banner" >
        <h4>BEST OF 2022</h4>
        <h2>A look back at the year <span>top sellers</span>, <span>new releases</span> and more!</h2>
        <div class="pro" onclick="window.location.href='games.html'">
            <button class="normal">Explore more</button>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>2022 Steam Award Winners</h2>
        <p>The Steam Community has spoken, and we are proud to announce the winners for The 2022 Steam Awards!</p>
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct_hitman3.php'">
                <img src="img/products/p1.jpg" alt="">
                <div class="des">
                    <span>2022 VR Game of the year</span>
                    <h5>HITMAN 3</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$85</h4>
                </div>
                <a href="#"><i class="fa-regular fa-bookmark bookmark"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct_raft.php'">
                <img src="img/products/f8.jpg" alt="">
                <div class="des">
                    <span>2022 Better with friend</span>
                    <h5>RAFT</h5>
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
            <div class="pro" onclick="window.location.href='sproduct_marvel.php'">
                <img src="img/products/p2.png" alt="">
                <div class="des">
                    <span>2022 Outstanding Visual Style</span>
                    <h5>MARVEL'S SPIDERMAN: MILES MORALES</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$90</h4>
                </div>
                <a href="#"><i class="fa-regular fa-bookmark bookmark"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct_ff7.php'">
                <img src="img/products/p5.jpg" alt="">
                <div class="des">
                    <span>2022 Best Sound Track</span>
                    <h5>FINAL FANTASY VII REMAKE INTERGRADE</h5>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h4>$67</h4>
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

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Crazy deals</h4>
            <h2>WINTER SALE</h2>
            <span>Dec22 - Jan5 at 10a.m.pacific </span>
            <button href="games.php" alt="" class="white">Learn more</button>
        </div> 
        <div class="banner-box2">
            <h4>Look back</h4>
            <h2>Replay Your Year</h2>
            <span>Upcoming games waiting for you </span>
            <button class="white">Upcoming Games</button>
        </div>             
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>Starwar Franchise</h2>
            <h3>Up to 88% off</h3>
        </div>
        <div class="banner-box2">
            <h2>Warhammer Franchise</h2>
            <h3>Up to 90% off</h3>
        </div>  
        <div class="banner-box3">
            <h2>Need for Speed Franchise</h2>
            <h3>Up to 81% off</h3>
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


    <script src="script.js"></script>
</body>
</html>