<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
    <script src="https://kit.fontawesome.com/5f0f0f2d20.js"></script>
</head>
<body>
    <div class="navigation">
        <div class="first">
            <div class="logo">
                <img src="interviewcrew.png" alt="">
            </div>
        </div>
        <div id="logoregister">
            <a href="register.html">Register</a>
        </div>
    </div>
    <div class="container">
        <div class="back"> 
            <form action="" id="registerform">
                <label for="username">
                    Username
                </label>
                <div>
                    <input type="text" name="username" id="username" >
                </div>
                <label for="password">
                    Password
                </label>
                <div>
                    <input type="password" name="password" id="password" >
                </div>
                   
                    <div class="buttons">
                        <button class="reg">
                            <a id="ref" onclick="validate()" href="">Submit</a>
                        </button>
                </div>
                <div class="register">
                    <h4>
                        Don't have an account?
                        <a href="register.html">
                        Register
                    </a>
                    </h4>
                    
                </div>
            </form>
        </div>
    </div>
    <div class="footer">
       <h4>
        © 2023 InterviewCrew, All Rights Reserved
       </h4>
    </div>
</body>
</html>