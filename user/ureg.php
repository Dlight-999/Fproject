<?php
    include('../config/constants.php');
    include('./bootstrap_headder.php');
?>
<link rel="stylesheet" href="../css/ulog.css">

</head>

<body>
    <div class="container">
        <div class="loginBox">
            <h3>Sign up</h3>
            <form action="login.php" method="post">
                <div class="mb-3">
                    <label for="uname" class="form-label">Username</label>
                    <div class="inputBox">
                        <input id="uname" type="text" name="Username" class="form-control" placeholder="Username">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">Password</label>
                    <div class="inputBox">
                        <input id="pass" type="password" name="Password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" value="Signup">
            </form>
            <a class="link" href="#">Forget Password<br></a>
            <div class="text-center">
                <p style="color: #0d6efd;"><a href="ulogin.php">Login</a></p>
            </div>
        </div>
    </div>
</body>
