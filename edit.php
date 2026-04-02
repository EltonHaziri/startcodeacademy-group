<?php
include('partials/header.php');
include_once('classes/Task.php');

$detyrat = new Detyrat();
$id=$_GET['id'];
$dt=$detyrat->find($id);
?>

<div class="container" style="min: height 80vh;">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6 mt-5">
            <form action="update.php" method="post" class="shadow-lg p-3 rounded rounded-3">
                <h2>➕ Edito Detyren</h2>

                <!-- id -->
                <input type="hidden" name="detyra_id"  value="<?php echo $dt['id'] ?>">

                <!-- emri -->
                 <div class="mb-3">
                    <input type="text" name="emri_detyres" id="emri_detyres" class="form-control" placeholder="Sheno Emrin e Detyres"
                    value="<?php echo $dt['emri_detyres'] ?>">
                 </div>
                 <!-- Data E Fillimit -->
                  <div class="mb-3">
                    <input type="date" name="data_fillimit" class="form-control"
                    value="<?php echo $dt['data_fillimit'] ?>">
                  </div>
                   <!-- Data E Mbarimit -->
                    <div class="mb-3">
                    <input type="date" name="data_mbarimit" class="form-control"
                    value="<?php echo $dt['data_mbarimit'] ?>">
                  </div>
                  <div class="mb-3">
                    <button class="btn btn-primary">Edito</button>
                  </div>
            </form>
        </div>
    </div>
</div>



<?php
include('partials/footer.php');
?>