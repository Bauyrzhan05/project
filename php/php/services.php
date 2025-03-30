<?php
// services.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Kazakhstan</title>
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

        /* Services Section */
        .services-section{
            padding: 60px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: #f4f4f4;
            text-align: center;
        }
        .services-section h2{
            font-weight: bold;
            color: rgb(15, 46, 89);
            margin-bottom: 5px;
        }
        .services-section p{
            font-size: 16px;
            color: rgb(116, 116, 116);
            margin-top: 5px;
            max-width: 800px;
            margin-bottom: 30px;
        }
        .services-container{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 40px;
        }
        .service-box{
            background: #fff3f3;
            border-radius: 10px;
            padding: 20px;
            max-width: 300px;
            box-shadow: 0 0 20px 0px rgba(0,0,0,0.1);
            transition: 0.5s ease;
            text-align: left;
        }
        .service-box h3{
            font-weight: bold;
            color: rgb(32, 59, 96);
            margin-bottom: 10px;
        }
        .service-box p{
            color: rgb(125, 122, 122);
            font-size: 15px;
        }
        .service-box:hover{
            box-shadow: 0 0 20px 0px rgba(0,0,0,0.2);
            transition-duration: 0.5s;
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
            <h1>Our Services</h1>
            <p>We offer a variety of services to help you discover, explore, and appreciate the beauty and richness of Kazakhstan. <br>From tailored tours to educational resources, we aim to enhance your understanding and experience.</p>
            <a href="#services" class="here">Explore Services</a>
        </div>    
    </section>

    <section class="services-section" id="services">
        <h2>What We Provide</h2>
        <p>Our goal is to cater to diverse interests. Whether you’re a traveler, researcher, student, or entrepreneur, we’re here to support your journey. We combine local expertise, curated content, and innovative tools to help you engage with Kazakhstan in meaningful ways.</p>

        <div class="services-container">
            <div class="service-box">
                <h3>Guided Tours</h3>
                <p>Join our expert-led tours through some of the most iconic and hidden regions of Kazakhstan. Experience natural wonders, historical monuments, and cultural events in a personalized manner.</p>
            </div>
            <div class="service-box">
                <h3>Travel Planning</h3>
                <p>We help you design itineraries that fit your preferences. From booking accommodations to suggesting off-the-beaten-path destinations, our team ensures you maximize your stay.</p>
            </div>
            <div class="service-box">
                <h3>Cultural Workshops</h3>
                <p>Immerse yourself in local traditions through our interactive workshops. Learn Kazakh crafts, music, dance, and cuisine to gain a deeper appreciation of the country’s cultural tapestry.</p>
            </div>
            <div class="service-box">
                <h3>Business Consulting</h3>
                <p>For entrepreneurs and investors, we offer insights into Kazakhstan’s economic landscape. Connect with local experts, understand market trends, and explore business opportunities.</p>
            </div>
            <div class="service-box">
                <h3>Language Assistance</h3>
                <p>Overcome language barriers with our translation and language-learning resources. Communicate more effectively and confidently during your time in Kazakhstan.</p>
            </div>
            <div class="service-box">
                <h3>Educational Resources</h3>
                <p>Students and scholars can access curated research materials, historical archives, and expert interviews to delve deeper into Kazakhstan’s heritage and current affairs.</p>
            </div>
        </div>
    </section>

    <div class="footer-section">
        <div class="footer-container">
            <div class="footer-box">
                <h3>Contact us</h3>
                <input type="text" id="input" placeholder="Name">
                <input type="text" id="email2" placeholder="Email: info@.com">
                <input type="number" id="number" placeholder="Phone:+8 700 700 70 70">
                <button type="submit" onclick="send()">Send</button>
                <div id="map"></div>
            </div>
            <div class="footer-box">
                <h3>Quick links</h3>
                <p><a href="kaz.php" style="text-decoration:none;color:#000;">Home</a></p>
                <p><a href="about.php" style="text-decoration:none;color:#000;">About</a></p>
                <p><a href="contact.php" style="text-decoration:none;color:#000;">Contact</a></p>
                <p><a href="services.php" style="text-decoration:none;color:#000;">Services</a></p>
            </div>
            <div class="footer-box">
                <h3>Follow us</h3>
                <ul class="social-icons">
                    <li>&#9993;</li>
                    <li>&#9990;</li>
                    <li>&#10004;</li>
                    <li>&#10155;</li>
                </ul>
            </div>
        </div>
    </div>
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
    </script>
</body>
</html>