<!DOCTYPE html>
<html lang="en">
<?php include('head.php')?>   
<body>
<?php include('header.php')?>
<?php if (empty($_SESSION['username'])) {
  header("Location: account.php?account");
}?>

    <section id="about-header" >
        
        <h2>#KnowUs</h2>
        
        <p>The ultimate destination for reviewing, discussing and learning games. </p>
        
    </section>

    <section id="about-head" class="section-p1">
        <img src="img/about/a2.jpg" alt="">
        <div>
            <h2>Who Are We?</h2>
            <p>Access Games Instantly with nearly 30,000 games from AAA to indie and everything in-between. Enjoy exclusive deals, automatic game updates, and other great perks.
               Join the Community to meet new people, join groups, form clans, chat in-game and more! With over 100 million potential friends (or enemies), the fun never stops.Release your Game
               Steamworks is the set of tools and services that help game developers and publishers get the most out of distributing games on Steam. 
               We are constantly working to bring new updates and features such as talk with friends or groups via text or voice without leaving the web. 
               Videos, Tweets, GIFs and more are supported; use wisely.Everything about your game, all in one place. Join discussions, upload content, and be the first to know about new updates.
               Stream your gameplay live with the click of a button, and share your game with friends or the rest of the community.
            </p>
            
            <abbr title="">Join the community to earn more gifts from developers and publishers.</abbr>
           
            <br><br>

            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Earn achievements, read reviews, explore custom recommendations, and more.</marquee>
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