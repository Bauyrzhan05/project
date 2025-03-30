<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astana қаласы</title>
    
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
    color: rgb(15, 46, 89);

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
    background-image: linear-gradient(rgba(61, 54, 54, 0.658),rgba(0,0,0,0.5)),url(/VSK2/progect/aqt.jpg);
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
    padding-top: 100px;
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
    color: rgb(15, 46, 89);
}

#about p {
    font-size: 1.2em;
    margin: 20px 0;
    color: rgb(15, 46, 89);
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
    color: rgb(15, 46, 89);
}

#economy p {
    font-size: 1.2em;
    margin: 20px 0;
    color: rgb(15, 46, 89);
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

/* Famous Places Section */
#places {
    padding: 60px 20px;
    background-color: #f9f9f9;
    text-align: center;
}

#places h2 {
    font-size: 3em;
    margin-bottom: 40px;
    color: rgb(15, 46, 89);
}

.place-card {
    display: inline-block;
    background-color: white;
    width: 30%;
    margin: 20px;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.place-card img {
    width: 100%;
    height: 360px;
    border-radius: 10px;
    margin-bottom: 15px;
}

.place-card h3 {
    font-size: 2em;
    margin-bottom: 10px;
    color: rgb(15, 46, 89);
}

.place-card p {
    color: #555;
    font-size: 1.2em;
}

/* Events Section */
#events {
    padding: 60px 20px;
    background-color: white;
    text-align: center;
}

#events h2 {
    font-size: 3em;
    margin-bottom: 40px;
    color: rgb(15, 46, 89);
}

.event-card {
    background-color: white;
    padding: 30px;
    margin: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.event-card h3 {
    font-size: 2em;
    color: rgb(15, 46, 89);
}

.event-card p {
    color: #555;
    font-size: 1.2em;
}

/* Rating Section Styles */
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
#message{
    font-size: 28px;
    color: rgb(15, 46, 89);
}

/* Footer */
footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px 0;
    margin-top: 40px;
}

    </style>
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="#about">About </a></li>
                <li><a href="#economy">Economy </a></li>
                <li><a href="#places">Famous Places</a></li>
                <li><a href="map.kz.php">Back</a></li>
            </ul>
        </nav>
    </header>

    <section id="main-banner">
        <h1>Welcome to Aqtau!</h1>
        <p>Explore the heart of Kazakhstan, a city of modern architecture and rich culture.</p>
    </section>

    <!-- About Section -->
    <section id="about">
        <h2>About Aqtau</h2>
        <p>Astana, the capital of Kazakhstan, is a city of innovation, modernity, and rich history. It is known for its futuristic architecture, cultural landmarks, and as a hub for political and economic activities.</p>
        <p>Formerly known as Akmolinsk, Tselinograd, Akmolinsk again, and most recently, Astana, the city was officially renamed Nur-Sultan in 2019 before returning to Astana in 2022. It became the capital of Kazakhstan in 1997, replacing Almaty.</p>
    </section>

    <!-- Famous Places Section -->
    <section id="places">
        <h2>Famous Places in Aqtau</h2>
        <div class="place-card">
            <h3>Bayterek Monument</h3>
            <img src="/VSK2/progect/img/baiterek.jpg" alt="Bayterek Monument">
            <p>The iconic symbol of Astana, representing the ancient tree of life.</p>
        </div>
        <div class="place-card">
            <h3>Khan Shatyr</h3>
            <img src="/VSK2/progect/img/khan.jpg" alt="Khan Shatyr Entertainment Center">
            <p>A modern shopping and entertainment complex in the shape of a giant tent.</p>
        </div>
        <div class="place-card">
            <h3>Pyramid </h3>
            <img src="/VSK2/progect/img/pira.jpg" alt="Pyramid of Peace and Accord">
            <p>A unique building representing Kazakhstan’s commitment to peace and unity.</p>
        </div>
    </section>

    <!-- Economy Section -->
    <section id="economy">
        <h2>Economy of Aqtau</h2>
        <p>Astana plays a central role in the economic development of Kazakhstan. As the capital city, it is the main hub for the country’s administrative, political, and financial activities.</p>
        <p>Over the years, Astana has evolved into a modern and diversified economy, attracting investment in various sectors, including real estate, construction, finance, and manufacturing.</p>
        
        <h3>Key Economic Sectors:</h3>
        <ul>
            <li><strong>Real Estate and Construction:</strong> Astana has seen a boom in real estate and infrastructure development, with modern skyscrapers, business centers, and residential buildings.</li>
            <li><strong>Finance:</strong> The city hosts the Astana International Financial Centre (AIFC), an emerging financial hub with international institutions.</li>
            <li><strong>Trade and Retail:</strong> Astana's retail and trade sectors have flourished, with numerous shopping centers, markets, and international brands.</li>
            <li><strong>Manufacturing:</strong> Astana has expanded its industrial base, with developments in sectors such as construction materials, electronics, and machinery production.</li>
        </ul>

        <p>The city continues to grow rapidly, with ongoing government initiatives aimed at making Astana a key global economic player.</p>
    </section>

    <!-- Rating Section -->
<section id="rating">
    <h2>Rate Aqtau</h2>
    <p>We would love to hear your thoughts! Please rate the city of Astana on a scale of 1 to 10:</p>
    
    <div class="rating-container">
        <label for="rating">Rating (1 to 10):</label>
        <input type="number" id="rating" min="1" max="10" value="5">
    </div>
    <p>How much do you like Astana? (1 = Poor, 10 = Excellent)</p>
    <button onclick=submitRating()>Submit Rating</button>
    <div id ="message"></div>
</section>



    <footer>
        <p>&copy; 2024 Astana City. All rights reserved.</p>
    </footer>


    <script>

// Handle rating submission
function submitRating() {
    var rating = document.getElementById("rating").value;

    if (rating <= 3) {  
        document.getElementById("message").innerText = "We're sorry to hear that! We hope Astana improves for you in the future.";
    } else if (rating <= 7) {        
        document.getElementById("message").innerText = "Thank you for your feedback! We hope you enjoy your stay in Astana.";
    } else {
        document.getElementById("message").innerText = "Thank you! We're glad you love Astana!";
    }
  
}


    </script>
</body>
</html>
