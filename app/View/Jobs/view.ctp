
<h3> <?php echo $job['Job']['title'];?> </h3>

<ul>
	<li><strong> location: </strong> <?php echo $job['Job']['city'];?>, <?php echo $job['Job']['state'];?> </li>
	<li><strong> job type: </strong> <?php echo $job['Type']['name'];?> </li>
	<li><strong> description: </strong> <p> <?php echo $job['Job']['description'];?> </p></li>
	<li><strong> contact email: </strong><a href="#"> <?php echo $job['Job']['contact_email'];?> </a></li>
</ul>
<p><a href="<?php echo $this->webroot;?>jobs/browse"> back to jobs </a></p>
<br><br>
<?php echo $this->Html->link('edit', array('action' => 'edit', $job['Job']['id'])); ?> |
<?php echo $this->Form->postLink('delete', array('action' => 'delete', $job['Job']['id']), array('confirm' => 'are you sure ?')); ?>