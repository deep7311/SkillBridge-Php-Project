<!-- Start Including Header -->
<?php
include("./mainInclude/header.php");
?>
<!-- End Including Header -->

<!-- Start Course Page Banner -->
<div class="container-fluid bg-dark p-0">
    <div class="row">
        <img src="./image/coursebanner.jpg" alt="courses"
            style="height: 500px; width:100%; object-fit:cover; box-shadow:10px; opacity:0.5;" />
    </div>
</div>
<!-- End Course Page Banner -->

<!-- Start Main Content -->
<div class="container mb-2">
    <h2 class="text-center my-4">Payment Status</h2>
    <form action="" method="post">
        <div class="form-group d-flex justify-content-center">
            <label for="orderId" class="col-form-label me-2">Order ID: </label>
            <input type="text" id="orderId" class="form-control me-3" style="width: 200px;">
            <input type="submit" class="btn btn-primary" value="View">
        </div>
    </form>
</div>
<!-- End Main Content -->

<!-- Start Contact US -->
<div class="container">
    <?php
    include("./contact.php")
    ?>
</div>
<!-- End Contact US -->


<!-- Start Including Footer -->
<?php
include("./mainInclude/footer.php");
?>
<!-- End Including Footer -->