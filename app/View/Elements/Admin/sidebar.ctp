<aside class="sidebar">
  <nav class="sidebar__menu">
    <ul>
      <li class="sidebar__list">
        <a href="../pages/index_admin" class="sidebar__item sidebar__item--active">
          <i class="fa fa-home sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">Dashboard</span>
          <i class="fa fa-chevron-right sidebar__icon-right" aria-hidden="true"></i>
        </a>
      </li>
      <li class="sidebar__list">
        <a class="sidebar__item sidebar__item--js">
          <i class="fa fa-building-o sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">CITCS <small>12</small></span>
          <i class="fa fa-chevron-right sidebar__icon-right"></i>
        </a>
        <ul class="sidebar__sub-list">
          <li class="sidebar__item-list">
            <a href="#" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">Dean <small>6</small></span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="#" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">Faculty<small>6</small></span>
            </a>
          </li>
        </ul>
      </li>
      <li class="sidebar__list">
        <a class="sidebar__item sidebar__item--js">
          <i class="fa fa-building-o sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">CAS<small>12</small></span>
          <i class="fa fa-chevron-right sidebar__icon-right"></i>
        </a>
        <ul class="sidebar__sub-list">
          <li class="sidebar__item-list">
            <a href="#" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">Dean <small>12</small></span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="#" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">Faculty</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="sidebar__list">
        <a class="sidebar__item sidebar__item--js">
          <i class="fa fa-building-o sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">CBA</span>
          <i class="fa fa-chevron-right sidebar__icon-right"></i>
        </a>
        <ul class="sidebar__sub-list">
          <li class="sidebar__item-list">
            <a href="#" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">Dean <small>12</small></span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="#" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">Faculty</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="sidebar__list">
        <a class="sidebar__item sidebar__item--js">
          <i class="fa fa-building-o sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">CTE</span>
          <i class="fa fa-chevron-right sidebar__icon-right"></i>
        </a>
        <ul class="sidebar__sub-list">
          <li class="sidebar__item-list">
            <a href="#" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">Dean</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="#" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">Faculty</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="sidebar__list">
        <a class="sidebar__item sidebar__item--js">
          <i class="fa fa-building-o sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">CCJ</span>
          <i class="fa fa-chevron-right sidebar__icon-right"></i>
        </a>
        <ul class="sidebar__sub-list">
          <li class="sidebar__item-list">
            <a href="#" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">Dean</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="#" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">Faculty</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="sidebar__list">
        <a class="sidebar__item sidebar__item--js">
          <i class="fa fa-building-o sidebar__icon" aria-hidden="true"></i>
          <span class="sidebar__link-text">OFFICES</span>
          <i class="fa fa-chevron-right sidebar__icon-right"></i>
        </a>
        <ul class="sidebar__sub-list">
          <li class="sidebar__item-list">
            <a href="#" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">Registrar</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="#" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">Treasury</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="#" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">Guidance</span>
            </a>
          </li>
          <li class="sidebar__item-list">
            <a href="#" class="sidebar__item">
              <i class="fa fa-circle-o sidebar__icon sidebar__icon--sub" aria-hidden="true"></i>
              <span class="sidebar__text">NSTP</span>
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
