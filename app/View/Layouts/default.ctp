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
				<li class="current"><a href="<?php echo $this->webroot;?>"><i class="fa fa-home"></i> home </a></li>
				<li><a href="<?php echo $this->webroot;?>jobs/browse"><i class="fa fa-desktop"></i> browse jobs </a></li>
				<li><a href="<?php echo $this->webroot;?>users/register"><i class="fa fa-user"></i> register </a></li>
				<li><a href="<?php echo $this->webroot;?>users/login"><i class="fa fa-key"></i> login </a></li>
			</ul>
		</div>

		<div id="search_area" class="col_12 column">
			<form class="horizontal" method="post" action="">
				<input id="keywords" type="text" placeholder="Enter keywords...">
				<select id="select_state">
					<option> select state </option>
				</select>
				<select id="select_category">
					<option> select category </option>
				</select>
				<button type="submit"> sumbit </button>
			</form>
		</div>

		<div class="col_12 column">
			<h3> latest job listings </h3>
			<ul id="listings">
				<li class="first">
					<div class="type">
						<span class="green"> full time </span>
					</div>
					<div class="description">
						<h5> senior grapich designer (burlinghton, MA) </h5>
						lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsum lorem ipsum
						 lorem ipsum lorem ipsum lorem ipsumlorem lorem ipsum <a href="details.html"><i class="fa fa-plus"></i> read more </a>
					</div>
				</li>
				<li>
					<div class="type">
						<span class="blue"> part time </span>
					</div>
					<div class="description">
						<h5> senior grapich designer (burlinghton, MA) </h5>
						lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsum lorem ipsum
						 lorem ipsum lorem ipsum lorem ipsumlorem lorem ipsum <a href="details.html"><i class="fa fa-plus"></i> read more </a>
					</div>
				</li>
				<li>
					<div class="type">
						<span class="green"> full time </span>
					</div>
					<div class="description">
						<h5> senior grapich designer (burlinghton, MA) </h5>
						lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsum lorem ipsum
						 lorem ipsum lorem ipsum lorem ipsumlorem lorem ipsum <a href="details.html"><i class="fa fa-plus"></i> read more </a>
					</div>
				</li>
			</ul>
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
