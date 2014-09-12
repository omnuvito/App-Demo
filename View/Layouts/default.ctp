<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('cake_dev', 'A cakephp development');
?>
<!DOCTYPE html>
<html lang='es'>
	<head>
		<?php echo $this->Html->charset(); ?>

		<title>
			<?php echo $cakeDescription ?>:
			<?php echo $this->fetch('title'); ?>
		</title>

		<?php
			echo $this->Html->meta('icon');
			echo $this->Html->css('style');
			echo $this->Html->script('jquery-2.1.1', false);
			
			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
	</head>
	<body>
		<header>
			<div class='user_login'>
				<p class='menu_l'>
				<?php 
					if($this->Session->check('User.id') && $this->Session->read('User.id')!=null){
						echo $this->Html->link($this->Session->read('User.username'), array('controller'=>'users','action'=>'view',$this->Session->read('User.id')));?>
						&nbsp;&nbsp;&nbsp;
					<?php
						echo $this->Html->link('Logout', array('controller'=>'users', 'action'=>'logout'));
					?>&nbsp;&nbsp;&nbsp;<?php }else{
						echo $this->Html->link(('Login'), array('controller'=>'users', 'action' => 'login'));
					?>
						&nbsp;&nbsp;
					<?php
						echo $this->Html->link(('Register'), array('controller'=>'users', 'action' => 'add'));
					}
				?>&nbsp;&nbsp;&nbsp;


				 <?php  ?></p>		
			</div>
			<figure>
				<img src='<?php echo $this->webroot; ?>img/logo.svg' />
			</figure>
			<div class='header_title'>
				<h1>Simple Games</h1>
			</div>
			<nav>
				<div class='menu'>
					<ul>
						<li><?php echo $this->Html->link(('Home'), array('controller'=>'posts', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(('Genres Posts'), array('controller'=>'genres', 'action' => 'index')); ?></li>
					</ul>
				</div>
			</nav>
		</header>
		<section>
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</section>
		<footer>
			<div class='develop_by'>
				<h5>Developed by <a href="https://github.com/omnuvito">José Alejandro Álvarez</a></h5>
			</div>
		</footer>
		<?php echo $this->Js->writeBuffer(); ?>
	</body>
</html>