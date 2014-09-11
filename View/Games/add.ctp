<div class="games form">
<?php echo $this->Form->create('Game'); ?>
	<fieldset>
		<legend><?php echo __('New Game'); ?></legend>
		<div class='border_form'>
			<?php
				echo $this->Form->input('game_name');
				echo $this->Form->input('Genre');
			?>
			<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</fieldset>
</div>