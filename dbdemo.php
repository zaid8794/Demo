<?php
$a = $_POST['txt1'];
$b = $_POST['txt2'];
$connection = mysqli_connect("localhost","root","","demo");
$query = mysqli_query($connection,"insert into tbl_student(st_name,st_gender)values('$a','$b')") or die("Error :".mysqli_error($connection));
if ($query) {
    echo "<script>alert('Record Inserted Successfully...');window.location='dbform.php';</script>";
}