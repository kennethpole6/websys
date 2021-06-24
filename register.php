<?php
include 'include/head.inc.php';
?>
<body>
    <section id="register">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="register-div">
                    <h1>Create an Account</h1>
                    <div class="container">
                        <div class="row">
                            <form action="include/register.inc.php" method="POST">
                                <div class="col-lg-6 left">
                                <label for="fname">First name</label>
                                <input type="text" name="fname" id="fname" class="form-control" aria-label="fname" aria-describedby="basic-addon1">
                                <label for="lname">Last name</label>
                                <input type="text" name="lname" id="lname" class="form-control" aria-label="lname" aria-describedby="basic-addon1">
                                <label for="email">Email address</label>
                                <input type="text" name="email" id="email" class="form-control" aria-label="email" aria-describedby="basic-addon1">      
                                </div>
                                <div class="col-lg-6 right">
                                <label for="user">Username</label>
                                <input type="text" name="username" id="user" class="form-control" aria-label="user" aria-describedby="basic-addon1">
                                <label for="pass">Password</label>
                                <input type="text" name="password" id="pass" class="form-control" aria-label="pass" aria-describedby="basic-addon1">
                                <label for="mobile">Mobile #</label>
                                <input type="text" name="mobile" id="mobile" class="form-control" aria-label="mobile" aria-describedby="basic-addon1">  
                                <button type="submit" class="btn btn-primary border-0 log">Create my account</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        </div>
    </section>
</body>
</html>