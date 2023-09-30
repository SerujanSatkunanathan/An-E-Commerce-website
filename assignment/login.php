<?php
require('db.php');
session_start();


if (isset($_POST['email'])) {
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);
    $upswd1= stripslashes($_REQUEST['upswd1']);
    $upswd1 = mysqli_real_escape_string($con, $upswd1);

   
    $query = "SELECT * FROM `register` WHERE email=? AND upswd1=?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "ss", $email, $upswd1);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $rows = mysqli_stmt_num_rows($stmt);

    if ($rows == 1) {
       
        $_SESSION['email'] = $email;

      
        session_regenerate_id(true);

        
        header("Location: cart.php");
        exit;
    } else {
        echo "<div class='form'>
        <h3>Incorrect Username/password.</h3><br/>
        <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
        </div>";
    }
}
?>