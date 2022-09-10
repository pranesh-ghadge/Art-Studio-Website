<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="cssfiles/style3.css" />
    <link rel="stylesheet" href="cssfiles/css_buy.css" />
    <link rel="stylesheet" href="cssfiles/modalcss.css" />

    <!-- <script src="jscript.js"></script> -->

    <title>
        Webpage- Pranesh
    </title>
</head>


<!-------------------------------------------navbar----------------------------------------------------------------->
<?php include 'navbar.php' ?>
<!--------------------------------------------------------------------------------------------------------->
<?php
if (isset($_SESSION['place_order'])) {
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
                    echo $_SESSION['buy_msg'];
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

    <div class="part-even">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 5</div>
                <img src="images/p_4.png" style="height: 350px; width: 100%;">
                <div class="text">The Weirdness</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 5</div>
                <img src="images/p_2.jpe" style="height: 350px; width: 100%;">
                <div class="text">Collosol</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 5</div>
                <img src="images/p_6.jpg" style="height: 350px; width: 100%;">
                <div class="text">The Wreck</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 5</div>
                <img src="images/p_1.jpg" style="height: 350px; width: 100%;">
                <div class="text">The Ortrange</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 5</div>
                <img src="images/s_2.jpe" style="height: 350px; width: 100%;">
                <div class="text">The New Rising</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="slide_next fade">
                <img src="images/p_4.png">
            </div>
            <div class="slide_next fade">
                <img src="images/p_2.jpe">
            </div>
            <div class="slide_next fade">
                <img src="images/p_6.jpg">
            </div>
            <div class="slide_next fade">
                <img src="images/p_1.jpg">
            </div>
            <div class="slide_next fade">
                <img src="images/s_2.jpe">
            </div>

            <div class="slide_prev fade">
                <img src="images/p_4.png">
            </div>
            <div class="slide_prev fade">
                <img src="images/p_2.jpe">
            </div>
            <div class="slide_prev fade">
                <img src="images/p_6.jpg">
            </div>
            <div class="slide_prev fade">
                <img src="images/p_1.jpg">
            </div>
            <div class="slide_prev fade">
                <img src="images/s_2.jpe">
            </div>
        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div>

    </div>

    <div class="part">
        <h1 class="buy_h1">Buy Sculptures</h1>
        <hr class="hr_art">
        <div id="first_page_buy">
            <!-- <a href="#" class="next_buy round">&#10095;</a> -->
            <div class="row">
                <div class="column">
                    <div class="card">
                        <div class="half img no_one"></div>
                        <div class="half description no_one">
                            <h1>Trinos</h1>
                            <p>Medium: Pure Copper</p>
                            <p>Size: 2m x 4m</p>
                            <p>Price: INR 10,96,980</p>
                            <div class="add_cart">Add</div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="half img no_two"></div>
                        <div class="half description no_two">
                            <h1>Mannela</h1>
                            <p>Medium: Stainless Steel</p>
                            <p>Size: 35' x 55'</p>
                            <p>Price: INR 8,98,980</p>
                            <div class="add_cart">Add</div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="column">
                    <div class="card">
                        <div class="half img no_three"></div>
                        <div class="half description no_three">
                            <h1>Imagination</h1>
                            <p>Medium: Aluminium</p>
                            <p>Size: 55' x 65'</p>
                            <p>Price: INR 11,80,980</p>
                            <div class="add_cart">Add</div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="half img no_four"></div>
                        <div class="half description no_four">
                            <h1>Orantrich</h1>
                            <p>Medium: Stainless Steel</p>
                            <p>Size: 47' x 65'</p>
                            <p>Price: INR 7,89,950</p>
                            <div class="add_cart">Add</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- <div id="second_page_buy">
            <a href="#" class="previous_buy round" onclick="show_next_page()">&#10094;</a>
            <div class="row">
                <div class="column">
                    <div class="card">
                        <div class="half img no_one"></div>
                        <div class="half description no_one">
                            <h1>Volcanos</h1>
                            <p>Medium: Pure Copper</p>
                            <p>Size: 2m x 4m</p>
                            <p>Price: INR 10,96,980</p>
                            <div class="add_cart">Add</div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="half img no_two"></div>
                        <div class="half description no_two">
                            <h1>Hatella</h1>
                            <p>Medium: Stainless Steel</p>
                            <p>Size: 35' x 55'</p>
                            <p>Price: INR 8,98,980</p>
                            <div class="add_cart">Add</div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="column">
                    <div class="card">
                        <div class="half img no_three"></div>
                        <div class="half description no_three">
                            <h1>Ruthness</h1>
                            <p>Medium: Aluminium</p>
                            <p>Size: 55' x 65'</p>
                            <p>Price: INR 11,80,980</p>
                            <div class="add_cart">Add</div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="half img no_four"></div>
                        <div class="half description no_four">
                            <h1>Ultranoth</h1>
                            <p>Medium: Stainless Steel</p>
                            <p>Size: 47' x 65'</p>
                            <p>Price: INR 7,89,950</p>
                            <div class="add_cart">Add</div>
                        </div>
                    </div>
                </div>

            </div>
        </div> -->

    </div>

    <div class="part-even">
        <h1 class="buy_h1">Participate in Auction</h1>
        <hr class="hr_art">
        <form action="auction_info.php" method="POST">
            <div class="container">
                <div class="form-section">
                    <h3>Select the category of Artwork for which you want to participate in auction</h3>
                    <label class="label-ch" for="scul">Sculpture
                        <input type="checkbox" id="scul" name="category[]" value="scul">
                        <span class="checkname"></span>
                    </label>

                    <label class="label-ch" for="paint">Painting
                        <input type="checkbox" id="paint" name="category[]" value="paint">
                        <span class="checkname"></span>
                    </label>

                    <label class="label-ch" for="nft">NFTs
                        <input type="checkbox" id="nft" name="category[]" value="nft">
                        <span class="checkname"></span>
                    </label>
                </div>
                <div class="form-section">
                    <h3>In which of the following auction dates are you interested in?</h3>

                    <label class="label-ch" for="jan">10th Jan 2022
                        <input type="checkbox" id="jan" name="auction_date[]" value="jan">
                        <span class="checkname"></span>
                    </label>

                    <label class="label-ch" for="feb">1st Feb 2022
                        <input type="checkbox" id="feb" name="auction_date[]" value="feb">
                        <span class="checkname"></span>
                    </label>

                    <label class="label-ch" for="1_march">1st March 2022
                        <input type="checkbox" id="1_march" name="auction_date[]" value="1_march">
                        <span class="checkname"></span>
                    </label>

                    <label class="label-ch" for="march">20th March 2022
                        <input type="checkbox" id="march" name="auction_date[]" value="march">
                        <span class="checkname"></span>
                    </label>

                    <label class="label-ch" for="april">10th April 2022
                        <input type="checkbox" id="april" name="auction_date[]" value="april">
                        <span class="checkname"></span>
                    </label>

                    <label class="label-ch" for="may">1st May 2022
                        <input type="checkbox" id="may" name="auction_date[]" value="may">
                        <span class="checkname"></span>
                    </label>
                </div>

                <div class="set-reset">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </div>
                <br>
                <br>

            </div>
        </form>
    </div>

    <div class="part order_third">
        <h1 class="buy_h1">Place an Order</h1>
        <hr class="hr_art">
        <form action="place_orderinfo.php" method="POST">
            <div class="container">
                <div class="form-section">
                    <label for="artwork"><b>Select the category of Artwork</b></label>
                    <select id="artwork" name="artwork">
                        <option value="ac" >Sculpture</option>
                        <option value="va" >Painting</option>
                        <option value="cv" >Wall Painting</option>
                        <!-- <option value="ugo">Art Gallery official</option> -->
                    </select>
                </div>
                <div class="form-section">
                    <label for="description_art"><b>Specification of Artwork</b></label>
                    <input type="text" placeholder="Describe here" name="description_art" id="description_art" required>
                </div>
                <div class="set-reset">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </div>
                <br>
                <br>

            </div>
        </form>


    </div>

    <script src="jscript.js"></script>
    <script src="modaljs.js"></script>




</body>

</html>