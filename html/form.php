<?php
$n = $_POST['firstname'];
$c = $_POST['secondname'];    
$d = $_POST['pass'];
$con = mysqli_connect("localhost", "root", "", "ecommerce");
$sql = "INSERT INTO ecommerce (first_name, second_name, password) VALUES ('$n', '$c', '$d')";
$r = mysqli_query($con, $sql);
if ($r) {
    header("Location: index.html");
} else {
    echo "Not added";
}
?>
