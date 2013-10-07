<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo isset($title)? $title : "NOTITLE" ?></title>


	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/application/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/application/assets/css/app.css" />
    <?php foreach($extra_css as $var) { echo $var; } ?>
    <?php /* NOTE: Javascript is loaded at the end of the body, in tail_full.php */ ?>
</head>
<body>

<div class="container" style="margin-bottom: 5em;">

<div class="navbar" style="margin-top:1em;">
	<div class="navbar-inner">
		<a class="brand" href="<?php echo base_url(); ?>">Watershed App</a>
		<ul class="nav">
			<?php /* Main links */
				if(!isset($active)) $active = "home";
				$links = array(
					array("url" => base_url(), "text" => "Home", "id"=>"JoyrideStop1", "title" => "home"),
					array("url" => base_url()."learn", "text" => "Learn","id"=>"JoyrideStop2", "title" => "learn"),
                    array("url" => base_url()."organizations", "text" => "Organizations","id"=>"JoyrideStop3", "title" => "organizations"),
					array("url" => base_url()."report", "text" => "Report","id"=>"JoyrideStop3", "title" => "report"),
					array("url" => base_url()."about", "text" => "About","id"=>"JoyrideStop4", "title" => "about")
				);

				foreach($links as $link) {
					echo '<li' . ($active == $link['title']? ' class="active"' : '') . '>'
					   . '<a id="'.$link['id'].'" class="navbar-link" href="' . $link['url'] . '" title="' . $link['title'] . '">' . $link['text'] . '</a>'
					   . '</li>';
				}
			?>
		</ul>
		<ul class="nav pull-right">
			<li>
			<?php
				if($this->ion_auth->logged_in()) {
					echo '<a href="#">Logged in as ' . $this->ion_auth->user()->row()->first_name . '</a>';
				}
				else {
					echo '<a href="' . base_url() . 'auth/login">Not logged in</a>';
				}
			?>
			</li>
		</ul>
	</div>
</div>

<?php /* End header template */ ?>