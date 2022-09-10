<!-- <div class="main_container"> -->
<div class="form-popup" id="myForm">
    <div id="close_div" >
        <a class="close_form" onclick="closeForm()">&times;</a>
    </div>
    <form action="userinfo.php" class="form-container" method="POST">
        <div class="form-heading">
            <h1>Login</h1>
        </div>
        <div class="form-section">
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>
        </div>

        <div class="form-section">
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
        </div>

        <input type="submit" name="login" value="Submit">
        <!-- <button type="button" class="btn cancel" onclick="closeForm()">Close</button> -->
    </form>
</div>
<!-- </div> -->
<?php ?>