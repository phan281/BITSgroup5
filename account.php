<!DOCTYPE html>
<html lang="en">
<?php include('head.php')?>
<?php 
    if (isset($_GET['msg'])) {?>
        <script>
        function Redirect() {
        window.location = 'account.php?account';
        }
        alert('Sign Up Success !') 
        Redirect()
    </script>
<?php } ?>
<?php 
    if (isset($_GET['fail'])) {?>
        <script>
        function Redirect() {
        window.location = 'account.php?account';
        }
        alert('Account or email already exists !') 
        Redirect()
    </script>
<?php } ?>
<?php 
    if (isset($_GET['faillogin'])) {?>
        <script>
        function Redirect() {
        window.location = 'account.php?account';
        }
        alert('Wrong account or password!') 
        Redirect()
    </script>
<?php } ?>
<body>
<?php include('header.php')?>

    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="img/hero1.jpg" width="100%">
                </div>

                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>
                        <form id="loginform" method="post" action="function.php">
                            <input type="text" placeholder="Username" name="username" required>
                            <input type="password" placeholder="Password" name="password" required>
                            <button type="submit" class="white" name="login">Login</button><br><br>
                            <a href="">Forgot password</a>
                        </form><br>
                        <form id="regform" method="post" action="function.php">
                            <input type="text" placeholder="Username" name="username" required>
                            <input type="email" placeholder="Email" name="email" required>
                            <input type="password" placeholder="Password" name="password" required>
                            <button type="submit" name="singup" class="white">Register</button>
                        </form>

                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php')?>


    <script src="script.js"></script>


    <!----for toggle form-->
    <script>
        var loginform = document.getElementById("loginform");
        var regform = document.getElementById("regform");
        var Indicator = document.getElementById("Indicator");

            function register(){
                regform.style.transform = "translateX(0px)";
                loginform.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(100px)";
            }
            function login(){
                regform.style.transform = "translateX(300px)";
                loginform.style.transform = "translateX(300px)";
                Indicator.style.transform = "translateX(0px)";
            }
    </script>
</body>
</html>