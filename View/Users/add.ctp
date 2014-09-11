<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Register User'); ?></legend>
		<div class='border_form'>
			
				<p><?php echo $this->Form->input('name');?><span class='required'> *</span></p>
				<br />
				<p><?php echo $this->Form->input('last_name');?><span class='required'> *</span></p>
				<br />
				<p><?php echo $this->Form->input('username');?><span class='required'> *</span></p>
				<br />
				<p><?php echo $this->Form->input('password');?><span class='required'> *</span></p>
				<br />
				<p><?php echo $this->Form->input('r_password', array('type'=>'password','label'=>'Re-enter your Password','value'=>'','autocomplete'=>'off','id'=>'ep'));?> <span class='required'> *</span> <span class='wp'></span></p>
				<br />
				<p><?php echo $this->Form->input('email');?><span class='required'> *</span></p>
				<br />
			
			<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</fieldset>
</div>