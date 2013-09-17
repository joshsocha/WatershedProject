<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo isset($title)? $title : "NOTITLE" ?></title>


	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/application/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/application/assets/css/app.css" />
    <?php /* TODO: Load CSS files from $data['extra_css'] */ ?>
    <?php /* NOTE: Javascript is loaded at the end of the body, in tail_full.php */ ?>
</head>
<body>

<div class="container" style="margin-bottom: 5em;">

<div class="navbar" style="margin-top:1em;">
	<div class="navbar-inner">
		<a class="brand" href="<?php echo base_url(); ?>">Watershed App</a>
		<ul class="nav">
			<?php
				if(!isset($active)) $active = "home";
				$links = array(
					array("url" => base_url(), "text" => "Home", "title" => "home"),
					array("url" => base_url()."learn", "text" => "Learn", "title" => "learn"),
                    array("url" =>  base_url()."organizations", "text" => "Organizations", "title" => "organizations"),
					array("url" => base_url()."about", "text" => "About", "title" => "about")
				);

				foreach($links as $link) {
					echo '<li' . ($active == $link['title']? ' class="active"' : '') . '>'
					   . '<a class="navbar-link" href="' . $link['url'] . '" title="' . $link['title'] . '">' . $link['text'] . '</a>'
					   . '</li>';
				}
			?>
		</ul>
	</div>
</div>

<?php /* End header template */ ?>