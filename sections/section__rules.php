<div class="container-fluid rules">
    <div class="row section">
        <?php if( get_field('section_rules')['column1'] ): ?>
        <div class="col-12 col-md-4 p-0">
            <?php echo get_field('section_rules')['column1'] ?>
        </div>
        <?php endif; ?>
        <?php if( get_field('section_rules')['column2'] ): ?>
        <div class="col-12 col-md-4 middle p-0">
            <?php echo get_field('section_rules')['column2'] ?>
        </div>
        <?php endif; ?>
        <?php if( get_field('section_rules')['column3'] ): ?>
        <div class="col-12 col-md-4 p-0">
            <?php echo get_field('section_rules')['column3'] ?>
        </div>
        <?php endif; ?>
    </div>
</div>