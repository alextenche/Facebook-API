<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('kickstart');
		echo $this->Html->css('style');

		echo $this->Html->script('jquery');
		echo $this->Html->script('kickstart');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container" class="grid">
		<header>
			<div class="col_6 column">
				<h1><a href="<?php echo $this->webroot; ?>"><strong>jobs</strong>Board</a></h1>	
			</div>
			<div class="col_6 column right">
				<form id="add_job_link" action="<?php echo $this->webroot;?>jobs/add">
				<button class="large green"><i class="fa fa-plus"></i> add job </button>
				</form>
			</div>
		</header>

		<div class="col_12 column">
			<!-- Menu Horizontal -->
			<ul class="menu">
				<li <?php echo ($this->here == '/jobsBoard/' || $this->here == '/jobsBoard/jobs') ? 'class="current"' : ''; ?> >
					<a href="<?php echo $this->webroot;?>"><i class="fa fa-home"></i> home </a></li>
				<li <?php echo ($this->here == '/jobsBoard/jobs/browse') ? 'class="current"' : '' ?> >
					<a href="<?php echo $this->webroot;?>jobs/browse"><i class="fa fa-desktop"></i> browse jobs </a></li>
				<li <?php echo ($this->here == '/jobsBoard/users/register') ? 'class="current"' : '' ?> >
					<a href="<?php echo $this->webroot;?>users/register"><i class="fa fa-user"></i> register </a></li>
				<li <?php echo ($this->here == '/jobsBoard/users/login') ? 'class="current"' : '' ?> >
					<a href="<?php echo $this->webroot;?>users/login"><i class="fa fa-key"></i> login </a></li>
			</ul>
		</div>

		

		<div class="col_12 column">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>

		<div class="clearfix"></div>

		<footer>
        <a href="https://github.com/alextenche"><i class="fa fa-github-square fa-2x"></i></a>&nbsp;
        <a href="https://twitter.com/alexTenche"><i class="fa fa-twitter-square fa-2x"></i></a>&nbsp;
        <a id="alex" href="http://alextenche.jolinar.org"> 2015 alexTenche </a>
	</footer>




	</div> <!-- End Grid -->
</body>
</html>
