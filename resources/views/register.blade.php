<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InterviewCrew | Register</title>
    <link rel="stylesheet" href="{{ URL::asset('css/register.css') }}">
    <script src="https://kit.fontawesome.com/5f0f0f2d20.js"></script>
</head>
<body>
    <div class="navigation">
        <div class="first">
            <div class="logo">
                <img src="interviewcrew.png" alt="">
            </div>
        </div>
        <div class="logosigin">
            <a href="login.html">Singin</a>
        </div>
    </div>
    <div class="container">
        <div class="back"> 
            <form action="" id="registerform">
                <label for="FullName">
                    Fullname
                </label>
                <div>
                    <input type="text" name="FullName" id="FullName" >
                </div>
                
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
                <label for="email">
                    E-Mail
                </label>
                <div>
                    <input type="email" name="email" id="email">
                </div>
                <label for="phone">
                    Phone
                </label>
                <div>
                    <input type="text" name="Phone" id="phone">
                </div>
                   
                    <div class="buttons">
                        <button class="reg">
                            <a id="ref" onclick="validate()" href="">Submit</a>
                        </button>
                </div>
                <div class="sigin">
                    <h4>
                        Allready have account?
                        <a href="{{ url('interview.png') }}">
                        Singin
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