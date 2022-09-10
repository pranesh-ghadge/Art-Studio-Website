<?php
session_start();
$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'itw2website');


///////////////////////////////// New User Signup ////////////////////////////////////
if(isset($_POST['signup']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$profession = $_POST['profession'];
$email = $_POST['email'];
$age = $_POST['age'];
$password = $_POST['psw'];
$rpassword = $_POST['psw-repeat'];
$choice = $_POST['choice'];
$strchoice = implode(",", $choice);

// $password=str_replace("<","&lt;",$password);
// $password=str_replace(">","&gt;",$password);
// $password=str_replace("'","''",$password);
// $rpassword=str_replace("<","&lt;",$rpassword);
// $rpassword=str_replace(">","&gt;",$rpassword);
// $rpassword=str_replace("'","''",$rpassword);

$_SESSION['fname'] = $fname;

/////////////////////////////////////////////////////////////////
$sql = "SELECT * FROM userinfodata WHERE email='$email'";
$result = mysqli_query($con, $sql);
$num_rows_selected = mysqli_num_rows($result);

if ($num_rows_selected == 1) {
    $_SESSION['sameemail'] = true;
    $_SESSION['status'] = "Entered email already have an account. Try another email id.";
    // $_SESSION['loggedin'] = false;
    header("Location: home.php");
} 
else {
    if ($password == $rpassword) {
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO userinfodata (fname, lname, profession, email, age, choice, password) VALUES ('$fname','$lname','$profession','$email','$age','$strchoice', '$hashPassword')";
        $query_run = mysqli_query($con, $query);

        if ($query_run) {
            $_SESSION['status'] = "Loggedin Successfully";
            $_SESSION['loggedin'] = true;
            header("Location: home.php");
        } else {
            $_SESSION['status'] = "Data Not Inserted";
            // $_SESSION['loggedin'] = false;
            header("Location: home.php");
        }
    } else {
        $_SESSION['incorrectPassword'] = true;
        $_SESSION['status'] = "Both Passwords should be same";
        // $_SESSION['loggedin'] = false;
        header("Location: home.php");
    }
}
}

/////////////////////////// Existing User Login /////////////////////////////////
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['psw'];
    // $hashPassword = password_hash($password, PASSWORD_DEFAULT);

    $email_search = " SELECT * FROM userinfodata WHERE email= '$email' ";
    $query = mysqli_query($con, $email_search);
    $email_count = mysqli_num_rows($query);

    if ($email_count) {
        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['password'];
        $pass_decode = password_verify($password, $db_pass);
        if ($pass_decode) {
            $_SESSION['status'] = "Loggedin Successfully";
            $_SESSION['loggedin'] = true;
            $_SESSION['fname'] = $email_pass['fname'];

            header("Location: home.php");
        } else {
            $_SESSION['status'] = "Incorrect Password";
            // $_SESSION['loggedin'] = false;
            header("Location: home.php");
        }
    } else {
        $_SESSION['status'] = "Incorrect Email";
        // $_SESSION['loggedin'] = false;
        header("Location: home.php");
    }
}
?>