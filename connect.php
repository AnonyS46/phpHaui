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

// $sql2="Insert into employee values (4,'Cường','Lê Mạnh',20,2,2000)";

// if($conn->query($sql2)==True) {
//     echo "Insert Successfully!";
// }else {
//     echo "Insert Failed" . $conn->error;
// }

$sql1  = "SELECT * FROM employee";
$result = $conn->query($sql1);


if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["Emp_Id"]. " - Name: " . $row["Last_Name"]. " " . $row["First_Name"]."- Age: " . $row["Age"] . "<br>";
      }
}else {
    echo "No records found";
}
$conn->close();
?>