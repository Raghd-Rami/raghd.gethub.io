<?php
include 'header.php';

// echo sha1(123);
//bring what the user entered to login and show what he/she wrote by printing it of course
// var_dump($_POST);

//is the variable in the array post or not?
if (isset($_POST['login'])) {
    //to get a value from an array
    $email = $_POST['email'];
    $pass = sha1($_POST['pass']); //sha1() stores the password in an indirect (تشفير الكلمة) form



    // check if the user exists in the database or not, if yes then direct him/her to admin and if not then send him/her an error msg.
    $sql = "SELECT * FROM users  WHERE email = '$email' AND PASSWORD = '$pass'";
    $result = mysqli_query($conn, $sql); //connect to db and bring the results in it 
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        $_SESSION['user_id'] = $user['id']; 

        if ($user['Type'] == 'admin') {
            $_SESSION['is_admin'] = true; 
             header("Location: admin/index.php");
        } else {
            
            header("Location: index.php");
        }
        // echo "Logged in Successfully";
    } else {
        $error = "Invalid Account";
    }
}

?>

<main>
    <div class="containor">
        <!-- check if there is an error -->
        <?php if (isset($error)) { ?>
            <div class="alert alert-danger" style="text-align: center;">
                <!-- print this if there is an error -->
                <?php echo $error ?>
            </div>
            <!-- closing the if statement for faster results -->
        <?php } ?>
        <h2 id="log">Login to your account</h2> <br>
        <form class="login" method="post">
            <div class="text-field">
                <label>Email:</label>
                <input class="field" type="email" placeholder="email" name="email" required />
                <label>Password:</label>
                <input class="field" type="password" placeholder="password" name="pass" required />
            </div>

            <input class="button" type="submit" value="Login" name="login" />
        </form>
    </div>
</main>

<?php include 'fotter.php' ?>