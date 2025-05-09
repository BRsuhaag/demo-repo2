<?php
include "header.php";
include "db/conn.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $employee_type = $_POST['employee_type'];

    $sql = "INSERT INTO `demo` (email, name, mobile, gender, employee_type) values(?,?,?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt){
        mysqli_stmt_bind_param($stmt, "sssss", $email, $name, $mobile, $gender, $employee_type);
        if(mysqli_stmt_execute($stmt)){
        echo "<script>alert('data inserted');
        window.location.href='http://localhost/demo%20delete/index.php';</script>";
        exit();
    }else{
        echo "<script>alert('data not inserted');</script>";

    }
    mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
}



?>


<div class="container justify-content-center p-5">
<div class="card shadow" style="width:65vw">

   
<form method="post" class="p-5">

        <div class="mb-3 ">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name </label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile number</label>
            <input type="number" class="form-control" id="mobile" name="mobile">
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select id="gender" class="form-select" name="gender" id="gender">
                <option value="">Select Gender</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
            </select>
        </div>

        <div class="mb-3">
            <input class="form-check-input" type="radio" name="employee_type" id="internRadio" value="intern">
            <label class="form-check-label" for="internRadio">
                Intern
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="employee_type" id="fullTimeRadio" value="fulltime">
            <label class="form-check-label" for="fullTimeRadio">
                Full Time Employee
            </label>
        </div>


        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    </div> 
</div>

<?php
include "footer.php";
?>