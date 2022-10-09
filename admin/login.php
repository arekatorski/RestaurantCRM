<?php
require("../layout/header.php");
?>

<div class="container">
    <form action="logining.php" method="POST">
        <input type="email" name="email" id="" placeholder="email">
        <input type="password" name="password" id="" placeholder="password">
        <input type="submit" value="LOGIN">
    </form>
    
</div>
<?php
require("../layout/footer.php");
?>