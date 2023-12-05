<?php
    include('./ad_nav.php');

?>
</head>
<body>
    

<main class="mt-5 pt-3">
<div class="container">

    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <form method="post">
                <h3 class="text-center mb-4">Change Password</h3>
               <p>
                <?php
                if(isset($_SESSION['chg'])){
                    echo $_SESSION['chg'];
                    unset($_SESSION['chg']);
                }
                if(isset($_SESSION['chg'])){
                    echo $_SESSION['chg'];
                    unset($_SESSION['chg']);
                }
                ?>
               </p>
                <div class="mb-3">
                    <label for="cpass" class="form-label">Current Password</label>
                    <input type="text" class="form-control" id="cpass" name="cpass" placeholder="Enter your Currnet password">
                </div>
                <div class="mb-3">
                    <label for="pass1" class="form-label">New password</label>
                    <input type="pass1" class="form-control" id="pass1" name="pass1" placeholder="Enter your New Password">
                </div>
                <div class="mb-3">
                    <label for="pass2" class="form-label">Confirm NewPassword</label>
                    <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Enter your Password">
                </div>

                    <input type="submit" class="btn btn-primary" name="submit" value="Add admin">
            
                </form>
                <?php
if (isset($_POST['submit'])) {
    $cpass = $_POST['cpass'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $hashed_password = password_hash($cpass, PASSWORD_DEFAULT);
    $newhashed_password = password_hash($cpass, PASSWORD_DEFAULT);
    $cnewhashed_password = password_hash($cpass, PASSWORD_DEFAULT);


    // Check if the confirmation parameter is set
    if (isset($_POST['confirm']) && $_POST['confirm'] == 'true') {
        if ($newhashed_password !== $cnewhashed_password) {
            $_SESSION['chg'] = "Passwords do not match";
            header("location:".siteurl.'admin/add-admin.php');
            exit();
        }

        $sql = "SELECT * FROM admins WHERE admin_id='$admin_id' AND password_hash='$hashed_password'";
        $res = mysqli_query($conn, $sql);
        if ($res == true) {
            $count = mysqli_num_rows($res);

            if ($count == 1) {
                if ($pass2 == $cpass2) {
                    $sql2 = "UPDATE admins SET password_hash ='$pass2' where admin_id='$admin_id'";
                    $res2 = mysqli_query($conn, $sql2);

                    if ($res2 == true) {
                        $_SESSION['change'] = "Password Changed Successfully";
                        header('location:' . siteurl . 'admin/admins.php');
                    } else {
                        $_SESSION['change'] = "Failed to change password";
                        header('location:' . siteurl . 'admin/changepwd.php');
                    }
                } else {
                    $_SESSION['pwd-not-match'] = "Password doesn't match";
                    header('location:' . siteurl . 'backend/update-password.php');
                }
            }
        }
    } else {
        // Display the confirmation box
        echo "
        <script>
            var confirmed = confirm('Are you sure you want to change the password?');
            if (confirmed) {
                // Set the 'confirm' parameter and submit the form
                var form = document.querySelector('form');
                var input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'confirm';
                input.value = 'true';
                form.appendChild(input);
                form.submit();
            } else {
                // Redirect back to the update password page
                window.location.href = 'update-password.php?admin_id=$admin_id';
            }
        </script>
        ";
    }
}
?>

       
        </div>
    </div>
</div>

</main>



</body>