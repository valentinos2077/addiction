<?php
/*Imports*/
session_start();
require '../includes/config.inc.php';
/*Data Fetch*/

$Email = $_POST['email'];
$Password = $_POST['password'];
$pwd = md5($Password);

/*Query*/
if (empty($_POST['email']) || empty($_POST['password'])) {
    $error = true;
    $_SESSION['error'] = "Field Cannot be Empty!!!";
    echo '<script>window.location.href="login.php?error=true"</script>';
    exit();
}

$sql = "SELECT * FROM `admin` WHERE a_email='$Email' AND a_password='$pwd'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $a_id = $row['a_id'];
        $a_email = $row['a_email'];
        $a_name = $row['a_name'];
    }
    $_SESSION['a_id'] = $a_id;
    $_SESSION['a_email'] = $a_email;
    $_SESSION['a_name'] = $a_name;
    echo '<script>window.location.href="index.php"</script>';
} else {
    $error = true;
    $_SESSION['error'] = "Incorrect Credentials!!!";
    echo '<script>window.location.href="login.php?error=true"</script>';
    exit();
}