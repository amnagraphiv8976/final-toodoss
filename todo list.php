<!Doctype html>
<Head>
</head>
<body>
<form method="POST">
<div id="myDIV" class="header">
  <h2 style="margin:5px">My To Do List</h2>
  <input style="margin:10px" type="text" id="myInput" name="myInput" placeholder="Title...">
  <button class="btn">Add</button>
</div>

<ul id="myUL">
  <!-- <li>Hit the gym</li>
  <li>Pay bills</li> -->
</ul>
</body>
</form>
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
if($conn->query($sql) == true) {
    echo "<br>" . "";
} else {
    echo  "<br>" . "error";
}

$sqli = "SELECT * FROM `todosrr`";
$result = $conn->query($sqli);

if ($result->num_rows > 0) {
    // echo "<table style='border;'><tr><th>ID</th><th>Username</th><th>Passwords</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
    // output data of each row
        echo "<li>" .  "  " . $row["Items"]. "</li>";
    }
  } else {
    echo "0 results";
  }
$conn->close()
?>