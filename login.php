<?php 

$Username = $_POST['Username'];
$Password = $_POST['Password'];

$con = new mysqli("localhost","root","","user_db");
if($con->connect_error){
    die("Failed to connect:" .$con->connect_error);
} else {
    $stmt = $con->prepare("select * from user_tbl where Username = ?");
    $stmt->bind_param("s",$Username);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if($data['Password'] === $Password){
            header("location:Home.html");
        } else{
            echo"invalid username or password" ;
        }

    }else{
        echo"invalid username or password" ;
    }
}
?>