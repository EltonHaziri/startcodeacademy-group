<?php
include('partials/header.php');
?>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <form action="store.php" method="post" class="shadow-lg p-3 rounded-3">
                <h2>➕ Shto Detyre</h2>
                <!-- emri -->
                 <div class="mb-3">
                    <input type="text" name="emri_detyres" id="emri_detyres" class="form-control" placeholder="Sheno Emrin e Detyres">
                 </div>
                 <!-- Data E Fillimit -->
                  <div class="mb-3">
                    <input type="date" name="data_fillimit" class="form-control">
                  </div>
                   <!-- Data E Mbarimit -->
                    <div class="mb-3">
                    <input type="date" name="data_mbarimit" class="form-control">
                  </div>
                  <div class="mb-3">
                    <select name="statusi" id="statusi" class="form-control" required>
                    <option value="">-- Zgjidh Statusin --</option>
<<<<<<< HEAD
                    <option value="e pa perfunduar">E Pa përfunduar</option>
                    <option value="e perfunduar">E Përfunduar</option>
=======
                    <option value="E Pa Perfunduar">E Pa përfunduar</option>
                    <option value="E Përfunduar">E Përfunduar</option>
>>>>>>> 3ba7ed814f70c982fe9429178baad4e09e72a022
    </select>
                  </div>
                  <button class="btn btn-primary">Dergo</button>
            </form>
        </div>
    </div>
</div>


<?php
include('partials/header.php');
?>