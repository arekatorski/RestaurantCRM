<?php
session_start ();
if($_SESSION["check"] == "yes"){

}elseif($_SESSION["check"] != "yes"){
    header("Location: ../admin/login.php");
}
?>
<?php
require("../layout/adminheader.php");
?>
<div class="container">
    <div class="row">
        <div class="col-md-4 text-center"><a href="../admin/reserv.php" class="btn btn-outline-light">Check reservations</a></div>
        <div class="col-md-4 text-center"><a href="../admin/tables.php" class="btn btn-outline-light">Check/edit tables</a></div>
        <div class="col-md-4 text-center"><a href="" class="btn btn-outline-light disabled">Check users (not avalible)</a></div>
    </div>
</div>
<?php
require("../layout/footer.php")
?>