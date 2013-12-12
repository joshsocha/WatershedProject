<?php echo form_open("/observation/search", array("method"=>"post", "class"=>"pull-right")); ?>
<!-- <form method="post" action="/observation/search" class="pull-right"> -->
	<div class="input-append">
		<input type="text" class="span-2" name="query" placeholder="Search..."
			<?php if(isset($query)) {echo 'value="' . $query . '"';} ?> />
		<button type="submit" class="btn" style="margin-left:-9px;">Search</button>
	</div>
</form>