// Tämä ei varsinaisesti liity viimeiseen "tuotteeseen"
// Tällä lisättiin REST API:n kautta kilpailu mutta kaatu siihen että en saanut kuvaa mukaan.

jQuery( document ).ready( function ( $ ) {

    var fd = new FormData();
    fd.append( "main_image", $('#main_image')[0].files[0]);

    $( '#post-submission-form' ).on( 'submit', function(e) {
        e.preventDefault();
        var title = $( '#post-submission-title' ).val();
        var content = $( '#post-submission-email' ).val();
        var status = 'publish';
        var image = $( '#post-submission-file' ).val();
        
 
        var data = {
            title: title,
            content: content,
            status: status,
            featured_media: image

        };
 
        $.ajax({
            method: "POST",
            url: POST_SUBMITTER.root + 'wp/v2/events',
            data: data,
            beforeSend: function ( xhr ) {
                xhr.setRequestHeader( 'X-WP-Nonce', POST_SUBMITTER.nonce );
            },
            success : function( response ) {
                console.log( response['id'] );
                alert( POST_SUBMITTER.success );
            },
            fail : function( response ) {
                console.log( response );
                alert( POST_SUBMITTER.failure );
            }
 
        });
 
    });
 
} );
