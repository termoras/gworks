<?php

$pid = $_POST['get']
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

?>