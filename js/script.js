function addStudBtn(){
    alert("Student Added Successfully!");
}

function updateStud(){
    // var try1 = document.getElementById("stud_id").value;
    // console.log(try1);
    alert("Student Updated Successfully!");
}

function find(){
    var id = document.getElementById("stud_id").value;
    console.log(id);
    $(document).ready(function (){
        $('#update-content').load('include/findStudId.inc.php',{
            id:id
        });
    });
}

function deleteStud(){
    alert("Student Record Sucessfully Deleted!");
}