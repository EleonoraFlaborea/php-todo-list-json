<?php 

$tasks = json_decode(file_get_contents('dati.json'));


        header('Content-Type: application/json');
        echo json_encode($tasks, true);

?>

