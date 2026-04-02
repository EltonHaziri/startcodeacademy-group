<?php
include("classes/Task.php");

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $error_input = [];

//Statusi
if(isset($_POST['statusi']) && $_POST['statusi'] !== '') {
   $statusi = $_POST['statusi'];
   }

    // id
    $id = filter_var($_POST['detyra_id'], FILTER_SANITIZE_NUMBER_INT);

 
    if(count($error_input) > 0) {
        foreach($error_input as $err) {
            echo "<p>" . $err . "</p>";
        }
    } else {
        $detyra = new Detyrat();
        $detyra->editoStatusin($id, $statusi);
    }

}
?>