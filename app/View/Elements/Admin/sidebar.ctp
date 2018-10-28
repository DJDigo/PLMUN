<aside class="sidebar">
  <nav class="sidebar__menu">
    <ul>
      <li class="sidebar__list">
        <a href="/admin/index_admin" class="sidebar__item sidebar__item--active">
          <i class="fa fa-home sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">Dashboard</span>
          <i class="fa fa-chevron-right sidebar__icon-right" aria-hidden="true"></i>
        </a>
      </li>
      <li class="sidebar__list">
        <a class="sidebar__item sidebar__item--js">
          <i class="fa fa-users sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">Departments Feedback</span>
          <i class="fa fa-chevron-right sidebar__icon-right"></i>
        </a>
        <ul class="sidebar__sub-list">
          <li class="sidebar__item-list">
            <a href="#" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">CITCS</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="#" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">CSC</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="#" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">CBA</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="#" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">CTE</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="#" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">CCJ</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="#" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">OFFICES</span>
            </a>
          </li>
        </ul>
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
