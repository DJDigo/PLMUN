<header class="header">
  <div class="header__content">
    <div class="header__company-name">
      <h1>
          <img src="../../img/common/plmun-logo.png" alt="plmun logo">
      </h1>
    </div>
    <div class="header__control">
      <?php 
        echo $this->Html->link($this->Html->tag('span',__('Welcome Admin!')),
          ['controller' => 'superadmin', 'action' => '/index'], 
          ['class' => 'header__control-link','escape' => false]
        ); 
      ?>
      <?php 
        echo $this->Html->link($this->Html->tag('span',__('Logout')),
          ['controller' => 'superadmin', 'action' => 'logout'], 
          ['class' => 'header__control-link','escape' => false]
        ); 
      ?>
    </div>
  </div>
</header>
