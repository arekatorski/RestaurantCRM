<?php
require("./layout/header.php");
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" id="baner"></div>
    </div>
</div>
<div class="container">
    <p class="h2 text-white">Reserve your table</p>
<form action="doreservation.php" method='post'>
    <input type="text" name="name" placeholder="name" required>
    <input type="email" name="" id="" placeholder="email">
    <input type="datetime-local" name="date" id="" placeholder="date" required>
    <input type="submit" value="Reserve">
</form>
</div>

<?php
require("./layout/footer.php")
?>