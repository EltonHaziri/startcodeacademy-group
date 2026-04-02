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
            <form action="update_statusin.php" method="post" class="shadow-lg p-3 rounded rounded-3">
                <h2>➕ Edito Statusin</h2>

                <!-- id -->
                <input type="hidden" name="detyra_id"  value="<?php echo $dt['id'] ?>">

                  <div class="mb-3">
                    <select name="statusi" id="statusi" class="form-control" value="<?php echo $dt['statusi'] ?>" required>
                    <option value="">-- Zgjidh Statusin --</option>
                    <option value="E Pa Perfunduar">E Pa përfunduar</option>
                    <option value="E Përfunduar">E Përfunduar</option>
                    </select>
                    </div>
            </form>
        </div>
    </div>
</div>



<?php
include('partials/footer.php');
?>