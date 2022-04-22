<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="phphaui";
// Create connection
$conn = new mysqli($servername, $username, $password);

$conn->select_db("$dbname");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected Successfully! <br>";

$type ="";
$fullname="";
$country ="";
$addrress="";
$city="";
$postcode="";
$phone="";

if(isset($_POST["phone"])  && isset($_POST["type"]) && isset($_POST["fullname"]))
{
    $type =$_POST["type"];
    $fullname=$_POST["fullname"];
    $country =$_POST["country"];
    $addrress=$_POST["address"];
    $city=$_POST["city"];
    $postcode=$_POST["postcode"];
    $phone=$_POST["phone"];
    echo "Hệ thống đc yêu cầu chèn thông tin: ".$type . " " . $fullname . " " . $phone . "<br>";
    $sql = "SELECT * FROM test where phone='$phone'";
    $result = $conn->query($sql);
    if($result->num_rows>0) {
        echo '<br><div style="color:red">Đã tồn tại số điện thoại!</div>';
    } else {
        $sql1 = "insert into test values('$type','$fullname','$phone')";
        if($conn->query($sql1)) {
            echo '<br><div style="color:green;">Chúc mừng bạn chèn dữ liệu thành công</div>';
        } else {
            echo '<br><div style="color:red;">Chèn dữ liệu thất bại</div>';
        }
    }

    
}

