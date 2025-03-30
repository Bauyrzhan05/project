<?php
$city_name = $_POST['city_name'];
$city_number = $_POST['city_number'];

$cities = [
    'Almaty' => [

        'description' => 'Almaty is the cultural and financial hub of Kazakhstan, known for its beautiful mountains and vibrant nightlife.',
        'population' => '2,950,000',
        'area' => '682 km²',  
        'special_features' => 'Known for its majestic mountain landscapes, Almaty is a city of vibrant culture, parks, and lively streets.',
        'economy' => 'Almaty is the economic center of Kazakhstan, hosting the largest number of banks, shopping malls, and industrial enterprises.',
        'image' => '/VSK2/progect/img/Almaty_2.jpg',
        'history' => 'Almaty was the capital of Kazakhstan from 1929 to 1997, and it is one of the oldest cities in the country, founded in the 10th century as a settlement.',
        'history_image_1' => '/VSK2/progect/img/His_alm.jpg',
        'history_image_2' => '/VSK2/progect/img/His_alm2.jpg',
    ],
    'Astana' => [

        'description' => 'Astana (Nur-Sultan) is the modern capital of Kazakhstan, featuring iconic architecture and a rich cultural scene.',
        'population' => '2,200,000',
        'area' => '722 km²',  
        'special_features' => 'Astana is famous for its futuristic architecture and urban planning, including landmarks like Baiterek Tower and Khan Shatyr.',
        'economy' => 'Astana is rapidly developing with a growing focus on technology, finance, and construction industries.',
        'image' => '/VSK2/progect/img/ast.jpg',
        'history' => 'Astana became the capital of Kazakhstan in 1997. Before that, the city was known as Akmolinsk, Tselinograd, and Akmolinsk again before being renamed to Astana in 1998.',
        'history_image_1' => '/VSK2/progect/img/His_ast.jpg',
        'history_image_2' => '/VSK2/progect/img/His_ast2.jpg',
    ],
    'Shymkent' => [

        'description' => 'Shymkent is a major city in southern Kazakhstan, known for its trade, historical sites, and unique cuisine.',
        'population' => '2,000,000',
        'area' => '1,498 km²',  
        'special_features' => 'Shymkent is a cultural melting pot with a rich history, diverse culinary offerings, and access to the beautiful natural reserves.',
        'economy' => 'Shymkent has a diverse economy, with strengths in manufacturing, agriculture, and trade, particularly in the southern region.',
        'image' => '/VSK2/progect/img/shym.jpg',
        'history_image_1' => '/VSK2/progect/img/shymkent_history.jpg',  
        'image' => '/VSK2/progect/img/shym.jpg',
    ],
    'Taraz' => [

        'description' => 'Taraz is a major city in southern Kazakhstan, known for its trade, historical sites, and unique cuisine.',
        'population' => '1,000,000',
        'area' => '410 km²',  
        'special_features' => 'Taraz is a historical city that boasts ancient monuments, traditional trade routes, and unique local culture.',
        'economy' => 'Taraz has a strong economy based on agriculture, food production, and mineral resources.',
        'image' => '/VSK2/progect/img/tr.jpg',
        'history' => 'Taraz is one of the oldest cities in Kazakhstan, dating back to the 6th century, and was an important stop on the Silk Road.',
        'history_image_1' => '/VSK2/progect/img/his_tr.jpg',
        'history_image_2' => '/VSK2/progect/img/his_tr2.jpg',
    ],
];

$city_data = $cities[$city_name] ?? null;

if (!$city_data) {
    echo "<h1>City not found!</h1>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Details</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
            background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5)), url('/VSK2/progect/kz.jpg');
            background-position: center;
            background-size: cover;
            min-height: 100vh;
            position: relative;
        }
        .container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            background: rgb(232, 232, 232);
            border-radius: 12px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h1 {
            color:rgb(49, 60, 112);
            font-size: 38px;
            margin-bottom: 15px;
            text-shadow: 0 0 20px #00fffb, 0 0 40px #0081bc;
            font-weight: bold;
        }
        .header img {
            width: 100%;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        .details {
            margin-top: 30px;
        }
        .details h2 {
            color: #34495e;
            font-size: 28px;
            margin-bottom: 15px;
        }
        .details p {
            color:rgb(42, 66, 81);
            font-size: 18px;
            line-height: 1.6;
        }
        .details ul {
            list-style: none;
            padding: 0;
        }
        .details ul li {
            background: #3498db;
            color: #fff;
            padding: 12px;
            margin: 8px 0;
            border-radius: 8px;
            font-size: 18px;
        }
        .info-block {
            background-color: #2c3e50;
            color:rgb(255, 255, 255);
            padding: 15px;
            border-radius: 8px;
            margin-top: 25px;
        }
        .info-block h3 {
            margin-top: 0;
        }
        .special-features {
            background-color:rgb(17, 96, 145);
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
            font-size: 18px;
        }
        .special-features p {
            color: white;
        }
        .history-block {
            margin-top: 40px;
            background-color:rgb(215, 151, 48);
            color: white;
            padding: 20px;
            border-radius: 8px;
        }
        .history-block img {
            width: 100%;
            max-width: 477px;
            border-radius: 8px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>About <?php echo $city_name; ?></h1>
        <img src="<?php echo $city_data['image']; ?>">
    </div>
    <div class="details">
        <h2>Description</h2>
        <p><?php echo $city_data['description']; ?></p>
        <h2>Population</h2>
        <p><?php echo $city_data['population']; ?> people</p>
        <h2>Area</h2>
        <p><?php echo $city_data['area']; ?></p>
        <h2>Economy</h2>
        <p><?php echo $city_data['economy']; ?></p>
        <h2>Special Features</h2>
        <div class="special-features">
            <p><?php echo $city_data['special_features']; ?></p>
        </div>
    </div>
    <div class="history-block">
        <h2>History</h2>
        <p><?php echo $city_data['history']; ?></p>
        <img src="<?php echo $city_data['history_image_1']; ?>" >
        <img src="<?php echo $city_data['history_image_2']; ?>" >
    </div>
</div>

</body>
</html>
