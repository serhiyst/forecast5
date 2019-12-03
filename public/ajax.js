$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function () {
	$('#123').click(function() {
		var div = document.getElementById("forecast");
        div.innerHTML = '';
		$.ajax('/data',   
			{     
				data: $('#search'),
				success: function (data, status, xhr) {    
				var forecast = JSON.parse(data);
				
    function createTable(forecast) {       
        var table = document.createElement("table");
        table.border=1;
 		 var tr = document.createElement("tr");
            var th = document.createElement("th");
            th.innerHTML='City';
            tr.appendChild(th);
            th = document.createElement("td");
            th.innerHTML='Day';
            tr.appendChild(th);
            th = document.createElement("td");
            th.innerHTML='Temp';
            tr.appendChild(th);
            th = document.createElement("td");
            th.innerHTML='Humidity';
            tr.appendChild(th);
            th = document.createElement("td");
            th.innerHTML='Pressure';
            tr.appendChild(th);
            table.appendChild(tr);
        var body = document.createElement("tbody");
        for (var i=0; i<forecast.length; i++){
            var tr = document.createElement("tr");
            var td = document.createElement("td");
            td.innerHTML=forecast[i].city;
            tr.appendChild(td);
            td = document.createElement("td");
            td.innerHTML=forecast[i].day;
            tr.appendChild(td);
            td = document.createElement("td");
            td.innerHTML=forecast[i].temp;
            tr.appendChild(td);
            td = document.createElement("td");
            td.innerHTML=forecast[i].humidity;
            tr.appendChild(td);
            td = document.createElement("td");
            td.innerHTML=forecast[i].pressure;
            tr.appendChild(td);
            body.appendChild(tr);
        };
    table.appendChild(body);
    var div = document.getElementById("forecast");
    div.appendChild(table);
}
createTable(forecast); 
}
});
});
});

          