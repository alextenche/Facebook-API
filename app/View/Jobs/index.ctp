<?php echo $this->element('search'); ?>
<br>
<h3> latest job listings </h3>

	<ul id="listings">
		<?php foreach ($jobs as $job) : ?>
			<li class="first">
				<div class="type">
					<span style="background:<?php echo $job['Type']['color']?>"> <?php echo $job['Type']['name']; ?> </span>
				</div>
				<div class="description">
					<h5> <?php echo $job['Job']['title'] ;?> (<?php echo $job['Job']['city'] ;?>, <?php echo $job['Job']['state'] ;?>)</h5>
					<p><span id="list_date">
						<?php echo $this->Time->format('F jS h:i A', $job['Job']['created']); ?>
					</span></p>
					<?php echo $this->Text->truncate($job['Job']['description'], 250, array('ellipsis' => '...', 'exact' => 'false') ) ;?>
					<?php echo $this->Html->link('read more', array('controller'=>'jobs', 'action'=>'view', $job['Job']['id'])); ?>
					
				</div>
			</li>
		<?php endforeach; ?>
	</ul>