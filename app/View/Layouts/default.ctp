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
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<title>
		<?php echo 'Pamantasan ng Lungsod ng Muntinlupa'; ?>
	</title>
	<?php
		echo $this->Html->css('aos.css');
		echo $this->Html->css('new_style.css');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<link href="<?php echo $url ?>img/common/favicon.png" type="image/png" rel="icon"/>
	<script src="<?php echo $url ?>js/jquery-3.1.0.min.js"></script>
	<script src="<?php echo $url ?>js/typed.min.js"></script>
	<script src="<?php echo $url ?>js/aos.js"></script>
	<script src="<?php echo $url ?>js/common.js"></script>
</head>
<body>
	<?php echo $this->element('header'); ?>

	<main class="main-content">
		<?php echo $this->fetch('content'); ?>
	</main>

	<?php echo $this->element('footer'); ?>

</body>
</html>
