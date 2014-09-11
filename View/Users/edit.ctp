<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
		<div class='border_form'>
			<p><?php echo $this->Form->input('id'); ?></p><br>
			<p><?php echo $this->Form->input('name'); ?></p><br>
			<p><?php echo $this->Form->input('last_name'); ?></p><br>
			<p><?php echo $this->Form->input('username'); ?></p><br>
			<p><?php echo $this->Form->input('password'); ?></p><br>
			<p><?php echo $this->Form->input('email'); ?></p><br>
			<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</fieldset>
</div>