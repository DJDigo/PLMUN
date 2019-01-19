<aside class="sidebar">
  <nav class="sidebar__menu">
    <ul>
      <li class="sidebar__list">
        <a href="../superadmin/index" class="sidebar__item sidebar__item--active">
          <i class="fa fa-home sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">Dashboard</span>
          <i class="fa fa-chevron-right sidebar__icon-right" aria-hidden="true"></i>
        </a>
      </li>
      <li class="sidebar__list">
        <a class="sidebar__item sidebar__item--js">
          <i class="fa fa-building sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">Department</span>
          <i class="fa fa-chevron-right sidebar__icon-right" aria-hidden="true"></i>
        </a>
        <ul class="sidebar__sub-list">
          <li class="sidebar__item-list">
            <a href="<?php echo $url.'/departments/citcs' ?>" class="sidebar__item">
              <i class="fa fa-circle sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">CITCS</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="<?php echo $url.'/departments/cas' ?>" class="sidebar__item">
              <i class="fa fa-circle sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">CAS</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="<?php echo $url.'/departments/cba' ?>" class="sidebar__item">
              <i class="fa fa-circle sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">CBA</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="<?php echo $url.'/departments/cte' ?>" class="sidebar__item">
              <i class="fa fa-circle sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">CTE</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="<?php echo $url.'/departments/ccj' ?>" class="sidebar__item">
              <i class="fa fa-circle sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">CCJ</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="<?php echo $url.'/departments/offices' ?>" class="sidebar__item">
              <i class="fa fa-circle sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">OFFICES</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="sidebar__list">
        <a href="../superadmin/reviews" class="sidebar__item">
          <i class="fa fa-book sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">Reviews <small>6</small></span>
          <i class="fa fa-chevron-right sidebar__icon-right" aria-hidden="true"></i>
        </a>
      </li>
    </ul>
  </nav>
</aside>

<script type="text/javascript">
  $('.sidebar__item--js').on('click', function() {
    $(this).next().slideToggle();
    $(this).toggleClass('sidebar__js');
    $('.sidebar__item--js').find('.sidebar__icon-right').removeClass('fa-chevron-down').addClass('fa-chevron-right');
    $('.sidebar__js').find('.sidebar__icon-right').removeClass('fa-chevron-right').addClass('fa-chevron-down')
  });
</script>
