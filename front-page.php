<?php get_header(); ?>





<div class="background__landing">
    <img src="<?php echo get_field('section_landing')['background_image'];?>" alt="">
    <div class="overlay"></div>
</div>

<div class="container-fluid landing">

    <!-- Section landing -->
    <?php include get_template_directory() . '/sections/section__landing.php'; ?>
    
    <!-- Section events -->
    <?php include get_template_directory() . '/sections/section__events.php'; ?>


</div>


<!-- Section contest images -->
<!-- Section registration -->
<div class="container-fluid registration">
    <div class="row section">
        <?php if( get_field('section_registration')['left_column'] ): ?>
        <div class="col-12 col-md-6">
            <div class="wrapper__column-left">
                <?php echo get_field('section_registration')['left_column'] ?>
            </div>
        </div>
        <?php endif; ?>
        
        <div class="col-12 col-md-6 addEvent">
            <?php include get_template_directory() . '/sections/section__registration.php'; ?>
        </div>
    </div>
</div>



<!-- Section rules -->


<?php include get_template_directory() . '/sections/section__rules.php'; ?>



<?php get_footer(); ?>