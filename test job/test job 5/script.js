const apikey = "d26d58b2589e415782e112341240205";
const apiurl = `https://api.weatherapi.com/v1/forecast.json?key=${apikey}&days=7&q=`;

const searchbox = document.querySelector(".search input");
const searchbtn = document.getElementById("search-btn");

async function checkWeather(city) {
    const response = await fetch(apiurl + city);
    const data = await response.json();
    console.log(data);
    document.querySelector(".city").innerHTML = data.location.name; 
    document.querySelector(".temp").innerHTML = Math.round(data.current.temp_c)  + "°C"; 
    document.querySelector(".humidity").innerHTML = data.current.humidity + "%"; 
    document.querySelector(".wind").innerHTML = data.current.wind_kph + "km/hr"; 
}

searchbtn.addEventListener("click", () => {
    // e.preventDefault();
    checkWeather(searchbox.value);
});

// Initially show weather for a default city
checkWeather("New York");
