<div id="search_area" class="col_12 column">
	<form class="horizontal" method="post" action="<?php echo $this->webroot;?>jobs/browse">
		<input name="keywords" id="keywords" type="text" placeholder="Enter keywords...">
		<select name="states" id="select_state">
			<option> select state </option>
			<option value="TM"> Timis </option>
			<option value="AR"> Arad </option>
			<option value="CS"> Caras Severin </option>
			<option value="MH"> Mehedinti </option>
		</select>
		<select name="categories" id="select_category">
			<option> select category </option>
			<?php foreach($categories as $category) : ?>
				<option value="<?php echo $category['Category']['id']; ?>"><?php echo $category['Category']['name']; ?></option>
			<?php endforeach; ?>
		</select>
		<button type="submit"> sumbit </button>
	</form>
</div>