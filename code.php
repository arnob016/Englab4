<?php

include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO test(username, password) VALUES('$username', '$password')";
$run = mysqli_query($con, $query);

echo '\n';

if (!$run) {
    echo 'submission failed';
} else {
    echo 'submission successful!';
}
?>
