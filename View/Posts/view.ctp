<div class="posts view">
	<section>
		<div class='title_line'>
			<h2><?php echo h($post['Post']['post_name']); ?></h2>
		</div>
		<div class='profile_content'>
			<?php echo $post['Post']['post_content']; ?>
		</div>
		<div class='user_login menu_l'>
			<?php 
				if(CakeSession::read('User.id')!=null){
					echo $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['id'])); ?>&nbsp;&nbsp;<?php
					echo $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['id']), array(), __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>&nbsp;&nbsp;<?php 
				}else{?>
					<br />
				<?php }
			?>
		</div>
		<br>
	</section>
</div>