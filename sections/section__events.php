<div class="section">
    <h1 class="text-center  ">Kilpailun kuvat otsikko</h1>
    <h6 class="text-center subtitle">Aikaa osallistua ja äänestää 1.2.2020 asti</h6>

    <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="events">
        <input type="hidden" name="action" value="myfilter">
    </form>
    <div class="swiper-container">

        <div id="response" class="events swiper-wrapper"></div>

        <div class="swiper-pagination"></div>
    </div>
</div>


<script>
function swipeIt() {
    var swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            direction: 'horizontal',
            slidesPerView: 4,
            renderBullet: function(index, className) {
                return '<span class="' + className + '">' + (index + 1) + '</span>';
            },
        },
    });
}

jQuery(document).ready(function() {
    submit();
});



function submit() {
    var filter = jQuery('#events');
    jQuery.ajax({
        url: filter.attr('action'),
        data: filter.serialize(), // form data
        type: filter.attr('method'), // POST

        success: function(data) {
            jQuery('#response').html(data); // insert data
        },
        complete: function(data) {
            swipeIt();
        }
    });
    return false;



}
</script>