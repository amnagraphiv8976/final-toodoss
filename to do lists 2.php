<?php
$conn = new mysqli ("localhost" , "root" , "", "todos");

// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }
//   echo "Connected successfully";

  if(isset($_POST['myInput'])) {
    $items = $_POST['myInput'];
    $sql = "INSERT INTO `todos` .`todosrr` (`Items`) VALUES ('$items');";
}

// if($conn->query($sql) == true) {
//     echo "<br>" . "inserted Value";
// } else {
//     echo  "<br>" . "error";
// }

$sqli = "SELECT * FROM `todosrr`";
$result = $conn->query($sqli);

if ($result->num_rows > 0) {
    // echo "<table style='border;'><tr><th>ID</th><th>Username</th><th>Passwords</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["ID"] . $row["Items"]. "</li>";
    }
  } else {
    echo "0 results";
  }
// $conn->close()
?>