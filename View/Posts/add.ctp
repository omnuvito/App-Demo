<div class="posts form">
<?php echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend><?php echo ('New Post'); ?></legend>
		<div class='border_form'>
			<p><?php echo $this->Form->input('user_id', array('hidden'=>true, 'label'=>array('hidden'=>true)));?></p>
			<p><?php echo $this->Form->input('genre_id');?><span class='required'> *</span></p>
		    <br />
		    <p><?php echo $this->Form->input('post_name');?><span class='required'> *</span></p>
		    <br />
		    <p><?php echo $this->Form->input('post_content');?><span class='required'> *</span></p>
		    <br />
		    <p><?php echo $this->Form->input('created_at', array('hidden'=>true, 'label'=>array('hidden'=>true)));?></p>
			<?php echo $this->Form->end(__('Submit')); ?>
		</div>	
	</fieldset>
</div>