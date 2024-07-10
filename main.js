
var city_name1 = document.getElementById("city-name1");
var state_name = document.getElementById("state");
var district_name = document.getElementById("district");
var city = document.getElementById("city");
var latitude = document.getElementById("latitude");
var longitude = document.getElementById("longitude");
var timeZone = document.getElementById("timeZone");
var gmaps = document.getElementById("gmaps");
var country = document.getElementById("country");
var place_id = document.getElementById("place_id");
var search_btn = document.getElementById("search-btn");

search_btn.addEventListener("click", (event) => {
    event.preventDefault();
    var city_name = document.getElementById("city-name");
    city_name = city_name.value;
    gmaps.addEventListener("click", () => {
        var link = `https://www.google.com/maps/place/${city_name}`;
        console.log(city_name);
        window.open(link, "_blank");
    })
    const url = `https://foreca-weather.p.rapidapi.com/location/search/${city_name}`;
    const options = {
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': 'a5545b2da5msh7e19050018e24bdp19d42ejsn2653e34310b1',
            'X-RapidAPI-Host': 'foreca-weather.p.rapidapi.com'
        }
    };
    fetch(url, options)
        .then(response => response.json())
        .then((response) => {
            //console.log(response);
            var city_id = response.locations[0]["id"];
            search_btn.innerHTML = `<div class="spinner-border" role="status"></div>`;
            if(city_id){
            setTimeout(() => {
                search_btn.innerHTML = "Search";
            }, 1750);
            }
            const url1 = `https://foreca-weather.p.rapidapi.com/forecast/daily/${city_id}`;
            const url2 = `https://foreca-weather.p.rapidapi.com/current/${city_id}`;
            fetch(url1, options)
                .then(response1 => response1.json())
                .then((response1) => {
                    //console.log(response1);
                    document.getElementById("maxTemp1").innerHTML = response1.forecast[1]["maxTemp"];
                    document.getElementById("maxTemp2").innerHTML = response1.forecast[2]["maxTemp"];
                    document.getElementById("maxTemp3").innerHTML = response1.forecast[3]["maxTemp"];
                    document.getElementById("maxTemp4").innerHTML = response1.forecast[4]["maxTemp"];
                    document.getElementById("maxTemp5").innerHTML = response1.forecast[5]["maxTemp"];
                    document.getElementById("maxTemp6").innerHTML = response1.forecast[6]["maxTemp"];

                    document.getElementById("minTemp1").innerHTML = response1.forecast[1]["minTemp"];
                    document.getElementById("minTemp2").innerHTML = response1.forecast[2]["minTemp"];
                    document.getElementById("minTemp3").innerHTML = response1.forecast[3]["minTemp"];
                    document.getElementById("minTemp4").innerHTML = response1.forecast[4]["minTemp"];
                    document.getElementById("minTemp5").innerHTML = response1.forecast[5]["minTemp"];
                    document.getElementById("minTemp6").innerHTML = response1.forecast[6]["minTemp"];

                    document.getElementById("maxWindSpeed1").innerHTML = response1.forecast[1]["maxWindSpeed"];
                    document.getElementById("maxWindSpeed2").innerHTML = response1.forecast[2]["maxWindSpeed"];
                    document.getElementById("maxWindSpeed3").innerHTML = response1.forecast[3]["maxWindSpeed"];
                    document.getElementById("maxWindSpeed4").innerHTML = response1.forecast[4]["maxWindSpeed"];
                    document.getElementById("maxWindSpeed5").innerHTML = response1.forecast[5]["maxWindSpeed"];
                    document.getElementById("maxWindSpeed6").innerHTML = response1.forecast[6]["maxWindSpeed"];

                    document.getElementById("precipAccum1").innerHTML = response1.forecast[1]["precipAccum"];
                    document.getElementById("precipAccum2").innerHTML = response1.forecast[2]["precipAccum"];
                    document.getElementById("precipAccum3").innerHTML = response1.forecast[3]["precipAccum"];
                    document.getElementById("precipAccum4").innerHTML = response1.forecast[4]["precipAccum"];
                    document.getElementById("precipAccum5").innerHTML = response1.forecast[5]["precipAccum"];
                    document.getElementById("precipAccum6").innerHTML = response1.forecast[6]["precipAccum"];

                    document.getElementById("date1").innerHTML = response1.forecast[1]["date"];
                    document.getElementById("date2").innerHTML = response1.forecast[2]["date"];
                    document.getElementById("date3").innerHTML = response1.forecast[3]["date"];
                    document.getElementById("date4").innerHTML = response1.forecast[4]["date"];
                    document.getElementById("date5").innerHTML = response1.forecast[5]["date"];
                    document.getElementById("date6").innerHTML = response1.forecast[6]["date"];


                })
                .catch(err1 => console.error(err1))

            fetch(url2, options)
                .then(response2 => response2.json())
                .then((response2) => {
                    //console.log(response2);

                    city_name1.innerHTML = city_name[0].toUpperCase() + city_name.substring(1);
                    var temp = response2.current["temperature"];
                    document.getElementById("temp").innerHTML = temp;
                    document.getElementById("ftemp").innerHTML = (temp * (9 / 5) + 32).toFixed(1);
                    country.innerHTML = response.locations[0]["country"];
                    state_name.innerHTML = response.locations[0]["adminArea"];
                    district_name.innerHTML = response.locations[0]["adminArea2"];
                    city.innerHTML = city_name[0].toUpperCase() + city_name.substring(1);
                    latitude.innerHTML = response.locations[0]["lat"];
                    longitude.innerHTML = response.locations[0]["lon"];
                    place_id.innerHTML = response.locations[0]["id"];
                    timeZone.innerHTML = response.locations[0]["timezone"];
                    
                    document.getElementById("cloudiness").innerHTML = response2.current["cloudiness"];
                    document.getElementById("relHumidity").innerHTML = response2.current["relHumidity"];
                    document.getElementById("relHumidity1").innerHTML = response2.current["relHumidity"];
                    document.getElementById("dewPoint").innerHTML = response2.current["dewPoint"];
                    document.getElementById("feelsLikeTemp").innerHTML = response2.current["feelsLikeTemp"];
                    document.getElementById("uvIndex").innerHTML = response2.current["uvIndex"];
                    document.getElementById("visibility").innerHTML = response2.current["visibility"];
                    document.getElementById("pressure").innerHTML = response2.current["pressure"];
                    document.getElementById("pressure1").innerHTML = response2.current["pressure"];
                    document.getElementById("windDirection").innerHTML = response2.current["windDir"];
                    document.getElementById("windGust").innerHTML = response2.current["windGust"];
                    document.getElementById("windDirectionString").innerHTML = response2.current["windDirString"];
                    document.getElementById("thunderProb").innerHTML = response2.current["thunderProb"];
                    document.getElementById("precipRate").innerHTML = response2.current["precipRate"];
                    document.getElementById("precipProb").innerHTML = response2.current["precipProb"];
                    var condition = response2.current["symbolPhrase"];
                    document.getElementById("symbolPhrase").innerHTML = condition[0].toUpperCase() + condition.substring(1);
                    
                    var imgURL ; 
                    if(condition.includes("rain") || condition.includes("showers")){
                        imgURL = "./assets/rainy.svg";
                    }
                    else if(temp<10){
                        imgURL = "./assets/snow.svg";
                    }
                    else if(condition.includes("cloud")){
                        imgURL = "./assets/cloudy.svg";
                    }
                    else if(condition.includes("overcast")){
                        imgURL = "./assets/overcast.png"
                    }
                    else if(condition.includes("clear")){
                        imgURL = "./assets/high_sunny.svg";
                    }
                    else if(condition.includes("cloud") && condition.includes("partly")){
                        imgURL = "./assets/sunny.svg";
                    }
                    else if(condition.includes("thunder")){
                        imgURL = "./assets/thunder.svg";
                    }

                    document.getElementById("weather-img").src = imgURL ; 
                    

                    
                })
                .catch(err2 => console.error(err2))

        })

        .catch(err => {
            console.error(err);
            window.alert("Info Not Available");
        });
})


function deleteClass() {
    var divToRemove = document.querySelector('.top-section');
    divToRemove.remove();
}

// function navigate(){
//     var input_element = document.getElementById("input-button").value;
//     window.location.href = "./index.html";
//     city_name.innerText = input_element;
//     //search_btn.clicked; 
// }





