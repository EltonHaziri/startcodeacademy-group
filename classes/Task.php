<?php

require_once('config/database.php');

class Detyrat extends Database { 

    // Merr krejt detyrat
    public function index(){
        $sql = "SELECT * FROM detyrat";
        $result = $this->conn->query($sql);

        if($result->num_rows > 0){
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return null;
        }
    }

    // Gjej nje detyre sipas ID
    public function find($id){
        $sql = "SELECT * FROM detyrat WHERE id='$id'";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }

    // Ruaj detyren
    public function ruajDetyren($emri_detyres, $data_fillimit, $data_mbarimit, $statusi) { 
        $sql = "INSERT INTO detyra(emri_detyres, data_fillimit, data_mbarimit, statusi) 
                VALUES('$emri_detyres', '$data_fillimit', '$data_mbarimit', '$statusi')";
        
        $result = $this->conn->query($sql);

        if ($result) {
            echo "Te dhenat u ruajten me sukses";
        } else {
            echo "Te dhenat nuk u ruajten";
        }
    }

    // Update detyren
    public function editoDetyren($id, $emri_detyres, $data_fillimit, $data_mbarimit, $statusi){
        $sql = "UPDATE detyrat 
                SET emri_detyres='$emri_detyres',
                    data_fillimit='$data_fillimit',
                    data_mbarimit='$data_mbarimit',
                    statusi='$statusi'
                WHERE id='$id'";

        $result = $this->conn->query($sql);

        if($result){
            header('Location: detyrat.php');
        } else {
            echo "Detyra nuk u editua";
        }
    }

    // Delete detyren
    public function deleteDetyra($id){
        $sql = "DELETE FROM detyrat WHERE id='$id'";
        $result = $this->conn->query($sql);

        if($result){
            echo "Te dhenat u fshine me sukses";
        } else {
            echo "Te dhenat nuk u fshine";
        }
    }

}
?>