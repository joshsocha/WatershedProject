<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('paginate')) {
	function paginate($page, $model, $pageSize = 5) {
		$full    = $model->find_all();

		if($page < 1) $page = 1;
		if($page > count($full)/$pageSize) {
			$page = ceil(count($full) / $pageSize);
		}

		$records = $model->limit($pageSize, ($page-1)*$pageSize)->find_all();

		Template::set("curpage", $page);
		Template::set('numpages', count($full) / $pageSize);
		Template::set('records', $records);
	}
}