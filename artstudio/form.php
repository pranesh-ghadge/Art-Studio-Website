<!--PRANESH GHADGE BT20CSE095-->
<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="cssfiles/style3.css" >
  <title>
    Login Form
  </title>
</head>


<!-------------------------------------------navbar----------------------------------------------------------------->
<?php include 'navbar.php' ?>
<!--------------------------------------------------------------------------------------------------------->

<body class="form-body">      

  <form action="userinfo.php" method="POST">
    <div class="container">
      <div class="form-heading">
        <h1>Register Here</h1>
        <p>Please fill in this form to create an account.</p>
      </div>

      <div class="form-section">
        <label for="fname"><b>First Name</b></label>
        <input type="text" placeholder="Enter your first name" name="fname" id="fname" required >
      </div>

      <div class="form-section">
        <label for="lname"><b>Last Name</b></label>
        <input type="text" placeholder="Enter your last name" name="lname" id="lname" required >
      </div>

      <div class="form-section">
        <label for="profession"><b>Select your Profession for visiting the studio</b></label>
        <select id="profession" name="profession">
          <option value="ac">Art Collector</option>
          <option value="va">Visiting Artist</option>
          <option value="cv">Common Visitor</option>
          <option value="ugo">Art Gallery official</option>
        </select>
      </div>

      <div class="form-section">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email id" name="email" id="email" required >
      </div>

      <div class="form-section">
        <h3>Select your age-group</h3>

        <label class="label-rad" for="eighteen">18-30
          <input type="radio" id="eighteen" name="age" value="eighteen" >
          <span class="checkmark"></span>
        </label>

        <label class="label-rad" for="thirty">30-50
          <input type="radio" id="thirty" name="age" value="thirty" >
          <span class="checkmark"></span>
        </label>

        <label class="label-rad" for="fifty">50+
          <input type="radio" id="fifty" name="age" value="fifty" >
          <span class="checkmark"></span>
        </label>
      </div>

      <div class="form-section">
        <h3>In which of these forms are you interested in?</h3>

        <label class="label-ch" for="sculp">Sculpture
          <input type="checkbox" id="sculp" name="choice[]" value="sculp" >
          <span class="checkname"></span>
        </label>

        <label class="label-ch" for="paint">Painting
          <input type="checkbox" id="paint" name="choice[]" value="paint" >
          <span class="checkname"></span>
        </label>

        <label class="label-ch" for="design">Designer showpieces
          <input type="checkbox" id="design" name="choice[]" value="design" >
          <span class="checkname"></span>
        </label>
      </div>

      <div class="form-section">
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required >
      </div>

      <div class="form-section">
        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required >

        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
      </div>

      <div class="set-reset">
        <input type="submit" name="signup" value="Submit" >
        <input type="reset" value="Reset" >

        <div class="container signin">
          <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>
      </div>
    </div>
  </form>

</body>


</html>