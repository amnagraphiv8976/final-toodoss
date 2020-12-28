<?php
//Create Connection
$conn = mysqli_connect("localhost" , "root" , "" , "test");

if($conn->connect_error) {
    die("connection failed");
}

// if(isset($_POST['user'], $_POST['pass'])) {
//     $email = $_POST['user'];
//     $password = $_POST['pass'];
//     $sql = "INSERT INTO `test` .`level`(`Username`, `Passwords`) VALUES ('$email','$password');";
// }

// if($conn->query($sql) == true) {
//     echo "<br>" . "inserted Value";
// } else {
//     echo  "<br>" . "error";
// }

$sqli = "SELECT ID, Username, Passwords FROM level";
$result = $conn->query($sqli);

if ($result->num_rows > 0) {
    echo "<table style='border;'><tr><th>ID</th><th>Username</th><th>Passwords</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td> " . $row["ID"]. "</td><td>" . $row["Username"]. " " . $row["Passwords"]. "</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
$conn->close()
?>