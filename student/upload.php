<?php
include '../database/dbcon.php';
if(isset($_POST['submit'])){
  
$name = $_POST['name'];
$prn = $_POST['prn'];
$email =$_POST['email'];
$branch =$_POST['branch'];
$year = $_POST['year'];
$file = $_FILES['photo'];

// print_r($file);

$filename =$file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];


if($fileerror == 0){
    $destfile = 'upload/'.$filename;
    // echo "$destfile";
    move_uploaded_file($filepath, $destfile);

    $insertuery = " insert into registration(name, prn, email, branch, year, pic ) values('$name','$prn', '$email', '$branch', '$year', '$destfile')";
 
    $query = mysqli_query($con,$insertuery);

    if($query){
        echo "Inserted";
    }else{
        echo "not inserted";
    }
    
    header('location:../index.php');
}

}else{
    echo "no button has been clicked";
}
?>