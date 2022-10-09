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
            <td>PERSON NAME</td>
            <td>START OF BOOKING</td>
        </tr>
        <?php
        require("../src/conn.php");
        $query = "SELECT * FROM reservations";
        $result = $conn->query($query);

        if($result ->num_rows >0){
            $xd = 0;
            while($row = $result->fetch_assoc()){
                $xd+=1;
                echo "<tr><td name='reserationid".$xd."'>".$row['id']."</td><td>".$row['name']."</td><td>".$row["start_of_booking"]."</td></tr>";
            }
        }
        ?>
    </table>

    <p class="h2">Delete reservation</p>
    <form action="deletereservation.php" method="post">
        <input type="text" name="reservationid" id="" placeholder="RESERVATION ID">
        <input type="submit" value="DELETE RESERVATION">
    </form>
</div>
<?php
require("../layout/footer.php");
?>