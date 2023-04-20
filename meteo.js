var  API_KEY = 'bbf037e1e9e2d5b812df29617d0ba36c';

// Get the user's location by IP address
$.getJSON('https://ipinfo.io/json?', function(data) {
  // Get the user's city and country
 const city = data.city; 
  const country = data.country; 
  console.log(city);
  console.log(country);

  // Get weather data for the user's location
  var  weatherAPI = 'http://api.openweathermap.org/data/2.5/weather?q=city,country&APPID=bbf037e1e9e2d5b812df29617d0ba36c';
  //http://api.openweathermap.org/data/2.5/weather?q=London,uk&APPID=7a7d1c14776d8e05324562bf21b0620d


    $.getJSON(weatherAPI, function(weatherData) {
    // Display the weather data on the page
    var  temp = (weatherData.main.temp - 273.15).toFixed(1);
    var descri = weatherData.weather[0].description;
    var icona = 'https://openweathermap.org/img/w/' + weatherData.weather[0].icon + '.png';
    var html = '<img id = "foto_meteo" src="'+ icona + '" width = "150" > '; 
        html += '<p class="meteo" > ' + city + " "  + temp + "°C  <br /> "+ descri + '</p>'; 
        $('#meteo').html(html);
  });
});

  
  
  
  
