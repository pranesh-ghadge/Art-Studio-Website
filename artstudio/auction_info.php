<?php

session_start();
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'itw2website');


if (isset($_SESSION['loggedin'])) {

    $fname = $_SESSION['fname'];
    $category = $_POST['category'];
    $strcategory = implode(",", $category);
    $auction_date = $_POST['auction_date'];
    $strauction_date = implode(",", $auction_date);

    $query_2 = "INSERT INTO auction_participation (fname, category, auction_date) VALUES ('$fname', '$strcategory', '$strauction_date')";
    $query_2_run = mysqli_query($con, $query_2);

    if ($query_2_run) {
        $_SESSION['buy_msg'] = "Thank you! Your choices are recorded. The remaining information will be sent to you through email.";
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
