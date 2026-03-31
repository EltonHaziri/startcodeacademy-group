<?php

include('../config/database.php');

class Detyrat extends Database { 

   public function ruajDetyren($emri_detyres, $data_fillimit, $data_mbarimit, $statusi) { 
      $sql = "INSERT INTO detyrat(emri_detyres, data_fillimit, data_mbarimit, statusi) 
              VALUES('$emri_detyres', '$data_fillimit', '$data_mbarimit', '$statusi')";
      
      $result = $this->conn->query($sql);

      if ($result) {
          echo "Te dhenat u ruajten me sukses";
      } else {
          echo "Te dhenat nuk u ruajten";
      }
   }

}