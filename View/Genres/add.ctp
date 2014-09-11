<div class="genres form">
<?php echo $this->Form->create('Genre'); ?>
	<fieldset>
		<legend><?php echo __('Add Genre'); ?></legend>
		<div class='border_form'>
			<?php
				echo $this->Form->input('genres_name');
			?>
			<?php echo $this->Form->end(__('Create')); ?>
		</div>
	</fieldset>
			
</div>