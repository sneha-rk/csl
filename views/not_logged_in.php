<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}?>
<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            //echo $message;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel='stylesheet' href='views/stylesheets/style.css' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>


</head>
<body>
    <br><br><br><br><br>
<h1 style="color:white;text-align:center;">The Crowd Sourced Library</h1>
<div class="login-box">
    <div class="lb-header">
        <a href="#" class="active" id="login-box-link">Login</a>
        <a href="#" id="signup-box-link">Sign Up</a>
    </div>
    <form class="email-login" method="POST" action="index.php">
        <div class="u-form-group">
            <input id="login_input_username" class="login_input" type="text" placeholder= "Username" name="user_name" required/>
        </div>
        <div class="u-form-group">
            <input placeholder="Password" id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required //>
        </div>

        <div class="u-form-group">
            <input type="submit"  name="login" value="Log in" />
        </div>
        <!--<div class="u-form-group">
            <a href="#" class="forgot-password">Forgot password?</a>
        </div>-->

    </form>

    <form class="email-signup" method="POST" action="register.php">
        <div class="u-form-group">
            <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required placeholder="Username"/>
        </div>
        <div class="u-form-group">
            <input id="login_input_email" class="login_input" type="email" name="user_email" required placeholder="Email"/>
        </div>
        <div class="u-form-group">
            <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" placeholder="Password"/>
        </div>
        <div class="u-form-group">
            <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" placeholder="Confirm Password"/>
        </div>
        <div class="u-form-group button">
            <input id="signup" type="submit" value="Sign Up" name="register">
        </div>
    </form>
</div>
<script>
    $(".email-signup").hide();
    $("#signup-box-link").click(function(){
        $(".email-login").fadeOut(100);
        $(".email-signup").delay(100).fadeIn(100);
        $("#login-box-link").removeClass("active");
        $("#signup-box-link").addClass("active");
    });
    $("#login-box-link").click(function(){
        $(".email-login").delay(100).fadeIn(100);;
        $(".email-signup").fadeOut(100);
        $("#login-box-link").addClass("active");
        $("#signup-box-link").removeClass("active");
    });

</script>
</body>
</html>
