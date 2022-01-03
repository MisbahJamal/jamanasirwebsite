function loadMap() {
    //USE LATITUDE LONGITUDE OF ANY CITY YOU WANT TO SHOW AS ZOOMED
	var mardan = {lat: 34.025917, lng:71.560135};
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 9,
      center: mardan
    });

    var allData = JSON.parse(document.getElementById('allData').innerHTML);
    showAllContainers(allData)
}

function showAllContainers(allData) {
	var infoWind = new google.maps.InfoWindow;
	Array.prototype.forEach.call(allData, function(data){
		var content = document.createElement('div');
		var title = document.createElement('strong');
		var distance = document.createElement('strong');
        var distance1 = document.createElement('strong');
        var STATUS = document.createElement('strong');
		var avg_distance = (parseFloat(data.distance)+parseFloat(data.distance1))/2;
        //IMAGE SECTION
        var img = document.createElement('img');
		img.src = 'img/container-pic.jpg';
		img.style.width = '100px';
		content.appendChild(img);

        //TO BREAK LINE as <br> tag
        content.appendChild(document.createElement("br"));

        //Name of the Container
		title.textContent = "Name: "+data.name;
		content.appendChild(title);
        //TO BREAK LINE as <br> tag
        content.appendChild(document.createElement("br"));

        //FIRST SENSOR DISTANCE
        if(avg_distance > 50){
            distance.textContent = "STATUS: FULL";
            content.appendChild(distance);
          
        }
        else{
            distance.textContent = "STATUS: NOT FULL";
            content.appendChild(distance);
      
        }
        
        //TO BREAK LINE as <br> tag
        content.appendChild(document.createElement("br"));
        

        
		var marker = new google.maps.Marker({
	      position: new google.maps.LatLng(data.latitude, data.Longitude),
	      map: map
	    });

	    marker.addListener('mouseover', function(){
	    	infoWind.setContent(content);
	    	infoWind.open(map, marker);
	    })
	})
}