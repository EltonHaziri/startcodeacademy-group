<?php

include_once('classes/Task.php');
$task=new Detyrat();
$id=$_GET['id'];
$delete=$task->deleteDetyra($id);