<section>
	<div class="genres index">
		<h2><?php echo 'Genres'; ?></h2>
	</div>
	<div class='user_login menu_l'>
		<?php 
			if(CakeSession::read('User.id')!=null){
				echo $this->Html->link('Add new genre', array('action'=>'add'));
			}
		?>&nbsp;&nbsp;
	</div>
	<div class="profile_content">
		<?php foreach ($genres as $genre): ?>
			<p><?php echo $this->Html->link($genre['Genre']['genres_name'],array('action' => 'view', $genre['Genre']['id'])); ?></p>
		<?php endforeach; ?>
	</div>
	<br />
</section>