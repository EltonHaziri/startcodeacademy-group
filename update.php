<?php
include("classes/Task.php");

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $error_input = [];

    // emri_detyres
    if(isset($_POST['emri_detyres']) && !empty($_POST['emri_detyres'])) {
        $emri_detyres = htmlspecialchars(strip_tags(trim($_POST['emri_detyres'])));

        if(mb_strlen($emri_detyres) < 3) {
            $error_input[] = "Emri i detyres duhet te kete se paku 3 karaktere";
        }

    } else {
        $error_input[] = "Ju lutemi plotesoni emrin e detyres";
    }

    // data_fillimit
    if(isset($_POST['data_fillimit']) && !empty($_POST['data_fillimit'])) {
        $data_fillimit = $_POST['data_fillimit'];
    } else {
        $error_input[] = "Ju lutemi plotesoni daten e fillimit";
    }

    // data_mbarimit
    if(isset($_POST['data_mbarimit']) && !empty($_POST['data_mbarimit'])) {
        $data_mbarimit = $_POST['data_mbarimit'];
    } else {
        $error_input[] = "Ju lutemi plotesoni daten e mbarimit";
    }

    // id
    $id = filter_var($_POST['detyra_id'], FILTER_SANITIZE_NUMBER_INT);

 
    if(count($error_input) > 0) {
        foreach($error_input as $err) {
            echo "<p>" . $err . "</p>";
        }
    } else {
        $task = new Task();
        $task->editoDetyren($id, $emri_detyres, $data_fillimit, $data_mbarimit);
    }

}
?>