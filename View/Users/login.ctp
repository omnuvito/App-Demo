<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo ('Login'); ?>
        </legend>
        <div class='border_form'>
        	<br />
	        <?php 
		        echo $this->Form->input('username');
		    ?>
		    <span class='required'> *</span>
		    <br />
		    <br />
		    <?php
		        echo $this->Form->input('password');
		    ?>
		    <span class='required'> *</span>
		    <?php echo $this->Form->end(__('Login')); ?>
		</div>
    </fieldset>
</div>