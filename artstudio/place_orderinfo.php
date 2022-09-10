<?php

session_start();
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'itw2website');


if (isset($_SESSION['loggedin'])) {

    $artwork = "";
    $description_art = "";

    $fname = $_SESSION['fname'];
    $artwork = $_POST['artwork'];
    $description_art = $_POST['description_art'];

    $query_3 = "INSERT INTO place_order_data (fname, artwork, description_art) VALUES ('$fname','$artwork','$description_art')";
    $query_3_run = mysqli_query($con, $query_3);

    if ($query_3_run) {
        // $_SESSION['status'] = "Inserted Successfully";
        $_SESSION['buy_msg'] = "Thank you! Your order is recorded. The remaining information will be sent to you through email.";
        $_SESSION['place_order'] = true;
        header("Location: buy.php");
    } else {
        $_SESSION['buy_msg'] = "Please insert data";
        $_SESSION['place_order'] = false;
        header("Location: buy.php");
    }
} else {
    $_SESSION['buy_msg'] = "First Login to submit the information";
    $_SESSION['place_order'] = false;
    header("Location: buy.php");
    
}
