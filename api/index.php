<?php 
header('Content-Type: application/json');

header("Access-Control-Allow-Origin: http://127.0.0.1:5500");
header("Access-Control-Allow-Headers: X-Requested-With");

$source_path = __DIR__ . './../api/dati.json';
$json_data = file_get_contents($source_path);
$tasks = $json_data;

//$tasks = json_decode(file_get_contents('dati.json')); 


$task_text = $_POST['task'] ?? '';

//se ho un nuovo task da aggiungere
if($task_text){
    //converto il task in array php
   $tasks = json_decode($tasks, true);

   $new_task = [
    'done' => false,
    'text' => $task_text,
    'id' => uniqid(),
   ];

   //aggiungo il task 
   $tasks[] = $new_task;

   //converto il task in json
   $tasks = json_encode($tasks);

   //array aggiornato
   file_put_contents($source_path, $tasks);
};


echo $tasks;

?>

