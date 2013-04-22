<?php
/**
 *
 * PHP 5
 *
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
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'GesLyA ');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<header>
			<?php echo $this->Html->image('bandeau.lycee.png', array('alt' => 'Le lycée Arrazi', 'border' => '0')); ?>
		</header>
		
		<div id="gauche">
			<?php if(AuthComponent::user('id')){ ?>
			 	<div id='profil_connecte'>
			 		<p>Bonjour <b><?php echo AuthComponent::user('username'); ?></b>,</p>
			 		<p>Vous &ecirc;tes connect&eacute;(e) en tant que : <?php echo AuthComponent::user('role'); ?></p>
			 	</div>
			 <?php } ?>
			 
			 <div id='cssmenu'>
				<ul>
   					<li class='active '><?php echo $this->Html->link('HOME','/');?></a></li>
					<?php if(!AuthComponent::user('id')){ ?>
						<li><?php echo $this->Html->link('Se connecter','/users/login');?></li>
					<?php } ?>
					<li><a href='#'><span>Le Lyc&eacute;e</span></a></li>
					<li><a href='#'><span>Nous contacter</span></a></li>
					<li><a href='#'><span>Actualit&eacute;s</span></a></li>
					<?php if(AuthComponent::user('id')){ ?>
						<li><?php echo $this->Html->link('Se deconnecter','/users/logout');?></li>
					<?php } ?>
				</ul>
			</div>
		</div>
		
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		
		<footer>
			<?php echo htmlentities("Suivi des lyceens")?> - Copyright 2013
		</footer>
		
	</div>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<?php echo $scripts_for_layout; ?>
	<?php if (class_exists('JsHelper') && method_exists($this->Js, 'writeBuffer')) echo $this->Js->writeBuffer();?>
	
</body>

	
</html>
