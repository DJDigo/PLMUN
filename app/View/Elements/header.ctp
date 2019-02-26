<!-- <div class="header-content">
    <div class="header-logo">
        <a href="">
            <img src="./img/common/plmun-logo.png" alt="logo">
        </a>
    </div>
    <div class="header-side">
        <div class="header-school-year">
            <span class="header-year-title">SCHOOL YEAR</span>
            <span class="header-year">S.Y. 2017-2018</span>
        </div>
        <div class="header-contact-us">
            <span class="header-contact-title">CONTACT US</span>
            <span class="header-contact">Tel: 478-3585</span>
        </div>
    </div>
</div>
<nav class="navigation">
    <ul class="navigation-list">
        <li class="navigation-item">
            <div class="navigation-item-course" data-category="citcs">
                <span>CITCS</span>
            </div>
            <div class="navigation-toggle">
                <div class="navigation-link" data-category="citcs-faculty">Faculty</div>
                <div class="navigation-link" data-category="citcs-dean">Dean</div>
            </div>
        </li>
        <li class="navigation-item">
            <div class="navigation-item-course" data-category="cas">
                <span>CAS</span>
            </div>
            <div class="navigation-toggle">
                <div class="navigation-link" data-category="cas-faculty">Faculty</div>
                <div class="navigation-link" data-category="cas-dean">Dean</div>
            </div>
        </li>
        <li class="navigation-item">
            <div class="navigation-item-course" data-category="cba">
                <span>CBA<span>
            </div>
            <div class="navigation-toggle">
                <div class="navigation-link" data-category="cba-faculty">Faculty</div>
                <div class="navigation-link" data-category="cba-dean">Dean</div>
            </div>
        </li>
        <li class="navigation-item">
            <div class="navigation-item-course" data-category="cte">
                <span>CTE</span>
            </div>
            <div class="navigation-toggle">
                <div class="navigation-link" data-category="cte-faculty">Faculty</div>
                <div class="navigation-link" data-category="cte-dean">Dean</div>
            </div>
        </li>
        <li class="navigation-item">
            <div class="navigation-item-course" data-category="ccj">
                <span>CCJ</span>
            </div>
            <div class="navigation-toggle">
                <div class="navigation-link" data-category="ccj-faculty">Faculty</div>
                <div class="navigation-link" data-category="ccj-dean">Dean</div>
            </div>
        </li>
        <li class="navigation-item">
            <div class="navigation-item-course" data-category="offices">
                <span>OFFICES</span>
            </div>
            <div class="navigation-toggle">
                <div class="navigation-link" data-category="offices-registrar">Registrar</div>
                <div class="navigation-link" data-category="offices-treasury">Treasury</div>
                <div class="navigation-link" data-category="offices-guidance">Guidance</div>
                <div class="navigation-link" data-category="offices-nstp">NSTP</div>
            </div>
        </li>
    </ul>
</nav> -->

<!-- NEW HEADER -->
<header>
    <a href="<?php echo $url ?>" class="logo">
        <h1>
            <img src="<?php echo $url ?>img/common/plmun-logo.png">
        </h1>
    </a>
    <nav>
        <div class="menu-container" onclick="myFunction(this)">
            <span class="menu1"></span>
            <span class="menu2"></span>
            <span class="menu3"></span>
        </div>
        <ul>
            <li class="nav-item">
            <?php if((empty($this->Session->read('feedback_id')) && empty($this->Session->read('offices_id'))) || $this->Session->read('feedback_id') == 1): ?>
                <span class="nav-item-text">CITCS</span>
                <span class="arrow"></span>
                <div class="nav-tooltip">
                    <a href="<?php echo $url ?>feedbacks/dean/1"> DEAN </a>
                    <a href="<?php echo $url ?>feedbacks/faculty/1"> FACULTY </a>
                </div>
            <?php endif; ?>
            </li>
            <li class="nav-item">
            <?php if((empty($this->Session->read('feedback_id')) && empty($this->Session->read('offices_id'))) || $this->Session->read('feedback_id') == 2): ?>
                <span class="nav-item-text">CAS</span>
                <span class="arrow"></span>
                <div class="nav-tooltip">
                    <a href="<?php echo $url ?>feedbacks/dean/2"> DEAN </a>
                    <a href="<?php echo $url ?>feedbacks/faculty/2"> FACULTY </a>
                </div>
            <?php endif; ?>
            </li>
            <li class="nav-item">
            <?php if((empty($this->Session->read('feedback_id')) && empty($this->Session->read('offices_id'))) || $this->Session->read('feedback_id') == 3): ?>
                <span class="nav-item-text">CBA</span>
                <span class="arrow"></span>
                <div class="nav-tooltip">
                    <a href="<?php echo $url ?>feedbacks/dean/3"> DEAN </a>
                    <a href="<?php echo $url ?>feedbacks/faculty/3"> FACULTY </a>
                </div>
            <?php endif; ?>
            </li>
            <li class="nav-item">
            <?php if((empty($this->Session->read('feedback_id')) && empty($this->Session->read('offices_id'))) || $this->Session->read('feedback_id') == 4): ?>
                <span class="nav-item-text">CTE</span>
                <span class="arrow"></span>
                <div class="nav-tooltip">
                    <a href="<?php echo $url ?>feedbacks/dean/4"> DEAN </a>
                    <a href="<?php echo $url ?>feedbacks/faculty/4"> FACULTY </a>
                </div>
            <?php endif; ?>
            </li>
            <li class="nav-item">
            <?php if((empty($this->Session->read('feedback_id')) && empty($this->Session->read('offices_id'))) || $this->Session->read('feedback_id') == 5): ?>
                <span class="nav-item-text">CCJ</span>
                <span class="arrow"></span>
                <div class="nav-tooltip">
                    <a href="<?php echo $url ?>feedbacks/dean/5"> DEAN </a>
                    <a href="<?php echo $url ?>feedbacks/faculty/5"> FACULTY </a>
                </div>
            <?php endif; ?>
            </li>
            <li class="nav-item">
            <?php if((empty($this->Session->read('feedback_id')) && empty($this->Session->read('offices_id'))) || $this->Session->check('offices_id')): ?>
                <span class="nav-item-text">OFFICES</span>
                <span class="arrow"></span>
                <div class="nav-tooltip">
                    <a href="<?php echo $url ?>feedbacks/registrar/1"> Registrar </a>
                    <a href="<?php echo $url ?>feedbacks/treasury/1"> Treasury </a>
                    <a href="<?php echo $url ?>feedbacks/guidance/1"> Guidance </a>
                    <a href="<?php echo $url ?>feedbacks/nstp/1"> NSTP </a>
                </div>
            <?php endif; ?>
            </li>
        </ul>
    </nav>
</header>

<script>
    if ( $(window).width() > 767 ) {
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
    } else {
        $('.nav-item-text').on('click', function() {
            $('.nav-tooltip').hide();
            $(this).parent().find('.nav-tooltip').slideToggle();
        });
        $(document).mouseup(function(e) {
            var container = $("nav ul");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                $('.menu-container').removeClass('change');
            }
        });
    }

    function myFunction(x) {
        x.classList.toggle("change");
    } 
</script>