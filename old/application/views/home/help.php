<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/application/assets/css/bootstrap-tour.css" />

<script type="text/javascript" src="<?php echo base_url(); ?>/application/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/application/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/application/assets/js/bootstrap-tour.min.js" ></script>

<h1 class="muted">Help</h1>
<hr />

<h2>
    FAQs
</h2>
<div class="row">
    <div class="span12">
        <h5>Q1. How can I learn how to use this site?</h5>
        <p><a id="lnkSiteTour" class="btn btn-primary" href="#">Take A site Tour</a></p>

        <h5>Q2. Lorem Ipsum? </h5>
        <p>
            Lorem ipsum dolor sit amet, nulla bonorum ei eum, tritani quaestio nec an. In delectus complectitur mea,
            at labore graecis vim. Sea duis noluisse cu. Ea volumus persequeris cum. Mea an amet verear accusata,
            his an vocent conclusionemque
        .</p>
    </div>
</div>

<script type="text/javascript">

    $(document).ready(function(){
        $("#lnkSiteTour").click(function(event){
            var tour = new Tour();
            tour.addSteps([
                {
                    element: "#JoyrideStop1", // string (jQuery selector) - html element next to which the step popover should be shown
                    title: "Home Page", // string - title of the popover
                    content: "Checkout the home page to see news and recent events" // string - content of the popover
                },
                {
                    element: "#JoyrideStop2",
                    title: "Learn",
                    content: "Click on learn to learn more about watersheds and related issues"
                },
                {
                    element: "#JoyrideStop3",
                    title: "Organizations",
                    content: "View Organizations involved in reporting and fixing watershed issues"
                }
            ]);
            tour.start();
        });
    });

</script>

