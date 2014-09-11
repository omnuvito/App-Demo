<div class="users view">
	<section>
		<div>
			<h2> Welcome <?php echo($user['User']['username']) ?></h2>
		</div>
		<div class='user_login menu_l'>
			<?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', CakeSession::read('User.id'))); ?>&nbsp;&nbsp; 
			<?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', CakeSession::read('User.id')), array(), __('Are you sure you want to delete # %s?', CakeSession::read('User.username'))); ?>&nbsp;&nbsp;
		</div>
		<div class="profile_content">
			<p>Name: <?php echo CakeSession::read('User.name'); ?> <?php echo CakeSession::read('User.last_name'); ?></p>
			<p>email: <?php echo CakeSession::read('User.email'); ?></p>
		</div>
		
		<div>
			<h3><?php echo ('Profile'); ?></h3>
		</div>
		<div class='user_login menu_l'>
			<?php echo $this->Html->link(__('Edit Profile'), array('controller' => 'profiles', 'action' => 'edit', $user['Profile']['id'])); ?>&nbsp;&nbsp;
		</div>
		<?php if (!empty($user['Profile'])): ?>
			<div class='profile_content'>
				<p>Address: <?php echo $user['Profile']['address']; ?></p>
				<p>Web page: <?php echo $user['Profile']['web_page']; ?></p>
			</div>
		<?php endif; ?>

		<div class="title_line">
			<h3><?php echo ('Your Posts'); ?></h3>
		</div>
		<div class='user_login menu_l'>
		<?php echo $this->Html->link('Create a post', array('controller'=>'posts','action'=>'add')); ?>&nbsp;&nbsp;</div>
		<div class='profile_content'>
		<?php foreach ($user['Post'] as $post): ?>
			<p><?php echo $this->Html->link( $post['post_name'] , array('controller' => 'posts', 'action' => 'view', $post['id'])); ?></p>
		<?php endforeach; ?>
		</div>

		<h3><?php echo ('Games that you like'); ?></h3>
		<div class='user_login menu_l'>
			<?php echo $this->Html->link('Add a game', array('controller'=>'users','action'=>'edit',CakeSession::read('User.id'))); ?>&nbsp;&nbsp;
		</div>
		<div class='profile_content'>
			<?php if (!empty($user['Game'])): ?>
				<?php foreach ($user['Game'] as $game): ?>
					<p><?php echo $game['game_name']; ?></p>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
		<br>
	</section>
</div>
