<div class="pagination" style="width:100%;text-align:center;">
	<ul>
		<?php
		// Previous
		echo '<li'.($curpage == 1? ' class="disabled"' : '').'>';
		echo '  <a href="'.max($curpage-1,1).'"">&laquo;</a></li>';

		// Show no more than 7 page links
		$initial = max(1, $curpage-3);
		$limit   = min($numpages+1, $initial+7);
		for($i = $initial; $i < $limit; $i++) {
			echo '<li'.($i==$curpage?' class="active"':'').'><a href="'.$i.'">'.$i.'</a></li>';
		}

		// Next
		echo '<li'.($curpage >= $numpages? ' class="disabled"' : '').'>';
		echo '  <a href="'.min($curpage+1,$numpages).'"">&raquo;</a></li>';
		?>
	</ul>
</div>