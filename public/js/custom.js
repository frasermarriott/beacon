$(function(){


	// Timeline newsfeed

	var timelineBlocks = $('.cd-timeline-block'),
	offset = 0.8;

	//hide timeline blocks which are outside the viewport
	hideBlocks(timelineBlocks, offset);

	//on scolling, show/animate timeline blocks when enter the viewport
	$(window).on('scroll', function(){
		(!window.requestAnimationFrame) 
			? setTimeout(function(){ showBlocks(timelineBlocks, offset); }, 100)
			: window.requestAnimationFrame(function(){ showBlocks(timelineBlocks, offset); });
	});

	function hideBlocks(blocks, offset) {
		blocks.each(function(){
			( $(this).offset().top > $(window).scrollTop()+$(window).height()*offset ) && $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
		});
	}

	function showBlocks(blocks, offset) {
		blocks.each(function(){
			( $(this).offset().top <= $(window).scrollTop()+$(window).height()*offset && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) && $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
		});
	}

	// var city_name = $("#city_name").val();
	// console.log(city_name)

	// $.get("http://api.openweathermap.org/data/2.5/weather?q="+city_name+",uk&appid=43bf092fe352dfb22bfd073a36dd9824", function(data) { 
	//     console.log(data);
	//     var celcius = data.main.temp - 273.15;
	//     var temp = Math.round(celcius);
	//     var desc = data.weather[0].description;
	//     var icon = data.weather[0].icon;
	//     console.log(desc);
	//     console.log(icon);
	//     console.log(temp);

	//     $(".weather_temp").html(temp);
	//     $(".weather_desc").html(desc);

	//     $(".weather_temp").before("<img src='../img/weather/"+icon+".svg' alt='weather icon'>");
	// });




// DarkSky Api
	// var city_name = $("#city_name").val();
	// console.log(city_name)

	// var geocoder =  new google.maps.Geocoder();
 //    geocoder.geocode( { 'address': +city_name+', uk'}, function(results, status) {
 //    	if (status == google.maps.GeocoderStatus.OK) {
	// 		city_coordinates = results[0].geometry.location.lat() + "," +results[0].geometry.location.lng(); 
	// 		console.log(city_coordinates);
	// 	} else {
 //            city_coordinates = 'n/a';
 //        }

 //        $.get("https://api.darksky.net/forecast/39e319e7aa400786efb3e800cb922818/"+city_coordinates, function(data) { 

	// 	});
 //    });

	
});