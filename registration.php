<?php

include("header.php");
include("action.php");
$obj = new connection();

$msg = "";
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $passwordA = $_POST['pws1'];
    $passwordB = $_POST['pws2'];

    if ($passwordA == $passwordB) {
        if($username != " "){
            $sql = $obj->insert($username, $mobile, md5($passwordA));
            echo "<script> alert('You are Successfully registered please wait for admin approval ');</script>";
        // header("location:login.php");
    } else {
        $msg = "Password is not same please enter same password";
    }
  }
}

?>

<div>
    <div>
        <form action="registration.php" method="POST">
            <div class="registercontainer">
                <h1>REGISTRATION</h1>
                <hr>
                
                <div style="text-align: center; color: #900C3F;text-transform: uppercase;">
                    <?php echo $msg; ?>
                </div>

                <label><b>User Name</b></label>
                <input type="text" placeholder="Enter User Name" name="username" id="username" required  pattern="[a-zA-Z0-9]+" />

                <label><b>Mobile</b></label>
                <input type="text" placeholder="Enter Mobile No." name="mobile" id="mobile" required onkeypress="return isNumberKey(event)" maxlength="10" minlength="10">

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pws1" id="pws1" required>

                <label><b>Re Password</b></label>
                <input type="password" placeholder="Re Password" name="pws2" id="pws2" required>

                <button type="submit" class="btn" name="register">Register</button>
            </div>
        </form>
    </div>
</div>


<script type="text/javascript">
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode;
            if ((charCode < 48 || charCode > 57))
                return false;
            return true;
        }

        function removeSpaces(string) {
                return string.split(' ').join('');
            }
</script>

<?php include("footer.php"); ?>