<?php
include('partials/header.php');
include_once("classes/Task.php");
$detyr = new Detyrat();
$detyrat=$detyr->index();
?>


<div class="container" style="min: height 85vh;">
    <div class="row">
        <div class="col-md-10">
            <h1 class="display-4 mb-5">Lista E Produkteve</h1>

            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Emri i Detyres</th>
                        <th>Data Fillimit</th>
                        <th>Data Mbarimit</th>
                        <th>Statusi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                <?php foreach ($detyrat as $dt) {
                ?>    
                <tr>
                    <td><?php echo $dt['id'] ?></td>
                    <td><?php echo $dt['emri_detyres'] ?></td>
                    <td><?php echo $dt['data_fillimit'] ?></td>
                    <td><?php echo $dt['data_mbarimit'] ?></td>
                    <td><?php echo $dt['statusi'] ?></td>
                    <td><a href='' class="btn btn-info">View</a>
                    <a href='edit.php?id=<?php echo $dt['id'] ?>' class="btn btn-warning">Edit</a>
                    <a href='delete.php?id=<?php echo $dt['id'] ?>' class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php
include('partials/footer.php');
?>