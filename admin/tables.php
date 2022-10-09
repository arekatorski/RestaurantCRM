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
<div class="container" style="color: white;">
    <table class="table table-dark">
        <tr>
            <td>ID</td>
            <td>SEATS</td>
            <td>PLACE</td>
        </tr>
        <?php
        require("../src/conn.php");
        $query = "SELECT * FROM tables";
        $result = $conn->query($query);

        if($result ->num_rows >0){
            while($row = $result->fetch_assoc()){
                echo "<tr><td>".$row['id']."</td><td>".$row['seats']."</td><td>".$row["place"];
            }
        }
        ?>
    </table>
    <p class="h2">Add table</p>
    <form action="addtable.php" method="post">
        <input type="text" name="seats" id="" placeholder="HOW MANY SEATS?">
        <input type="text" name="place" id="" placeholder="PLACE OF TABLE (WHERE?)">
        <input type="submit" value="ADD TABLE">
    </form>
    <p class="h2">Delete table</p>
    <form action="deletetable.php" method="post">
        <input type="text" name="tableid" id="" placeholder="TABLE ID">
        <input type="submit" value="DELETE TABLE">
    </form>
</div>
<?php
require("../layout/footer.php");
?>