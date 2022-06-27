<?php

$servername="localhost";
$username="root";
$password="";
$database_name="registration forms";


$con=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
    die("Connection Failed:" .mysqli_connect_error());
}


if(isset($_POST['save']))
{
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $address= $_POST['address'];
    $address2= $_POST['address2'];
    $email= $_POST['email'];
    $state= $_POST['state'];
    $district= $_POST['district'];
    $village= $_POST['village'];
    $areacode= $_POST['areacode'];
    $phonenumber= $_POST['phonenumber'];
    $aadharnumber= $_POST['aadharnumber'];

    $sql_query="INSERT INTO register(firstname,lastname,address,address2,email,state,
    district,village,areacode,phonenumber,aadharnumber)
    VALUES('$firstname','$lastname','$address','$address2','$email','$state',
    '$district','$village','$areacode','$phonenumber','$aadharnumber')";


if (mysqli_query($conn, $sql_query))
{
    echo"New Details Entry Inserted Successfully !";
}
else{
    echo "Error: " . $sql . "" .mysqli_error($conn);
}
mysqli_close($conn);





}


?>