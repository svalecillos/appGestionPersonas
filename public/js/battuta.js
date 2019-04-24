//-------- Api select para paises, estados y ciudades --------//

let paisesCiudades=[];
let BATTUTA_KEY ="4238554083076c2a255898facf19dc4c"; //Key se vence a medida que se usa

url = "https://geo-battuta.net/api/country/all/?key="+BATTUTA_KEY+"&callback=?";

$.getJSON(url,function(paises){
    console.log(paises);
    $('#paises').material_select();

    //Recorrer los paises
    $.each(paises,function(key, pais){
        $("<option></option>")
            .attr("value", pais.code)
            .append(pais.name)
            	.appendTo($("#paises"));
    });
    //Cambio
	$("#paises").material_select("update");
	$("#paises").trigger("change");
});

//Al escoger el pais llamamos al servicio que traiga los estados de ese paos
$("#paises").on("change", function(){

	codePais=$("#paises").val();

	url = "https://geo-battuta.net/api/region/"
	    +codePais
	    +"/all/?key="+BATTUTA_KEY+"&callback=?";

	$.getJSON(url, function(estados){
		console.log(estados);
		$("#estados option").remove();
		$.each(estados,function(key,estado){
		    $("<option></option>")
		        .attr("value",estado.region)
		        .append(estado.region)
		        .appendTo($("#estados"));
		});
		$("#estados").material_select('update');
	    $("#estados").trigger("change");
	});
});

//Al escoger un estado llamamos el servicios que retorna las ciudades
$("#estados").on("change", function(){
	codePais=$("#paises").val();
	estado=$("#estados").val();

	url = "http://geo-battuta.net/api/city/"
		+codePais
	    +"/search/?region="
	    +estado
	    +"&key="
	    +BATTUTA_KEY
	    +"&callback=?";

	$.getJSON(url,function(ciudades){
		console.log(ciudades);
  		currentCities=ciudades;
        var i=0;
        $("#ciudades option").remove();
        
		//loop through regions..
		$.each(ciudades,function(key,ciudad)
		{
		    $("<option></option>")
		        .attr("value",i++)
		        .append(ciudad.city)
		        .appendTo($("#ciudades"));
		});
	// trigger "change" to fire the #state section update process
	$("#ciudades").material_select('update');
	$("#ciudades").trigger("change");
	});
});
