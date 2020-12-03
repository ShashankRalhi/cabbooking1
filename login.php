<?php
session_start();
include("header.php");
include("action.php");
$obj = new connection();

$msg = "";
$username = "";
$password = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['psw'];

    $sql = $obj->fetch($username, md5($password));
    $result = $sql;
    //print_r($result);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("location:customer.php");
    }else {
        $msg = "Admin still not Permit you to login / You insert wrong details";
        } 
    
    if ($username == "admin" && $password == "password123$") {
        $_SESSION['username'] = "ADMIN";
        header("location:admin-home.php");
    }
 }


?>

    <div>
        <form action="login.php" method="POST">
            <div class="logincontainer">
                <h1>LOGIN</h1>
                <hr>
                <div id="display" style="text-align: center;color: white;background-color: red;">
                    <?php echo $msg; ?>
                </div>
                <label><b>User Name</b></label>
                <input type="text" placeholder="Enter User Name" name="username" id="username" required onblur="this.value=removeSpaces(this.value);">

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

                <button type="submit" class="btn" name="login">Login</button>
                  <h3><a href="update.php" style="color: white;text-decoration: none;">Forget Passsword</a></h3>
            </div>
        </form>
    </div>

<?php include("footer.php"); ?>



<script type="text/javascript">
     function removeSpaces(string) {
                return string.split(' ').join('');
            }
</script>