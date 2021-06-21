<?php
include 'include/head.inc.php';
include 'include/connect.inc.php';
session_start();
?>
<body>
<script src="js/script.js"></script>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h1>Student Information System</h1>
            </div>
            <div class="col-lg-3 ms-auto">
                <form action="include/logout.inc.php" method="POST">
                    <h1>Welcome, <?php echo $_SESSION["user"];?> </h1>
                    <span><button type="submit" class="btn btn-primary">Logout</button></span>
                </form>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-3">
                <h1>Student List</h1>
            </div>
            <div class="col-lg-2 ms-auto">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</button>
            </div>
            <div class="col-lg-2">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#update">Update</button>
            </div>
            <div class="col-lg-2">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#delete">Delete</button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="result">
                    <div class="table-responsive">
                        <table class="table align-middle table-hover">
                          <thead>
                            <tr>
                                <th>Student no.</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Middle Name</th>
                                <th>Section</th>
                                <th>Course</th>
                                <th>Major</th>
                                <th>Type(Regular or Irreg)</th>
                                <th>Student Status</th>
                                <th>Type of Scholar</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php include "include/table.inc.php";?>
                          </tbody>
                        </table>
                      </div>
                </div>
            </div>
        </div>
    </div>

<!-- Vertically centered modal -->
<!-- Button trigger modal -->

  <!-- Modal -->
<form action="include/add.inc.php" method="POST">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Student record</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            
                    <input type="text" placeholder="FirstName" name="fname">
                    <input type="text" placeholder="LasttName" name="lname">
                    <input type="text" placeholder="MiddleName" name="mname">
                    <input type="text" placeholder="Section" name="section">
                    <input type="text" placeholder="Course" name="course">
                    <input type="text" placeholder="Major" name="major">
                    <input type="text" placeholder="Type" name="type">
                    <input type="text" placeholder="Status" name="status">
                    <input type="text" placeholder="Type of Scholar" name="scholar">
            
            </div>
            <div class="modal-footer">
             
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="add_btn" onclick="addStudBtn();">Add record</button>
            </div>
        </div>
        </div>
    </div>
</form>


  <!-- for update modal -->
  <form action="include/update.inc.php" method="POST">
  <div class="modal fade" id="update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Student record</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div id="update-content">
                <input type="text" placeholder="ID" name="id" id="stud_id"><button type="button" class="btn btn-primary" onclick="find();">Find</button>
                <input type="text" placeholder="FirstName" name="fname">
                <input type="text" placeholder="LasttName" name="lname">
                <input type="text" placeholder="MiddleName" name="mname">
                <input type="text" placeholder="Section" name="section">
                <input type="text" placeholder="Course" name="course">
                <input type="text" placeholder="Major" name="major">
                <input type="text" placeholder="Type" name="type">
                <input type="text" placeholder="Status" name="status">
                <input type="text" placeholder="Type of Scholar" name="scholar">
            </div>
        </div>
        <div class="modal-footer">
      
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="update_btn" onclick="updateStud();">Update record</button>
        </div>
      </div>
    </div>
  </div>
  </form>

  <!-- for delete modal -->
  <form action="include/del.inc.php" method="POST">
  <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Student record</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div id="update-content">
                <input type="text" placeholder="ID" name="id" id="stud_id">
            </div>
        </div>
        <div class="modal-footer">
      
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger" name="delete_btn" onclick="deleteStud();">Delete record</button>
        </div>
      </div>
    </div>
  </div>
  </form>
</body>
</html>
