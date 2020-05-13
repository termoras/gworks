

<?php
// Lähetettiinkö lomake, tosimaailmassa kentät validatettaisiin mutta harjoituksen
// kannalta skippaan tämän.
if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] )) {

    $title =  $_POST['title']; 
    $username =  $_POST['username']; 
    $email = $_POST['email']; 
    
    // "Postin" tiedot
    $post = array(
        'post_title'    => $title,
        'post_content'  => $username,
        'post_status'   => 'publish', // Heti näkyviin
        'post_type'     => 'events'  // Kyseessä on custom post type
    );
    
   $pid = wp_insert_post($post);  // Syötetään tavara tietokantaan




    if ($_FILES) {
        array_reverse($_FILES);
        $i = 0;
            foreach ($_FILES as $file => $array) {
                if ($i == 0) $set_feature = 1; //Ensimmäinen
                else $set_feature = 0; //Skipataan ensimmäinen
                if($i < 1) {
                    $newupload = insert_attachment($file,$pid, $set_feature);
                }
        }
    }

    // Save a basic text value.
    $field_key = "field_5ebb1fcba1b1c";
    $value = $email;
    update_field( $field_key, $value, $pid );
}


?>


<form action="" method="post" enctype="multipart/form-data">
    <p><label for="title">Kuvan otsikko *</label><br />
        <input type="text" id="title" value="" tabindex="1" size="20" name="title" required />
    </p>
    <p><label for="username">Nimi *</label><br />
        <input type="text" id="username" value="" tabindex="1" size="20" name="username" required />
    </p>
    <p><label for="description">Sähköposti *</label><br />
        <input type="email" id="email" value="" tabindex="1" size="20" name="email" required />
    </p>


    <div class="upload-btn-wrapper">
        <button class="btn">VALITSE KUVA</button>
        <input type="file" name="file" id="file" />
    </div>

    <div class="mt-3">
        <input type="checkbox" name="termsandconditions_check" id="termsandconditions_check" required><a>Hyväksyn
            kilpailun </a> <a href="#" class="terms"> säännöt ja ehdot</a>
        <input type="submit" value="OSALLISTU" tabindex="6" id="submit" name="submit" />
    </div>

    <input type="hidden" name="post_type" id="post_type" value="domande" />
    <input type="hidden" name="action" value="post" />
    <?php wp_nonce_field( 'new-post' ); ?>
</form>
