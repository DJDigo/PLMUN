<?php echo $this->Session->Flash(); ?>
<div class="welcome-message" data-aos="fade-up" data-aos-duration="2000">
    <span class="welcome-text">Welcome To PLMUN</span>
    <span class="welcome-type"></span>
    <div class="welcome-message-button">
        <a href="../PLMUN/aboutus">About us</a>
    </div>
</div>

<script>
    var typed = new Typed('.welcome-type', {
        strings: ["FEEDBACK PORTAL", "IT'S NICE TO MEET YOU."],
        typeSpeed: 100,
        backSpeed: 100,
        backDelay: 1000,
        startDelay: 1500,
    });
    
    AOS.init({
        easing: 'ease-in-out-sine'
    });
</script>
