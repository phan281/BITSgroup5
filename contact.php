<!DOCTYPE html>
<html lang="en">
<?php include('head.php')?>   
<body>
<?php include('header.php')?>
<?php if (empty($_SESSION['username'])) {
  header("Location: account.php?account");
}?>

    <section id="about-header" >
        
        <h2>#Let'sTalk</h2>
        
        <p>Leave a message. We'd love to hear from you! </p>
        
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency location or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <p>702 Nguyen Van Linh District 7, Ho Chi Minh City</p>
                </li>
                <li>
                    <i class="fa-solid fa-envelope"></i>
                    <p>s3926005@rmit.edu.vn</p>
                </li>
                <li>
                    <i class="fas fa-phone"></i>
                    <p>0988729169</p>
                </li>
                <li>
                    <i class="fa-regular fa-clock"></i>
                    <p>Monday to Saturday from 8am to 5pm (GMT+7)</p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.0637442741995!2d106.6930756!3d10.729566999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fbea5fe3db1%3A0xfae94aca5709003f!2zxJDhuqFpIGjhu41jIFJNSVQgVmnhu4d0IE5hbSAtIGPGoSBz4bufIE5hbSBTw6BpIEfDsm4!5e0!3m2!1svi!2s!4v1672885065173!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    

    <?php include('footer.php')?>   



    <script src="script.js"></script>
</body>
</html>