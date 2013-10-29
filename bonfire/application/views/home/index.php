<div class="container">

	<div class="hero-unit">
        <div id="myCarousel" class="carousel slide">
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="active item">
                    <h1>Welcome to the Watershed Web App.</h1>

                    <p>Community based water monitoring</p>
                </div>
                <div class="item">
                    <img src="http://placehold.it/1200x480" alt="" />
                    <div class="carousel-caption">
                        <p>Lorem Ipsum</p>
                    </div>
                </div>
                <div class="item">
                    <img src="http://placehold.it/1200x480" alt="" />
                    <div class="carousel-caption">
                        <p>Lorem Ipsum</p>
                    </div>
                </div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
        </div>
	</div>

<?php if (isset($current_user->email)) : ?>

	<div class="alert alert-info" style="text-align: center">
		<?php echo anchor(SITE_AREA, "Dive into Bonfire's Springboard"); ?>
	</div>

<?php else :?>

	<p style="text-align: center">
		<?php echo anchor('/login', '<i class="icon-lock icon-white"></i> '. lang('bf_action_login'), ' class="btn btn-primary btn-large" '); ?>
	</p>

<?php endif;?>



</div>
<script type="text/javascript">
    $('.carousel').carousel()
</script>