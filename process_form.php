<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $donation = $_POST['donation'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    // Redirect to receipt page with form data
    header("Location: receipt.php?name=$name&mobile=$mobile&donation=$donation&address=$address&message=$message");
    exit();
}
?>
