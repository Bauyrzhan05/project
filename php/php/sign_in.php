<?php
// sign_in.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Kazakhstan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(45deg, #7c9aad, #c4b9c7);
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .nav .container{
            height: 70px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .menu{
            padding-left: 380px;
        }
        .menu > ul{
            list-style-type: none;    
            display: flex;
            margin: 0;
        }
        .menu > ul > li {
            margin-right: 90px;
        }
        .menu > ul > li a{
            text-decoration: none;
            padding-bottom: 4px;
            color: #ffffff;
            font-size: 17px;
            transition: color 0.3s ease;
        }
        .menu > ul > li a:hover {
            color: #212529; 
        }
        .log{
            font-size: 20px;
            color: rgba(255, 255, 255, 0.603);
            font-weight: bold; 
            margin-right: 20px; 
            transition: 0.5s ease;
        }
        .header{
            background: rgba(0,0,0,0.15);
            width: 100%;
            z-index: 100;
        }
        .b{
            padding: 10px 25px;
            border-radius: 10px;
            background-color: rgb(44, 100, 118);
            color: rgb(255, 255, 255);
            border: none;
            margin-left: 10px;
            transition: background-color 0.5s ease, color 0.5s ease;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            font-size: 15px;
        }
        .b:hover{
            background-color: rgb(231, 231, 231);
            color: rgba(1, 1, 1, 0.566);
            box-shadow: 0 5px 10px rgba(0,0,0,0.2);
        }

        .sign-in-section{
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .sign-in-container{
            background: #f7f7f7;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
            max-width: 400px;
            width: 90%;
            text-align: center;
        }
        .sign-in-container h2{
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: bold;
            color: #273c4a;
        }
        .sign-in-container p{
            font-size: 14px;
            color: #555;
            margin-bottom: 30px;
        }
        .sign-in-container input{
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #7f7ed5;
            border-radius: 10px;
            font-size: 14px;
        }
        .sign-in-container button{
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;
            background: rgb(15, 46, 89);
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.5s ease;
        }
        .sign-in-container button:hover{
            background: #6050be;
            color: #fff;
        }
        .sign-in-container .status-msg{
            margin-top: 15px;
            font-size: 23px;

        }

        .footer-section{
            background: #ececee;
            padding: 30px 0;
            text-align: center;
        }
        .footer-section p{
            margin: 0;
            font-size: 14px;
            color: #333;
        }
        .bar{
            background: #7f7ed5;
            text-align: center;
            padding: 10px 0;
            color: white;
            margin: 0;
            font-size: 16px;
        }

        /* Quick Links in footer */
        .footer-links{
            margin: 20px 0;
        }
        .footer-links a{
            text-decoration: none;
            color: #000;
            margin: 0 10px;
            font-size: 14px;
            transition: color 0.3s ease;
        }
        .footer-links a:hover{
            color: #7f7ed5;
        }
    </style>
</head>
<body>
    <section class="header">
        <div class="nav">
            <div class="container">
              <div class="log">
                KAZ
              </div>
              <div class="menu">
                <ul>
                  <li><a href="kaz.php">Home</a></li>
                  <li><a href="about.php">About us</a></li>
                  <li><a href="contact.php">Contact</a></li>
                  <li><a href="services.php">Services</a></li>
                </ul>
              </div>
              <button class="b" onclick="window.location.href='sign_in.php';">sign in</button>
            </div>    
        </div>
    </section>

    <div class="sign-in-section">
        <div class="sign-in-container">
            <h2>Sign In</h2>
            <p>Welcome back! Please enter your credentials to access your account.</p>
            <input type="text" id="username" placeholder="Username">
            <input type="password" id="password" placeholder="Password">
            <button onclick="signIn()">Login</button>
            <div class="status-msg" id="statusMsg"></div>
        </div>
    </div>

    <div class="footer-section">
        <div class="footer-links">
            <a href="kaz.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="services.php">Services</a>
        </div>
        <p>Follow us on:</p>
        <p>&#9993; &#9990; &#10004; &#10155;</p>
    </div>
    <div class="bar">
        <p>&copy; 2024 your company. All rights reserved.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>
        function signIn(){
            const username = document.getElementById("username");
            const password = document.getElementById("password");
            const statusMsg = document.getElementById("statusMsg");

            if(username.value === "" || password.value === ""){
                statusMsg.style.color = "red";
                statusMsg.innerHTML = "Please fill in all fields.";
            }else{
                statusMsg.style.color = "green";
                statusMsg.innerHTML = "Successfully signed in! Welcome, " + username.value + ".";
                username.value = "";
                password.value = "";
            }
        }
    </script>
</body>
</html>