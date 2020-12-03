<?php
include("admin.php");
include("action.php");

$obj = new connection();

// $msg = "";

if (isset($_POST['addlocation'])) {
    $location = $_POST['location'];
    $distance = $_POST['distance'];  

    $sql = $obj->location($location, $distance);

    echo "<script> alert('Location Successfully Added');</script>";

    // header("location:add-location.php");
}
?>

<div>
    <div>
        <form action="add-location.php" method="POST">

            <div class="container-byadmin">
                <h1>ADD LOCATION</h1>
                <hr>
                
                <label><b>Location</b></label>
                <input type="text" placeholder="Enter Name of Location" name="location" id="location">

                <label><b>Distance</b></label>
                <input type="text" placeholder="Enter Distance wrt Charbag" name="distance" id="distance">

                <button type="submit" class="btn" name="addlocation">Add Location</button>
            </div>

        </form>
    </div>
</div>


<?php include("footer.php"); 



