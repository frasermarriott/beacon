$(function(){
	var city_name = $("#city_name").val();
	console.log(city_name)

	$.get("http://api.openweathermap.org/data/2.5/weather?q="+city_name+",uk&appid=43bf092fe352dfb22bfd073a36dd9824", function(data) { 
	    console.log(data);
	    var celcius = data.main.temp - 273.15;
	    var temp = Math.round(celcius);
	    var desc = data.weather[0].description;
	    var icon = data.weather[0].icon;
	    console.log(desc);
	    console.log(icon);
	    console.log(temp);

	    $(".weather_temp").html(temp);
	    $(".weather_desc").html(desc);

	    $(".weather_temp").before("<img src='../img/weather/"+icon+".svg' alt='weather icon'>");
	});
});