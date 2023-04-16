<?php
$insert = false;   
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);

if(!$con){
    die("Connection to this Database is Failed due to". mysqli_connect_error());
}

$name = $_POST['name'];
$bad = $_POST['bad'];
$good = $_POST['good'];


$sql = "INSERT INTO `rail`.`habits` (`name`, `bad`, `good`, `dt`) VALUES ('$name', '$bad', '$good', current_timestamp());";

if($con->query($sql) == true){
    $insert = true;
}
else {
    echo "ERROR: $sql <br> $con->error";
 }
 
 if($insert == true){
 echo "<p class='submitMsg'><b>Thanks for Submitting. Yash will Contact You Shortly</b></p>";
 }
 
$con->close();
}
?>



