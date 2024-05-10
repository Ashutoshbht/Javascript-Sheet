<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- nav bar -->
    <div class="card">
        <div class="search">
            <input type="text" placeholder="Enter your city" spellcheck="false">
            <button id="search-btn"><img src="images/search.png" alt=""></button>
        </div>
    
    <div class="weather">
        <img src="images/rain.png" class="weather-icon">
        <h1 class="temp">37°C</h1>
        <h2 class="city">Chandigarh</h2>

    <div class="details">
        <div class="col">
            <img src="images/humidity.png">
            <div>
                <p class="humidity">50%</p>
                <p>Humidity</p>
            </div> 
        </div>
        
        <div class="col">
            <img src="images/wind.png">
            <div>
                <p class="wind">15 km/hr</p>
                <p>Wind Speed</p>
            </div> 
        </div>
    </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
