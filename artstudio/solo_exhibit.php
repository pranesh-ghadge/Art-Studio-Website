<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="cssfiles/style3.css" />
    <link rel="stylesheet" href="cssfiles/exhibit_css.css" />
    <link rel="stylesheet" href="cssfiles/modalcss.css" />

    
    <title>
        Webpage- Pranesh
    </title>
</head>

<!-------------------------------------------navbar----------------------------------------------------------------->
<?php include 'navbar.php' ?>
<!--------------------------------------------------------------------------------------------------------->
<?php include 'login.php' ?>


<body>
    <div class="row">
        <h1 class="exhibit_h1">Solo Exhibitions - India</h1>
        <hr class="hr_art">
        <div class="column">
            <div class="card">
                <div class="img no_one"></div>
                <div class="description no_one">
                    <h1>Woman - The Power</h1>
                    <p>10th April 2020, Vadodara, India</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate a veritatis animi alias praesentium aliquam, quam unde.</p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="img no_three"></div>
                <div class="description no_three">
                    <h1>Tre Cries</h1>
                    <p>24th July 2020, Indore, India</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate a veritatis animi alias praesentium aliquam, quam unde.</p>
                </div>
            </div>
        </div>
        </div>

        <br>
        <br>

    <div class="row">
        <h1 class="exhibit_h1">Solo Exhibitions - Other Countries</h1>
        <hr class="hr_art">
        <div class="column">
            <div class="card">
                <div class="img no_two"></div>
                <div class="description no_two">
                    <h1>Arranging The Nature</h1>
                    <p>12th Sep 2020, London, UK</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate a veritatis animi alias praesentium aliquam, quam unde.</p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="img no_four"></div>
                <div class="description no_four">
                    <h1>Describe - The Void</h1>
                    <p>13th Oct 2020, New York City, USA</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate a veritatis animi alias praesentium aliquam, quam unde.</p>
                </div>
            </div>
        </div>
        
    </div>

    <script src="modaljs.js"></script>


</body>
</html>