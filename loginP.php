<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>


<link href="css/login.css" rel="stylesheet" type="text/css">

<div class="login-wrap">
    <div class="login-html">
    
       <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
       <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
            <div class="sign-in-htm">
       		<form method="post" action="login.php">
                <div class="group">
                <br> <br> <br>
                    <label for="user"></label>
                    <input id="user" type="text" class="input" placeholder="USERNAME" name="username">
                </div>
                <div class="group">
                    <label for="pass"></label>
                    <input id="pass" type="password" class="input" data-type="password" placeholder="PASSWORD" name="password">
                </div>
                <div class="group">
                    <input id="check" type="checkbox" class="check" checked>
                    <label for="check"><span class="icon"></span> Remember me</label> 
                </div>
                <button name="toLogin" type="submit" class="button1">Sign In</button>
                </form>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <a href="#forgot">Forgot Password?</a>
                </div>
            </div>
            <div id="sign-up" class="sign-up-htm">
                <div class="group">
                <br>
                <br>
                <br>
                <form  name="image" method="post" action="SignUp.php" method="post" enctype= "multipart/form-data">
                    <label for="user"></label>
                    <input id="user" type="text" class="input" placeholder="USERNAME" name="username">
                </div>
                <div class="group">
                    <label for="firstname"></label>
                    <input id="firstname" type="text" class="input" placeholder="FIRSTNAME" name="firstname">
                </div>
                <div class="group">
                    <label for="lastname"></label>
                    <input id="lastname" type="text" class="input" placeholder="LASTNAME" name="lastname">
                </div>
                <div class="group">
                    <label for="pass"></label>
                    <input id="pass" type="password" class="input" data-type="password" placeholder="PASSWORD" name="password">
                </div>
                <div class="group">
                    <label for="cpass"></label>
                    <input id="cpass" type="password" class="input" data-type="password" placeholder="REPEAT PASSWORD" name="ConPassword">
                </div>
                <div class="group">
                    <label for="email"></label>
                    <input id="email" type="email" class="input" placeholder="EMAIL" name="email">
                </div>
                  <div class="group">
                    <label for="pass"></label>
                    <input id="image" name="image" type="file" class="input" data-split-icon="date" placeholder="PHOTO">
                </div>
                    <div class="group">
                    <label for="pass"></label>
                    <input name="date" type="date" class="input" data-split-icon="date" placeholder="DATE OF BIRTH">
                </div>


                <button name="toSubmit" type="submit" class="button1">Submit</button>
                </form>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <label for="tab-1">Already Member?</label>
                </div>
            </div>
        </div>
    </div>
</div>
</head>
</html>