<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almaty City</title>
    <style>
        /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
}

/* Header */
header {
    background: #333;
    color: white;
    padding: 20px 0;
    text-align: center;
}

nav ul {
    list-style: none;
}

nav ul li {
    display: inline;
    margin: 0 20px;
}

nav ul li a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    font-size: 18px;
}

nav ul li a:hover {
    color: #ff6347;
}

/* Main Banner */
#main-banner {
    background-image: linear-gradient(rgba(61, 54, 54, 0.658),rgba(0,0,0,0.5)),url(/VSK2/progect/h3.jpg);
    background-position: center;
    background-size: cover;
    position: relative;
    color: white;
    text-align: center;
    padding: 120px 20px;
}

#main-banner h1 {
    font-size: 3.5em;
    margin-bottom: 20px;
    padding-top:70px
}

#main-banner p {
    font-size: 1.5em;
    margin-bottom: 350px;
}

/* About Section */
#about {
    padding: 60px 20px;
    background-color: white;
    text-align: center;
}

#about h2 {
    font-size: 3em;
    margin-bottom: 20px;
    color: #333;
}

#about p {
    font-size: 1.2em;
    margin: 20px 0;
    color: #666;
}

#about img {
    width: 80%;
    max-width: 800px;
    margin-top: 30px;
    border-radius: 10px;
}

/* Economy Section */
#economy {
    padding: 60px 20px;
    background-color: #f9f9f9;
    text-align: center;
}

#economy h2 {
    font-size: 3em;
    margin-bottom: 20px;
    color: #333;
}

#economy p {
    font-size: 1.2em;
    margin: 20px 0;
    color: #666;
}

#economy ul {
    list-style-type: none;
    padding: 0;
    font-size: 1.2em;
    color: #444;
}

#economy ul li {
    margin: 10px 0;
}

#economy img {
    width: 80%;
    max-width: 800px;
    margin-top: 30px;
    border-radius: 10px;
}


.places{
    width: 97%;
    margin: auto;
    text-align: center;
    padding-top: 50px;
}
.places > .row{
    display: flex;
}
.place-col{
    flex-basis: 32%;
    border-radius: 10px;
    margin-bottom: 30px;
    position: relative;
    overflow: hidden;
}
.place-col img{
    width: 96%;
    display: block;
    border-radius: 20px;
}
.layer{
    background: transparent;
    height: 100%;
    width: 96%;
    position: absolute;
    top: 0;
    left: 0;
    transition: 0.5s;
}
.layer:hover{
    background: rgba(1, 27, 77, 0.69);
    border-radius: 20px;
}
.layer h3{
    width: 100%;
    font-weight: 500;
    color: #fff;
    font-size: 26px;
    bottom: 0;
    /* left: 10%; */
    transform: translateX(-50);
    position: absolute;
    opacity: 0;
    transition: 0.5s;
}
.layer:hover h3{
    bottom: 49%;
    opacity: 1;
}




/* Rating Section */
#rating {
    padding: 60px 20px;
    background-color: #f9f9f9;
    text-align: center;
}

#rating h2 {
    font-size: 3em;
    margin-bottom: 20px;
    color: #333;
}

#rating p {
    font-size: 1.2em;
    margin: 20px 0;
    color: #666;
}

.rating-container {
    display: inline-block;
    margin-bottom: 20px;
}

.rating-container input[type="number"] {
    width: 100px;
    font-size: 1.5em;
    text-align: center;
    padding: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

button {
    padding: 15px 30px;
    background-color: #ff6347;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1.2em;
    margin-top: 20px;
}

button:hover {
    background-color: #e53e3e;
}

/* Footer */
footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px;
}

    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <nav>
            <ul>
                <li><a href="#about">About Almaty</a></li>
                <li><a href="#economy">Economy of Almaty</a></li>
                <li><a href="#places">Famous Places</a></li>
                <li><a href="#rating">Rate Almaty</a></li>
                <li><a href="map.kz.php">Back</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Banner -->
    <section id="main-banner">
        <h1>Welcome to Almaty!</h1>
        <p>Explore the vibrant city nestled between mountains and rich culture of Kazakhstan.</p>
    </section>

    <!-- About Section -->
    <section id="about">
        <h2>About Almaty</h2>
        <p>Almaty is the largest city in Kazakhstan, located in the southeastern part of the country, nestled in the foothills of the Zailiyskiy Alatau mountain range. It is known for its stunning natural scenery, vibrant culture, and as an economic and cultural hub of Kazakhstan.</p>
        <p>The city was the capital of Kazakhstan until 1997, before Astana (now Nur-Sultan) became the capital. However, Almaty remains the country's business and cultural center.</p>
    </section>

    <!-- Famous Places Section -->
    <section class="places">
        <h1>Famous Places in Almaty</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto praesentium velit nobis iure, tenetur perspiciatis. </p>
        <div class="row">
            <div class="place-col">
                <img src="/VSK2/progect/m.jpg" alt="">
                <div class="layer">
                    <h3>Medeu Skating Rink</h3>
                </div>
            </div>
            <div class="place-col">
                <img src="/VSK2/progect/L.jpg" alt="">
                <div class="layer">
                    <h3>Big Almaty Lake</h3>
                </div>
            </div>
            <div class="place-col">
                <img src="/VSK2/progect/p0.jpg" alt="">
                <div class="layer">
                    <h3>Shymbulak Ski Resort</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Economy Section -->
    <section id="economy">
        <h2>Economy of Almaty</h2>
        <p>Almaty is the economic powerhouse of Kazakhstan. It hosts the country's largest financial institutions, with a diverse economy centered on trade, services, manufacturing, and tourism.</p>
        <h3>Key Economic Sectors:</h3>
        <ul>
            <li><strong>Finance:</strong> Almaty is home to Kazakhstan's financial institutions, including the National Bank of Kazakhstan.</li>
            <li><strong>Retail and Services:</strong> The city has numerous shopping malls, international brands, and a thriving services sector.</li>
            <li><strong>Tourism:</strong> Almaty is a major tourism destination, known for its proximity to ski resorts and natural attractions.</li>
            <li><strong>Manufacturing:</strong> The manufacturing sector in Almaty is diverse, producing everything from electronics to consumer goods.</li>
        </ul>
        <p>Almaty is continuing to grow and modernize, becoming a key global player in Central Asia.</p>
    </section>


    <!-- Rating Section -->
    <section id="rating">
        <h2>Rate Almaty</h2>
        <p>We would love to hear your thoughts! Please rate the city of Almaty on a scale of 1 to 10:</p>
        
        <div class="rating-container">
            <label for="rating">Rating (1 to 10):</label>
            <input type="number" id="rating" name="rating" min="1" max="10" value="5">
        </div>
        <p>How much do you like Almaty? (1 = Poor, 10 = Excellent)</p>
        <button onclick="submitRating()">Submit Rating</button>
        <p id="rating-message"></p>
    </section>

    <footer>
        <p>&copy; 2024 Almaty City. All rights reserved.</p>
    </footer>

    <script>
  
function submitRating() {
    let rating = document.getElementById("rating").value;
    let message = "";


    if (rating < 1 || rating > 10) {
        message = "Please enter a rating between 1 and 10.";
    } else {
        
        if (rating <= 3) {
            message = "We're sorry to hear that! We hope Almaty improves for you in the future.";
        } else if (rating <= 7) {
            message = "Thank you for your feedback! We hope you enjoy your stay in Almaty.";
        } else {
            message = "Thank you! We're glad you love Almaty!";
        }
    }

    document.getElementById("rating-message").textContent = message;
}

    </script>
</body>
</html>
