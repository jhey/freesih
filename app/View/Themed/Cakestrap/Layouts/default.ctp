<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_desc', 'FREEish: give stuff away to those in need.');
?>
<?php echo $this->Html->docType('html5'); ?> 
<html>
<?php echo $this->Facebook->html(); ?>
<head>
<!--

__/\\\\\\\\\\\\\\\____/\\\\\\\\\______/\\\\\\\\\\\\\\\__/\\\\\\\\\\\\\\\__/\\\\\\\\\\\_____/\\\\\\\\\\\____/\\\________/\\\_        
 _\/\\\///////////___/\\\///////\\\___\/\\\///////////__\/\\\///////////__\/////\\\///____/\\\/////////\\\_\/\\\_______\/\\\_       
  _\/\\\_____________\/\\\_____\/\\\___\/\\\_____________\/\\\_________________\/\\\______\//\\\______\///__\/\\\_______\/\\\_      
   _\/\\\\\\\\\\\_____\/\\\\\\\\\\\/____\/\\\\\\\\\\\_____\/\\\\\\\\\\\_________\/\\\_______\////\\\_________\/\\\\\\\\\\\\\\\_     
    _\/\\\///////______\/\\\//////\\\____\/\\\///////______\/\\\///////__________\/\\\__________\////\\\______\/\\\/////////\\\_    
     _\/\\\_____________\/\\\____\//\\\___\/\\\_____________\/\\\_________________\/\\\_____________\////\\\___\/\\\_______\/\\\_   
      _\/\\\_____________\/\\\_____\//\\\__\/\\\_____________\/\\\_________________\/\\\______/\\\______\//\\\__\/\\\_______\/\\\_  
       _\/\\\_____________\/\\\______\//\\\_\/\\\\\\\\\\\\\\\_\/\\\\\\\\\\\\\\\__/\\\\\\\\\\\_\///\\\\\\\\\\\/___\/\\\_______\/\\\_ 
        _\///______________\///________\///__\///////////////__\///////////////__\///////////____\///////////_____\///________\///__

==== © julior @ gmail.com  ====
https://github.com/jhey/freesih

-->
<?php echo $this->Html->charset(); ?>
<title>
<?php echo $cakeDescription ?>:
<?php echo $title_for_layout; ?>
</title>
<?php
//echo $this->Html->meta('icon');
echo $this->Html->meta(
	'favicon.ico',
	'/favicon.ico',
	array('type' => 'icon')
);
echo $this->fetch('meta');
echo $this->Html->css('bootstrap.min');		
echo $this->Html->css('main');
echo $this->fetch('css');
echo $this->Html->script('libs/jquery-1.10.2.min');
echo $this->Html->script('libs/bootstrap.min');
echo $this->fetch('script');
echo $this->Html->script('custom');
?>
</head>
<body>
	<div id="main-container">
		
			<div id="header" class="container">
				<?php echo $this->element('menu/top_menu'); ?>
			</div>
		
			<div id="content" class="container appbody">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</div>
			
			<div id="footer" class="container">
				<hr>
				<div class="container">© 2014 julior@gmail.com - All Rights Reserved</div>
				<br>
				<br>
			</div>
		
	</div>
</body>
<?php echo $this->Facebook->init(); ?>
</html>