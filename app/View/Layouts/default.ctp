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
	<link rel="stylesheet" type="text/css" href="./css/font-awesome/css/font-awesome.css"/>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('style.css');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<script src="./js/jquery-3.1.0.min.js"></script>
	<script src="./js/common.js"></script>
</head>
<body>
	<header class="header">
		<?php echo $this->element('header'); ?>
	</header>
	<main class="main-content">
		<div class="content">
			<?php echo $this->fetch('content'); ?>
		</div>
		<div class="statement">
			<?php echo $this->element('statement'); ?>
		</div>
	</main>
	<footer class="footer">
		<?php echo $this->element('footer'); ?>
	</footer>
</body>
</html>
