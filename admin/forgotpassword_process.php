<?php
/*Imports*/
session_start();
require 'config.php';
/*Data Fetch*/

$Email = $_POST['email'];

/*Query*/

$sql = "SELECT * FROM `admin` WHERE a_email='$Email'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $a_id = $row['a_id'];
        $a_email = $row['a_email'];
        $a_password = $row['a_password'];
    }

    require 'emailconfig.php';
    $mail->addAddress($email, 'Admin');     // Add a recipient
    $mail->isHTML(true);                    // Set email format to HTML
    $mail->Subject = 'Password Of The Admin';
    $mail->Body .= '<h3 style="color:black;">OTP:-  ' . $a_email . '</h3>';
    if ($mail->send()) {

        echo 'Success.';
        header('location:login.php');

    } else {

        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        header('location:forgotpassword.php');
    }


} else {
    echo '<script>window.location.href="forgotpassword.php"</script>';
}


?><?php