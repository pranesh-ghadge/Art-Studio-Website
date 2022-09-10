<?php

if (!isset($_SESSION['loggedin'])) {
    // if(!$_SESSION['loggedin'])
    // {
    echo '

    <marquee style="background-color: yellow;">
    <h1 style="color:firebrick">Welcome '; if(isset($_SESSION['loggedin']))
    {
        echo $_SESSION['fname'];
    }            
    else
    {
        echo "";
    } echo ' to the most fascinating Art Studio!</h1>
</marquee>
<div>
    <img src="images/LIVING-STUDIOS-logo.png" alt="logo"
        style="position: absolute; top: 10px; left: 10px; width: 75px; height: 75px;" />
</div>

<div class="navibar_div">
    <ul class="iam">
        <li class="pika"> <a class="navi" href="home.php">Home</a></li>
        <li class="pika dropdown"> <a href="javascript:void(0)" class="navi dropbtn">Artworks</a>
            <div class="dropdown-content">
                <a href="Sculptures.php">Sculptures</a>
                <a href="Paintings.php">Paintings</a>
                <a href="WallPaintings.php">Wall Paintings</a>
            </div>
        </li>
        <li class="pika dropdown"> <a href="javascript:void(0)" class="navi dropbtn">Exhibitions</a>
            <div class="dropdown-content">
                <a href="solo_exhibit.php">Solo Exhibitions</a>
                <a href="group_exhibit.php">Group Exhibitions</a>
            </div>
        </li>

        <li class="pika" style="float:right"> <a class="navi poi" onclick="openForm()">Login</a></li>
        <li class="pika" style="float:right"> <a class="navi" href="form.php">Sign Up</a></li>
        <li class="pika" style="float:right"> <a class="navi" href="contact.php">Contact Us</a></li>
        <li class="pika" style="float:right"> <a class="navi" href="buy.php">Buy Online</a></li>
    </ul>
</div>';
} else {
    echo '

    <marquee style="background-color: yellow;">
    <h1 style="color:firebrick">Welcome '; if(isset($_SESSION['loggedin']))
    {
        echo $_SESSION['fname'];
    }            
    else
    {
        echo "";
    } echo ' to the most fascinating Art Studio!</h1>
</marquee>
<div>
    <img src="images/LIVING-STUDIOS-logo.png" alt="logo"
        style="position: absolute; top: 10px; left: 10px; width: 75px; height: 75px;" />
</div>

    <div class="navibar_div">
    <ul class="iam">
        <li class="pika"> <a class="navi" href="home.php">Home</a></li>
        <li class="pika dropdown"> <a href="javascript:void(0)" class="navi dropbtn">Artworks</a>
            <div class="dropdown-content">
                <a href="Sculptures.php">Sculptures</a>
                <a href="Paintings.php">Paintings</a>
                <a href="WallPaintings.php">Wall Paintings</a>
            </div>
        </li>
        <li class="pika dropdown"> <a href="javascript:void(0)" class="navi dropbtn">Exhibitions</a>
            <div class="dropdown-content">
                <a href="solo_exhibit.php">Solo Exhibitions</a>
                <a href="group_exhibit.php">Group Exhibitions</a>
            </div>
        </li>

        <li class="pika" style="float:right"> <a class="navi" href="logout.php">Logout</a></li>
        <li class="pika" style="float:right"> <a class="navi" href="contact.php">Contact Us</a></li>
        <li class="pika" style="float:right"> <a class="navi" href="buy.php">Buy Online</a></li>
    </ul>
</div>';
}
// }
