<!DOCTYPE html>
<html lang="en">
<?php include('head.php')?>   
<body>
<?php include('header.php')?>
<?php if (empty($_SESSION['username'])) {
  header("Location: account.php?account");
}?>

    <section id="page-header">
        
        <h2>Best Game Playing Today</h2>
        
        <p>#worldgaming</p>
        
    </section>

    <form>
        <i class="fas fa-search"></i>
        <input type="text" name="" id="search-item" placeholder="Search here" onkeyup="search()"">
    </form>

    <section id="product1" class="section-p1">
        <div class="pro-container" id="game-list">
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
            <div class="pro" onclick="window.location.href='sproduct_gow.php'" >
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
            
        </div>

    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
    </section>

    

    <?php include('footer.php')?>   


    <script src="script.js"></script>
</body>
</html>