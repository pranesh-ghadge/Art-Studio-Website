<!--PRANESH GHADGE BT20CSE095-->
<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="cssfiles/style3.css" />
    <link rel="stylesheet" href="cssfiles/modalcss.css" />
    <script src="jscript.js"></script>

    <title>
        Webpage- Pranesh
    </title>
</head>

<a name="home"></a>

<marquee style="background-color: yellow;">
    <h1 style="color:firebrick">Welcome <?php if (isset($_SESSION['loggedin'])) {
                                            echo $_SESSION['fname'];
                                        } else {
                                            echo "";
                                        } ?> to the most fascinating Art Studio!</h1>
</marquee>
<div>
    <img src="images/LIVING-STUDIOS-logo.png" alt="logo" style="position: absolute; top: 10px; left: 10px; width: 75px; height: 75px;" />
</div>
<!-------------------------------------------navbar----------------------------------------------------------------->

<?php
if (!isset($_SESSION['loggedin'])) {
    // if(!$_SESSION['loggedin'])
    // {
    echo '

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

        <li class="pika"> <a class="navi poi" onclick="myFunction()">Explore</a></li>

        <li class="pika" style="float:right"> <a class="navi poi" onclick="openForm()" >Login</a></li>
        <li class="pika" style="float:right"> <a class="navi" href="form.php">Sign Up</a></li>
        <li class="pika" style="float:right"> <a class="navi" href="contact.php">Contact Us</a></li>
        <li class="pika" style="float:right"> <a class="navi" href="buy.php">Buy Online</a></li>
    </ul>
</div>';
}
// }
else {
    echo '

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

        <li class="pika"> <a class="navi poi" onclick="myFunction()">Explore</a></li>

        <li class="pika" style="float:right"> <a class="navi" href="logout.php">Logout</a></li>
        <li class="pika" style="float:right"> <a class="navi" href="contact.php">Contact Us</a></li>
        <li class="pika" style="float:right"> <a class="navi" href="buy.php">Buy Online</a></li>
    </ul>
</div>';
}

?>
<!--------------------------------------------------------------------------------------------------------->


<?php
if (isset($_SESSION['status'])) {
?>
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close_modal">&times;</span>
                <!-- <h2>Modal Header</h2> -->
            </div>
            <div class="modal-body">
                <p class="message">
                    <?php
                    echo $_SESSION['status'];
                    ?>

                </p>
            </div>
            <div class="modal-footer">
                <!-- <h3>Modal Footer</h3> -->
            </div>
        </div>

    </div>
<?php
    unset($_SESSION['status']);
}
?>

<?php include 'login.php' ?>


<body>
    <a name="intro"></a>
    <div class="part first">
        <div class="inner-block">
            <div class="content-block">
                <h1>WE CREATE
                    <strong>THE WORLD</strong>
                </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate a veritatis animi alias
                    praesentium aliquam, quam unde. Nesciunt, voluptatibus? Dolorum!</p>
            </div>
        </div>
        <div class="outerline">
        </div>
        
            <div class="pic-block"></div>
        

    </div>
    <div class="part squir">
        <div class="column">
            <h1>ABSTRACT</h1>
            <h1> ARTWORK </h1>
            <h1> CREATION</h1>
        </div>
        <div class="column right">
            <p id="demo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt porro sint maiores officia velit
                ducimus ipsum excepturi quos quod rem.Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor
                repudiandae omnis ut itaque excepturi doloremque, fuga ipsa deserunt est? Hic!</p>

            <div class="learn">
                LEARN MORE
            </div>
        </div>
    </div>
    <a name="work"></a>
    <div class="part-even char">
        <div class="block1"></div>
        <div class="block2"></div>
        <div class="block3">
            <h1>LIVING
                IDENTITY
                CREATIVE
                STUDIO
            </h1>
            <ul>
                <li>Accepts Government Orders</li>
                <li>Accepts personal individual orders</li>
                <li>Conducts Art Shows, Exhibition cum Sales</li>
                <li>Lends the Art Gallery to other Artists</li>
            </ul>

            <div class="view">
                VIEW MORE
            </div>
        </div>
    </div>
    <a name="effect"></a>
    <div class="part third">
        <div class="port">
            <h1>WHY US?</h1>
            <ul>
                <li>On Time finishing of work</li>
                <li>Best quality</li>
                <li>Messege embedded perfectly in artwork</li>
                <li>Brand Identity</li>
            </ul>
        </div>
        <div class="port image"></div>
    </div>
    <a name="pixart"></a>
    <div class="part-even bulb">
        <div class="hh">
            <h1>VIEW OF THE STUDIO & GALLERY</h1>
        </div>
        <div class="rows">
            <div class="col-image a"></div>
            <div class="col-image b"></div>
            <div class="col-image c"></div>
        </div>
        <div class="rows">
            <div class="col-image d"></div>
            <div class="col-image e"></div>
            <div class="col-image f"></div>
        </div>
    </div>

    <a name="project"></a>
    <div class="part fourth">
        <div class="right-para">
            <div class="cards">
                <h1>Sculptures</h1>
                <p>fbsckj sndns ndnd nsdnsd kdn snand ndn sdms ekr fdc jdde ds</p>
            </div>
            <div class="cards">
                <h1>Paintings</h1>
                <p>fbsckj sndns ndnd nsdnsd kdn snand ndn sdms ekr fdc jdde ds</p>
            </div>
            <div class="cards">
                <h1>Logos</h1>
                <p>fbsckj sndns ndnd nsdnsd kdn snand ndn sdms ekr fdc jdde ds</p>
            </div>
            <div class="cards">
                <h1>Wall Arts</h1>
                <p>fbsckj sndns ndnd nsdnsd kdn snand ndn sdms ekr fdc jdde ds</p>
            </div>
        </div>
    </div>

    <div class="part-even" id="blockoftable">

    </div> --

    <div class="part-even temp">

    </div>

    <div id="myDIV">
        <a class="close" onclick="func()"></a>
        <h3>Explore Us</h3>
        <ul id="aama">
            <li><a href="#intro" style="color: white;">Introduction</a></li>
            <li><a href="#work" style="color: white;">Our Working</a></li>
            <li><a href="#effect" style="color: white;">Our Effectiveness</a></li>
            <li><a href="#pixart" style="color: white;">Pixart of Studio and Gallery</a></li>
            <li><a href="#project" style="color: white;">Our Projects</a></li>
        </ul>
    </div>

    <!-- <div id="clock"><a href="#" class="close"></a>
    </div> -->

    <script src="modaljs.js"></script>


</body>

</html>