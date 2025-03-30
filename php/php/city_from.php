<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
            width: 100%;
            min-height: 100vh;
            background-image: linear-gradient(rgba(61, 54, 54, 0.658),rgba(0,0,0,0.5)),url(/VSK2/progect/k2.jpg);
            background-position: center;
            background-size: cover;
            position: relative;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: rgb(15, 46, 89);
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: rgb(15, 46, 89);
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: rgb(15, 46, 89);
            color: #fff;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            font-size: 18px;
        }
        button:hover {
            background-color: #0056b3;
        }
        .info {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9f7df;
            border: 1px solid #d4edda;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>what kind of city do you want to know!</h2>
        <form action="city_info.php" method="POST">
            <div class="form-group">
                <label for="city_name">City Name</label>
                <input type="text" id="city_name" name="city_name" placeholder="Enter city name" required>
            </div>
            <div class="form-group">
                <label for="city_number">Namber of city</label>
                <input type="number" id="city_number" name="city_number" placeholder="Enter city number" required>
            </div>
            <button type="submit">Let's go</button>
        </form>
    </div>


</body>
</html>
