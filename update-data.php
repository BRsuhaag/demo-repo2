<?php
include "header.php";
include "db/conn.php";

$id = $_GET['updateID'];
$sql = "SELECT * from demo where id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
    $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $gender = $row['gender'];
        $employee_type = $row['employee_type'];

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $employee_type = $_POST['employee_type'];

    $sql = "UPDATE `demo` set email=?, name=? ,mobile=?, gender=? ,employee_type=? where id=?";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt){
        mysqli_stmt_bind_param($stmt, "sssssi", $email, $name, $mobile, $gender, $employee_type, $id);
        if(mysqli_stmt_execute($stmt)){
        echo "<script>alert('data updated');
        window.location.href='http://localhost/demo%20delete/index.php';</script>";
        exit();
    }else{
        echo "<script>alert('data not updated');</script>";

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
            <input type="email" class="form-control" id="email" name="email" value="<?= $email;?>">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name </label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $name;?>">
        </div>

        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile number</label>
            <input type="number" class="form-control" id="mobile" name="mobile" value="<?php echo $mobile;?>">
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select id="gender" class="form-select" name="gender" id="gender" >
                <option value="">Select Gender</option>
                <option value="M" <?php if($gender == 'M')echo 'selected';  ?>>Male</option>
                <option value="F" <?php if($gender == 'F')echo 'selected';  ?>>Female</option>
            </select>
        </div>

        <div class="mb-3">
            <input class="form-check-input" type="radio" name="employee_type" id="internRadio" value="intern" <?php if($employee_type == 'intern')echo 'checked'; ?>>
            <label class="form-check-label" for="internRadio">
                Intern
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="employee_type" id="fullTimeRadio" value="fulltime" <?php if($employee_type == 'fulltime')echo 'checked'; ?>>
            <label class="form-check-label" for="fullTimeRadio">
                Full Time Employee
            </label>
        </div>


        <button type="submit" class="btn btn-primary" name="update">Update</button>
    </form>
</div>
</div>

<?php
include "footer.php";
?>