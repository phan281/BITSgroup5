<!DOCTYPE html>
<html lang="en">
    <?php include('head.php')?>   
    <body>
    <?php include('header.php')?>
    <?php if (empty($_SESSION['username'])) {
  header("Location: account.php?account");
    }?>

    <section id="about-header" >
        
        <h2>Save Your Favorite Games </h2>
        
        <p>Follow the games article to recieves news from publisher! </p>
        
    </section>

    <section id="bookmark" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Name</td>
                    <td>Category</td>
                    <td>Description</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#"><i class="fas fa-minus"></i></a></td>
                    <td><img src="img/products/f1.jpg" alt=""></td>
                    <td>CyberPunk2077</td>
                    <td>Action-Adventure</td>
                    <td><a href="sproduct_cyperp.php">View Description</a></td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fas fa-minus"></i></a></td>
                    <td><img src="img/products/f5.jpg" alt=""></td>
                    <td>Stray</td>
                    <td>Adventure, Indie</td>
                    <td><a href="sproduct_stray.html">View Description</a></td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fas fa-minus"></i></a></td>
                    <td><img src="img/products/f6.jpg" alt=""></td>
                    <td>God Of War</td>
                    <td>Action,Adventure,StoryRich</td>
                    <td><a href="sproduct_gow.html">View Description</a></td>
                </tr>
            </tbody>
        </table>
    </section>


<?php include('footer.php')?>


    <script src="script.js"></script>
</body>
</html>