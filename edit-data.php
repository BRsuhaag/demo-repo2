<?php
include "header.php";
include "db/conn.php";







?>
<div class="card container p-5 shadow m-auto">


<table class="table table-hover pt-3 mx-2">
  <thead>
    <tr>
      <th>#</th>
      <th>Email</th>
      <th>Name</th>
      <th>Mobile</th>
      <th>Gender</th>
      <th>employee type</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
<?php

$sql = "SELECT * FROM demo";
$result = mysqli_query($conn, $sql);
$number = 1;
if($result){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $gender = $row['gender'];
        $employee_type = $row['employee_type'];
   
    echo '<tr>
        <th scope="row">'.$number.'</th>
        <td>'.$email.'</td>
        <td>'.$name.'</td>
        <td>'.$mobile.'</td>
        <td>'.$gender.'</td>
        <td>'.$employee_type.'</td>
        <td>
        <button class="btn btn-secondary"><a class="text-light" href="update-data.php?updateID='.$id.'">Edit</a></button>
        <button class="btn btn-danger" onclick="confirmDelete('.$id.')">Delete</a></button>
        </td>
        </tr>';
        $number++;
    }
}
?>
    
    
  </tbody>
</table>
</div>
<script>
    function confirmDelete(deleteID){
        if(confirm("Are you sure you wanna delete this record")){
            window.location.href='delete-data.php?deleteID='+deleteID;
        }
    }
</script>

<?php
include "footer.php";
?>