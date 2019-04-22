<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php+mysql</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script>
        $(document).ready(function(){
            var degree = 0;
            $('.card').click(function(){
                degree += 180;
                $(this).css("transform","rotateY(" + degree + "deg)");
            });
            $('.login-link').click(function(){
                $('.login').css("display","block");
            });
            $('.signup-link').click(function(){
                $('.signup').css("display","block");
            });
            $('.crossings').click(function(){
                $('.modalss').hide();
            });
        });
        // ajax + jquery
        $(document).ready(function(){
            $('#username').keyup(function(){
                var regexp = /^[a-zA-Z]*[\w]?[a-zA-Z0-9]+$/;
                if(regexp.test($('#username').val())){
                    $('#username').siblings('.right').css("display","block");
                    $('#username').siblings('.wrong').css("display","none");
                    $('#username').closest('.form-control').css("box-shadow","0 0 10px 5px limegreen");

                }else {
                    $('#username').siblings('.wrong').css("display","block");
                    $('#username').siblings('.right').css("display","none");
                    $('#username').closest('.form-control').css("box-shadow","0 0 10px 5px firebrick");
                }
            });
            $('#email').keyup(function(){
                regexp = /^[a-zA-Z]+[a-zA-Z0-9._]*\@[a-zA-Z]+\.[a-zA-Z]{2,4}$/;
                if(regexp.test($('#email').val())){
                    $('#email').siblings('.right').css("display","block");
                    $('#email').siblings('.wrong').css("display","none");
                    $('#email').closest('.form-control').css("box-shadow","0 0 10px 5px limegreen");
                }else {
                    $('#email').siblings('.wrong').css("display","block");
                    $('#email').siblings('.right').css("display","none");
                    $('#email').closest('.form-control').css("box-shadow","0 0 10px 5px firebrick");
                }
            });
            $('#password').keyup(function(){
                if($('#password').val().length >= 6){
                    $('#password').siblings('.right').css("display","block");
                    $('#password').siblings('.wrong').css("display","none");
                    $('#password').closest('.form-control').css("box-shadow","0 0 10px 5px limegreen");
                }else {
                    $('#password').siblings('.wrong').css("display","block");
                    $('#password').siblings('.right').css("display","none");
                    $('#password').closest('.form-control').css("box-shadow","0 0 10px 5px firebrick");
                }
            });
            $('#cpassword').keyup(function(){
                if($('#password').val() == $('#cpassword').val()){
                    $('#cpassword').siblings('.right').css("display","block");
                    $('#cpassword').siblings('.wrong').css("display","none");
                    $('#cpassword').closest('.form-control').css("box-shadow","0 0 10px 5px limegreen");
                }else {
                    $('#cpassword').siblings('.wrong').css("display","block");
                    $('#cpassword').siblings('.right').css("display","none");
                    $('#cpassword').closest('.form-control').css("box-shadow","0 0 10px 5px firebrick");
                }
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <div class="card-container">
            <div class="card" title="click to flip">
                <div class="face face1">
                    <p>Don't have an account?</p>
                    <h2><a href="#" class="signup-link">signup</a></h2>
                </div>
                <div class="face face2">
                    <h2><a href="#" class="login-link">login</a></h2>
                </div>
            </div>
        </div>

        <section class="signup modalss">
            <span class="crossings"><i class="fas fa-times"></i></span>
            <form action="registration.php" method="post" onsubmit="return formValidation();">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="enter username" autocomplete="off">
                    <span class="right"><i class="far fa-check-circle"></i></span>
                    <span class="wrong"><i class="far fa-times-circle"></i></span>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="example@example.com" autocomplete="off">
                    <span class="right"><i class="far fa-check-circle"></i></span>
                    <span class="wrong"><i class="far fa-times-circle"></i></span>
                </div>
                <div class="form-group">
                    <label for="password">password:</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="enter password" autocomplete="off">
                    <span class="right"><i class="far fa-check-circle"></i></span>
                    <span class="wrong"><i class="far fa-times-circle"></i></span>
                </div>
                <div class="form-group">
                    <label for="confirm_password">confirm password:</label>
                    <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="re-enter password" autocomplete="off">
                    <span class="right"><i class="far fa-check-circle"></i></span>
                    <span class="wrong"><i class="far fa-times-circle"></i></span>
                </div>
                <button type="submit" class="btn btn-primary">SignUp</button>
            </form>
        </section>

        <section class="login modalss">
            <span class="crossings"><i class="fas fa-times"></i></span>
            <form action="validation.php" method="post">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" name="username" class="form-control" placeholder="enter username" required autocomplete="off" default="">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" placeholder="enter password" required autocomplete="off">
                </div>
                <a href="#" class="a-primary float-right">Forgot your password?</a>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </section>
    </div>
    
    <!-- javascript source to validate form before it is redirected to registration page -->
    <script>
        function formValidation(){
            var uname = document.getElementById('username').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var cpassword = document.getElementById('cpassword').value;
            var unameregexp = /^[a-zA-Z]*[\w]?[a-zA-Z0-9]+$/;
            var emailregexp = /^[a-zA-Z]+[a-zA-Z0-9._]*\@[a-zA-Z]+\.[a-zA-Z]{2,4}$/;
            if(uname != '' && email != '' && password != ''){
                if(uname.match(unameregexp)){
                    if(email.match(emailregexp)){
                        if(password == cpassword){
                            alert("Validation passed!");
                            return true;
                        }else{
                            alert("please match the password to continue");
                            return false;
                        }
                    }else{
                        alert("Email input is incorrect");
                        return false;
                    }
                }else{
                    alert("Username field contains illegal characters!");
                    return false;
                }
            }else{
                alert("All entries are invalid!");
                return false;
            }
        }
    </script>
</body>
</html>