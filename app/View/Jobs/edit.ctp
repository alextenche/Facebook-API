<?php echo $this->Form->create('Job'); ?>

<fieldset>
	<legend><?php echo __('edit job listing'); ?></legend>
	<?php 
		echo $this->Form->input('title');
		echo $this->Form->input('company_name');
		echo $this->Form->input('category_id', array('type' => 'select', 'options' => $categories, 'empty' => 'select category'));
		echo $this->Form->input('type_id', array('type' => 'select', 'options' => $types, 'empty' => 'select type'));
		echo $this->Form->input('description');
		echo $this->Form->input('city');
		echo $this->Form->input('state');
		echo $this->Form->input('contact_email');
		echo $this->Form->input('id', array('type' => 'hidden'));
		echo $this->Form->end('edit job');
	?>
</fieldset>
