<?php
// contact.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Kazakhstan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .header{
            width: 100%;
            min-height: 100vh;
            background-image: linear-gradient(rgba(61, 54, 54, 0.658),rgba(0,0,0,0.5)),url('k2.jpg');
            background-position: center;
            background-size: cover;
            position: relative;
        }
        .container{
            width: 80%;
            margin: auto;
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
        }
        .log{
            font-size: 20px;
            color: rgba(255, 255, 255, 0.603);
            font-weight: bold; 
            margin-right: 20px; 
            transition: 0.5s ease;
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
        .text{ 
            width: 90%;
            color: #fff;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            text-align: center;
        }
        .text h1{
            font-size: 62px;
            font-weight: bold; 
        }
        .text p{
            margin: 10px 0 40px;
            font-size: 14px;
            columns: #fff;
        }
        .text .here{
            display: inline-block;
            text-decoration: none;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 20px;
            padding: 12px 34px;
            font-size-adjust: 13px;
            background: transparent ;
            position: relative;
            cursor: pointer;
        }
        .text .here:hover{
            border: 1px solid rgb(44, 100, 118);
            background: rgb(44, 100, 118);
            transition: 1s;   
        }

        /* Contact Section */
        .contact-section{
            padding: 60px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #f4f4f4;
            text-align: center;
        }
        .contact-section h2{
            font-weight: bold;
            color: rgb(15, 46, 89);
            margin-bottom: 5px;
        }
        .contact-section p{
            font-size: 16px;
            color: rgb(116, 116, 116);
            margin-top: 5px;
            max-width: 800px;
            margin-bottom: 30px;
        }
        .contact-container{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 40px;
        }
        .contact-box{
            background: #fff3f3;
            border-radius: 10px;
            padding: 20px;
            max-width: 300px;
            box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
            transition: 0.5s ease;
            text-align: left;
        }
        .contact-box h3{
            font-weight: bold;
            color: rgb(32, 59, 96);
            margin-bottom: 10px;
        }
        .contact-box p{
            color: rgb(125, 122, 122);
            font-size: 15px;
        }
        .contact-box:hover{
            box-shadow: 0 0 20px 0px rgba(0,0,0,0.2);
            transition-duration: 0.5s;
        }
        .contact-form{
            width: 100%;
            max-width: 600px;
            background: #fff3f3;
            padding: 20px;
            margin: 30px auto;
            border-radius: 10px;
            text-align: left;
            box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #7f7ed5;
            margin-bottom: 15px;
        }
        .contact-form button{
            border-radius: 12px;
            padding: 10px;
            border: none;
            background: rgb(15, 46, 89);
            color: #fff;
            cursor: pointer;
            width: 100px;
        }
        .contact-form button:hover{
            background: #6050be;
            color: rgb(15, 46, 89);
        }
        .status-msg{
            color: blue;
            font-size: 23px;
            text-align: center;
            margin-top: 10px;
        }

        /* Footer section */
        .footer-section{
            margin-top: 50px;
            background: #ececee;
            padding: 40px 0;
        }
        .footer-container{
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .footer-box{
            margin: 20px;
            text-align: center;
        }
        .footer-box h3{
            font-size: 24px;
            margin-bottom: 15px;
            color: rgb(15, 46, 89);
        }
        .footer-box input{
            display: block;
            margin: 10px auto;
            padding: 7px;
            border-radius: 12px;
            border: 1px solid #7f7ed5;
            width: 250px;
        }
        .footer-box button{
            border-radius: 12px;
            padding: 8px;
            width: 80px;
            border: none;
            background: rgb(15, 46, 89);
            color: #fff;
            cursor: pointer;
        }
        .footer-box button:hover{
            background: #6050be;
            color: rgb(15, 46, 89);
        }
        .footer-box #map{
            color: rgb(14, 193, 20);
            font-size: 19px;
            text-align: center;
        }
        .footer-box p{
            margin: 5px 0;
        }
        .social-icons {
            font-size: 24px;
            list-style-type: none;
            padding: 0;
        }
        .social-icons li{
            display: inline-block;
            margin: 0 10px;
            cursor: pointer;
        }
        .bar{
            background: #7f7ed5;
            text-align: center;
            padding: 10px 0;
            color: white;
            margin: 0;
            font-size: 16px;
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
        <div class="text">
            <h1>Contact Us</h1>
            <p>We’d love to hear from you! Whether you have a question, feedback, or just want to share your thoughts about Kazakhstan, we’re here to help.<br>Get in touch with us and let’s connect.</p>
            <a href="#contact" class="here">Reach Out</a>
        </div>    
    </section>

    <section class="contact-section" id="contact">
        <h2>Get in Touch</h2>
        <p>Kazakhstan is a country filled with hidden gems and cultural richness. We appreciate your interest in exploring what it has to offer. Please use the form below to send us a message, and we’ll respond as soon as possible.</p>

        <div class="contact-container">
            <div class="contact-box">
                <h3>Address</h3>
                <p>Astana, Kazakhstan<br>Somewhere in the city</p>
            </div>
            <div class="contact-box">
                <h3>Phone</h3>
                <p>+8 (700) 700-70-70</p>
            </div>
            <div class="contact-box">
                <h3>Email</h3>
                <p>info@kazakhstan.com</p>
            </div>
        </div>

        <div class="contact-form">
            <h3>Leave Us a Message</h3>
            <input type="text" id="name" placeholder="Your Name">
            <input type="email" id="email" placeholder="Your Email">
            <textarea id="message" rows="5" placeholder="Your Message"></textarea>
            <button type="submit" onclick="submitContact()">Send</button>
            <div class="status-msg" id="statusMsg"></div>
        </div>
    </section>


    <div class="bar">
        <p>&copy; 2024 your company . All rights reserved</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>
      function send(){
        const input = document.getElementById("input");
        const email2 = document.getElementById("email2");
        const number = document.getElementById("number");
        if(input.value == "" || email2.value == "" || number.value == ""){
          document.getElementById("map").innerHTML = "You must fill in all fields";
        }else{
          document.getElementById("map").innerHTML = "Successfully sent: " + input.value;
        }
      }

      function submitContact(){
        const name = document.getElementById("name");
        const email = document.getElementById("email");
        const message = document.getElementById("message");
        const statusMsg = document.getElementById("statusMsg");

        if(name.value === "" || email.value === "" || message.value === ""){
            statusMsg.style.color = "red";
            statusMsg.innerHTML = "Please fill in all fields.";
        }else{
            statusMsg.style.color = "green";
            statusMsg.innerHTML = "Your message has been sent. Thank you, " + name.value + "!";
            name.value = "";
            email.value = "";
            message.value = "";
        }
      }
    </script>
</body>
</html>