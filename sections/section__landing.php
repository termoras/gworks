<div class="row section">
        <div class="col">
            <div class="row wrapper__column-left">
                <div class="col-12 p-0">
                    <?php if( get_field('section_landing')['title'] ): ?>
                    <h1 class="title-main"><?php echo get_field('section_landing')['title']; ?></h1>
                    <?php endif; ?>
                </div>
                <div class="col-12 landing__content mt-5">
                    <?php if( get_field('section_landing')['content'] ): ?>
                    <?php echo get_field('section_landing')['content']; ?>
                    <?php endif; ?>
                </div>
                <div class="col-12 mt-5">
                    <button class="button__cta">
                        <?php if( get_field('section_landing')['cta_text'] ): ?>
                        <?php echo get_field('section_landing')['cta_text']; ?>
                        <?php endif; ?>
                    </button>
                </div>
            </div>
        </div>

        <div class="landing__image">
            <?php if( get_field('section_landing')['background_image'] ): ?>
            <img src="<?php echo get_field('section_landing')['background_image']; ?>" alt="">
            <?php endif; ?>
        </div>
    </div>

<script>

jQuery(".button__cta").click(function() {
    jQuery([document.documentElement, document.body]).animate({
        scrollTop: jQuery(".registration").offset().top -100
    }, 500);
});


</script>