<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo 'Pamantasan ng Lungsod ng Muntinlupa'; ?>
	</title>
	<?php
		echo $this->Html->css('aos.css');
		echo $this->Html->css('admin.css');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
    ?>
    <link href="../img/common/favicon.png" type="image/png" rel="icon"/>
	<?= $this->Html->css('../js/datatables/datatables.min.css') ?>
	<?= $this->Html->script('../js/jquery-3.1.0.min.js') ?>
	<?= $this->Html->script('../js/aos.js') ?>
	<?= $this->Html->script('../js/jquery.dataTables.min.js') ?>
	<?= $this->Html->script('../js/datatables/datatables.min.js') ?>
	<?= $this->Html->script('/js/chartjs.js') ?>
	<?= $this->Html->script('/js/chartjs-plugin-labels.min.js') ?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>
<body>
	<?php if ($this->Session->check('Auth.User')) :  ?>
		<header class="header">
			<?php echo $this->element('admin/header'); ?>
		</header>
		<aside class="sidebar">
			<?php echo $this->element('admin/sidebar'); ?>
		</aside>
		<main class="main-content">
			<div class="content">
				<?php echo $this->fetch('content'); ?>
			</div>
		</main>
	<?php else : ?>
		<?php echo $this->fetch('content'); ?>
	<?php endif; ?>
</body>
</html>
