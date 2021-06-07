<?php
include 'include/head.inc.php';
include 'include/connect.inc.php';
?>
<body>
    <section id="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="login-div">
                    <form action="include/login.inc.php" method="POST">
                    <h1>Student Information System</h1>
                    <h4>Login</h4>
                    <p>Username</p>
                    <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="user">
                    <p>Password</p>
                    <input type="password" class="form-control" aria-label="Password" aria-describedby="basic-addon1" name="pass">
                    <br>
                    <a href="register.php"><button type="button" class="btn btn-primary reg">Register</button></a>
                    <button type="submit" class="btn btn-primary log">Login</button>
                    </form>
                </div>
            </div>    
        </div>
        </div>
    </section>
</body>
</html>