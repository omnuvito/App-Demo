<div class='posts form'>
	<?php echo $this->Form->create('Post'); ?>
		<fieldset>
			<legend><?php echo __('Edit Post'); ?></legend>
			<div class='border_form'>
				<p><?php echo $this->Form->input('id'); ?></p><br>
				<p><?php echo $this->Form->input('user_id'); ?></p><br>
				<p><?php echo $this->Form->input('genre_id'); ?></p><br>
				<p><?php echo $this->Form->input('post_name'); ?></p><br>
				<p><?php echo $this->Form->input('post_content'); ?></p><br>
				<p><?php echo $this->Form->input('created_at'); ?></p>
				<?php echo $this->Form->end(__('Edit post')); ?>
			</div>
		</fieldset>
</div>