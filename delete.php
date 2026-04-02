<?php

include_once('classes/Task.php');

$task = new Task();

if(isset($_GET['id'])){
    $task->deleteTask($_GET['id']);
}

header("Location: index.php");