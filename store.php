<?php

include_once('classes/Task.php');

if($_SERVER['REQUEST_METHOD']=='POST') {
    $error_input=[];
    //emri
if (isset($_POST['emri_detyres'])&&!empty($_POST['emri_detyres'])) {
    $emri_detyres = htmlspecialchars(strip_tags(trim($_POST['emri_detyres']))); 

  }
  
  else {
      $error_input[]="Ju lutemi te plotesoni fushen e emrit te detyres";
  }

  // Data e fillimit
    if(isset($_POST['data_fillimit']) && !empty($_POST['data_fillimit'])) {
        $data_fillimit = $_POST['data_fillimit'];
    } else {
        $error_input[] = "Ju lutemi te zgjidhni daten e fillimit";
    }

    // Data e mbarimit
    if(isset($_POST['data_mbarimit']) && !empty($_POST['data_mbarimit'])) {
        $data_mbarimit = $_POST['data_mbarimit'];
    } else {
        $error_input[] = "Ju lutemi te zgjidhni daten e mbarimit";
    }

    //Statusi
    if(isset($_POST['statusi']) && $_POST['statusi'] !== '') {
    $statusi = $_POST['statusi'];
    }

    else {
    $error_input[] = "Ju lutemi te zgjidhni statusin";
   }

   if(count($error_input)>0) {
    foreach($error_input as $err) {
        echo"<p>".$err."</p>";
    }
 }

 else {
    $detyrat = new Detyrat();
    $detyrat->ruajDetyren($emri_detyres, $data_fillimit, $data_mbarimit, $statusi);
 }
}