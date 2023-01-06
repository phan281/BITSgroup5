<section id="header">
    <?php include('connect.php'); ?>
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <?php if(isset($_GET['index'])) {?>
                    <li><a class="active" href="index.php?index">Home</a></li>
                <?php } else {?>
                    <li><a href="index.php?index">Home</a></li>
                <?php } ?>
                <?php if(isset($_GET['game'])) {?>
                    <li><a class="active" href="games.php?game">Games</a></li>
                <?php } else {?>
                    <li><a href="games.php?game">Games</a></li>
                <?php } ?>
                
                <?php if(isset($_GET['blog'])) {?>
                    <li><a class="active" href="blog.php?blog">Blog</a></li>
                <?php } else {?>
                    <li><a href="blog.php?blog">Blog</a></li>
                <?php } ?>
                <?php if(isset($_GET['about'])) {?>
                    <li><a class="active" href="about.php?about">About</a></li>
                <?php } else {?>
                    <li><a href="about.php?about">About</a></li>
                <?php } ?>
                <?php if(isset($_GET['contact'])) {?>
                    <li><a class="active" href="contact.php?contact">Contact</a></li>
                <?php } else {?>
                    <li><a href="contact.php?contact">Contact</a></li>
                <?php } ?>
                <?php if(isset($_SESSION['username'])) { ?>
                    <li><a class="active" href="#"><?php echo $_SESSION['username']; ?></a></li>
                    <li><a href="logout.php">Logout</a></li>
                <?php } else { ?>
                <?php if(isset($_GET['account'])) {?>
                    <li><a class="active" href="account.php?account">Account</a></li>
                <?php } else {?>
                    <li><a href="account.php?account">Account</a></li>
                <?php } ?>
                <?php } ?>
                <?php if(isset($_GET['bookmark'])) {?>
                    <li><a class="active" href="bookmark.php?bookmark"><i class="fa-solid fa-bookmark"></i></a></li>
                <?php } else {?>
                    <li><a href="bookmark.php?bookmark"><i class="fa-solid fa-bookmark"></i></a></li>
                <?php } ?>
            </ul>
        </div>
    </section>