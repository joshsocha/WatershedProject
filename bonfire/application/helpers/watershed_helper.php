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
		Template::set('numpages', ceil(count($full) / $pageSize));
		Template::set('records', $records);
	}
}

//only gets approved records
if(!function_exists('paginate_approved')) {
    function paginate_approved($page, $model, $pageSize = 5) {
        $full    = $model->find_all_by('approved',1);

        if($page < 1) $page = 1;
        if($page > count($full)/$pageSize) {
            $page = ceil(count($full) / $pageSize);
        }

        $records = $model->limit($pageSize, ($page-1)*$pageSize)->find_all_by('approved',1);

        Template::set("curpage", $page);
        Template::set('numpages', ceil(count($full) / $pageSize));
        Template::set('records', $records);
    }
}

if(!function_exists('bbcode')) {
	// TODO: Use PHP's builtin bbcode_create, bbcode_addelement, and bbcode_parse instead!
	function bbcode($s) {
		// Complex replacements, such as parameterized codes
		$patterns = array(
			'/\[url=([^\s]*)\](.*)\[\/url\]/i', // [url=someurl]link text[/url]
		);
		$replacements = array(
			function($matches) {
				return '<a href="' . str_replace('%2F', '/', urlencode($matches[1])) . '">' . $matches[2] . '</a>';
			}
		);
		foreach($patterns as $i => $p) {
			$s = preg_replace_callback($p, $replacements[$i], $s, -1);
		}

		// Simpler searches, such as [b]
		$s = str_replace('[b]', '<b>', $s);
		$s = str_replace('[/b]', '</b>', $s);
		return $s;
	}
}