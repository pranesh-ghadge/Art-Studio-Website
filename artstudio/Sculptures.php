<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="cssfiles/css_artworks.css" />
    <link rel="stylesheet" href="cssfiles/style3.css" />
    <link rel="stylesheet" href="cssfiles/modalcss.css" />

    
    <title>
        Paintings
    </title>
</head>

<!-------------------------------------------navbar----------------------------------------------------------------->
<?php include 'navbar.php' ?>
<!--------------------------------------------------------------------------------------------------------->
<?php include 'login.php' ?>


<body>

<div class="artwork_maindiv">
    <h1>Let's Feel the Sculptures</h1>
    <hr class="hr_art">
    <p><i>“All you need to paint is a few tools, a little instruction, and a vision in your mind.” </i><b>Bob Ross</b></p>

<div class="border_art">

<div class="row">
    <div class="column">
        
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="images/s_1.jpe" alt="Avatar" style="width:300px;height:300px;">
                </div>
                <div class="flip-card-back">
                    <div class="bg-image" style="background-image: url('images/s_1.jpe');"></div>

                    <div class="bg-text">
                    <h1>The Wreck</h1> 
                    <hr class="hr_stylee">
                    <p>dimension: 52"x 54", oil paint on canvas.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="column">
        
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="images/s_2.jpe" alt="Avatar" style="width:300px;height:300px;">
                </div>
                <div class="flip-card-back">
                    <div class="bg-image" style="background-image: url('images/s_2.jpe');"></div>

                    <div class="bg-text">
                    <h1>The Collosol</h1> 
                    <hr class="hr_stylee">
                    <p>dimension: 65"x 44", acrylic on canvas.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<div class="row">
    <div class="column">
        
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="images/s_3.jpg" alt="Avatar" style="width:300px;height:300px;">
                </div>
                <div class="flip-card-back">
                    <div class="bg-image" style="background-image: url('images/s_3.jpg');"></div>

                    <div class="bg-text">
                    <h1>Loudness</h1> 
                    <hr class="hr_stylee">
                    <p>dimension: 52"x 54", water colour on canvas.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="column">
        
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="images/s_4.jpg" alt="Avatar" style="width:300px;height:300px;">
                </div>
                <div class="flip-card-back">
                    <div class="bg-image" style="background-image: url('images/s_4.jpg');"></div>

                    <div class="bg-text">
                    <h1>Weirdness</h1> 
                    <hr class="hr_stylee">
                    <p>dimension: 35"x 45", acrylic on wood.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<div class="row">
    <div class="column">
        
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="images/s_5.jpg" alt="Avatar" style="width:300px;height:300px;">
                </div>
                <div class="flip-card-back">
                    <div class="bg-image" style="background-image: url('images/s_5.jpg');"></div>

                    <div class="bg-text">
                    <h1>Bansuri</h1> 
                    <hr class="hr_stylee">
                    <p>dimension: 52"x 54", oil paint on wood.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="column">
        
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="images/s_6.jpg" alt="Avatar" style="width:300px;height:300px;">
                </div>
                <div class="flip-card-back">
                    <div class="bg-image" style="background-image: url('images/s_6.jpg');"></div>

                    <div class="bg-text">
                    <h1>Rising Nature</h1> 
                    <hr class="hr_stylee">
                    <p>dimension: 65"x 44", acrylic on canvas.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

</div>
</div>

<script src="modaljs.js"></script>


</body>
</html>