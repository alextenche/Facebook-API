<?php echo $this->Form->create('Job'); ?>

<fieldset>
	<?php echo $this->Form->input('title'); ?>
	<?php echo $this->Form->input('company_name'); ?>
	<?php echo $this->Form->input('category_id', array('type' => 'select', 'options' => $categories, 'empty' => 'select category')); ?>
	<?php echo $this->Form->input('type_id', array('type' => 'select', 'options' => $types, 'empty' => 'select type')); ?>
	<?php echo $this->Form->input('description'); ?>
	<?php echo $this->Form->input('city'); ?>
	<?php echo $this->Form->input('state'); ?>
	<?php echo $this->Form->input('contact_email'); ?>
	<?php echo $this->Form->end('add job'); ?>
</fieldset>
