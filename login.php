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
                    <label for="username">Username</label>
                    <input type="text" class="form-control" aria-label="Username" id="username" aria-describedby="basic-addon1" name="user">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" aria-label="Password" id="password" aria-describedby="basic-addon1" name="pass">
                    <br>
                    <a href="register.php"><button type="button" class="btn btn-primary border-0 reg">Register</button></a>
                    <button type="submit" class="btn btn-primary border-0 log">Login</button>
                    </form>
                </div>
            </div>    
        </div>
        </div>
    </section>
</body>
</html>