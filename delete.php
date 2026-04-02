<?php

include_once('classes/Task.php');
$detyra=new Detyrat();
$id=$_GET['id'];
$delete=$detyra->deleteDetyra($id);