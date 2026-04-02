<?php

include_once('classes/Task.php');
$task=new Task();
$id=$_GET['id'];
$delete=$task->deleteDetyra($id);