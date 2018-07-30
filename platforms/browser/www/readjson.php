<?php
    header("Access-Control-Allow-Origin: *");
    $bens = json_decode($_POST['data1']);
    foreach($bens as $ben){
        print_r($ben->fname);
    }
?>