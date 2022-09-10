<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="cssfiles/style3.css" />
    <link rel="stylesheet" href="cssfiles/css_contact.css" />
    <link rel="stylesheet" href="cssfiles/modalcss.css" />

    
    <title>
        Webpage- Pranesh
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<!-------------------------------------------navbar----------------------------------------------------------------->
<?php include 'navbar.php' ?>
<!--------------------------------------------------------------------------------------------------------->
<?php include 'login.php' ?>


<body>
    <div id="outer_div">
<div id="main_div_contacts">

    <a name="chiko"></a>
            <h1 class="display-4 heading_page">Hello <?php if(isset($_SESSION['loggedin']))
               {
                   echo $_SESSION['fname'];
               }            
               else
               {
                   echo "User";
               } ?>!</h1>
            <p>(Hover over the icons to get the details.)</p>
            <hr class="hr_style">
            <br>
            <br>

    <a name="treeko"></a>
            <p class="lead">
                You can contact the web host through instagram.

            <div class="pikachu">
                <img src="images/instagram.png" alt="Avatar" class="image">
                <div class="overlay">
                <a href="#" class="icon" title="LIVING_Studios_014">
                  <i class="fa fa-user"></i>
                </a>
                </div>
            </div>

              <!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
    <a name="turtwig"></a>
            </p>
            <hr class="my-4">
            <p class="lead" style="font-size:20px;">Or you can send him a mail.</p>
            <div class="pikachu">
                <img src="images/gmail.png" alt="Avatar" class="image">
                <div class="overlay">
                <a href="#" class="icon" title="livingstudios@gmail.com">
                  <i class="fa fa-user"></i>
                </a>
                </div>
              </div>
            
    <a name="marshtomp"></a>
            </p>
            <hr class="my-4">
            <p class="lead" style="font-size:20px;">Or you can connect on Facebook.</p>
            <div class="pikachu">
                <img src="images/facebook.png" alt="Avatar" class="image">
                <div class="overlay">
                <a href="#" class="icon" title="Living Studios Official">
                  <i class="fa fa-user"></i>
                </a>
                </div>
              </div>
    <br>
    <br>
    <br>
</div>
</div>
    

    <div id="myDIV" class="glass-panel">
        <!-- <p style="text-align: right; padding-right: 10px;" onclick="func()">close</p> -->
        <h3>Direction</h3>
        <hr class="hr_style">
        <br>
        <br>
        <ul id="aama">
        <li><a href="#chiko" style="color: white;">General</a></li>
        <li><a href="#treeko" style="color: white;">Instagram</a></li>
        <li><a href="#turtwig" style="color: white;">E-mail</a></li>
        <li><a href="#marshtomp" style="color: white;">Facebook</a></li>

        <!-- <li><a href="#" style="color: white;">Pixart of Studio and Gallery</a></li>
        <li><a href="#" style="color: white;">Our Projects</a></li> -->
        
        </ul>
    </div>

    <script src="modaljs.js"></script>



</body>
</html>