<?php
//create the connection
$conn = mysqli_connect("localhost", "root", "", "weather");

// Fetch from API
if (isset($_GET['submit'])) {
    $city = $_GET['city'];
} else {
    $city = "kathmandu"; // Default city if not provided in the form
}

// Print the selected city
echo "Selected City: " . $city;

$json_data = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=5ed63b06a659639575821c6da9811d30");
$data = json_decode($json_data, true);

// Access the data
$city = $data['name'];
$temperature = $data['main']['temp'];
$humidity = $data['main']['humidity'];
$wind_speed = $data['wind']['speed'];
$pressure = $data['main']['pressure'];
$timestamp = $data['dt'];
$date = gmdate("Y-m-d\TH:i:s\Z", $timestamp);
$temp = $temperature - 273.15;

$sql = "INSERT INTO weatherdata(city, temperature, humidity, windspeed, pressure, Curdate) VALUES ('$city', '$temp', '$humidity', '$wind_speed', '$pressure', '$date')";
print_r($sql);
mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link rel="stylesheet" href="RohanThapaMagar_2358433.css">
</head>

<body>
    <div class="main-container">
        <div class="container top">
            <h1>Weather App</h1>
            <form action="RohanThapaMagar_2358433.php" method="get">
                <input type="text" name="city" class="search" placeholder="Enter the City Name">
                <!-- <button type="submit" name="submit" class="btn">Submit</button> -->
                <input type="button" name="submit" value="submit" class="btn btn-submit">
                <p class="error"></p>
            </form>

            <div class="savebutton">
            <section>
                <div class="container">
                    <div class="icon">
                        <img src="" alt="" class="weather-icon">
                    </div>
                    <div class="location">
                        <div id="city" class="city">--</div>
                        <div class="date">--</div>
                    </div>
                    <div class="current">
                        <div id="temp" class="temp">Temp: Â°C</div>
                        <div id="weather" class="weather">Weather: </div>
                        <div id="temp-range" class="temp-range">Temp Range: C</div>
                        <div id="humidity" class="humidity">Humidity: %</div>
                        <div id="wind" class="wind">Wind: km/h</div>
                    </div>
            </section>
        </div>
        <form action="RohanThapaMagar_2358433_history.php" method="post">
        <button type="submit">View weather history</button>
      </form>
    </div>
    
    </div>

    <script src="RohanThapaMagar_2358433.js"></script>
</body>

</html>