<div class="welcome-message">
    <span class="welcome-text">Welcome To PLMUN</span>
    <span class="welcome-type"></span>
    <div class="welcome-message-button">
        <a href="../PLMUN/about-us">About us</a>
    </div>
</div>

<script>
    $('.nav-item-text').on('mouseover', function() {
        $('.nav-tooltip, .arrow').fadeOut(300);
        $(this).parent().find('.nav-tooltip').fadeIn(300);
        $(this).parent().find('.arrow').fadeIn(300);
    });

    $(document).mouseup(function(e) {
        var container = $(".nav-tooltip");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.nav-tooltip, .arrow').fadeOut(300);
        }
    });
    
    var typed = new Typed('.welcome-type', {
        strings: ["FEEDBACK PORTAL", "IT'S NICE TO MEET YOU."],
        typeSpeed: 100,
        backSpeed: 100,
        backDelay: 1000,
        startDelay: 800,
    });
</script>