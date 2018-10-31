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
        echo $this->Html->css('font-awesome-4.7.0/css/font-awesome.min.css');
		echo $this->Html->css('admin.css');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
    ?>
	<!-- <link rel="stylesheet" type="text/css" href="/app/webroot/css/font-awesome-4.7.0/css/font-awesome.min.css"> -->
    <link href="../img/common/favicon.png" type="image/png" rel="icon"/>
	<?= $this->Html->css('../js/datatables/datatables.min.css') ?>
	<script src="../js/jquery-3.1.0.min.js"></script>
	<?= $this->Html->script('../js/jquery.dataTables.min.js') ?>
	<?= $this->Html->script('../js/datatables/datatables.min.js') ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
</head>
<body>
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
</body>
</html>
