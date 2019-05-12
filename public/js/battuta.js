//-------- Api select para paises, estados y ciudades --------//

let paisesCiudades=[];
let BATTUTA_KEY ="00000000000000000000000000000000"; //Key se vence a medida que se usa

url = "https://geo-battuta.net/api/country/all/?key="+BATTUTA_KEY+"&callback=?";

$.getJSON(url,function(paises){
    console.log(paises);
    $('#pais').material_select();

    //Recorrer los paises
    $.each(paises,function(key, pais){
        $("<option></option>")
            .attr("value", pais.code)
            .append(pais.name)
            	.appendTo($("#pais"));
    });
    //Cambio
	$("#pais").material_select("update");
	$("#pais").trigger("change");
});

//Al escoger el pais llamamos al servicio que traiga los estados de ese paos
$("#pais").on("change", function(){

	codePais=$("#pais").val();

	url = "https://geo-battuta.net/api/region/"
	    +codePais
	    +"/all/?key="+BATTUTA_KEY+"&callback=?";

	$.getJSON(url, function(estados){
		console.log(estados);
		$("#estado option").remove();
		$.each(estados,function(key,estado){
		    $("<option></option>")
		        .attr("value",estado.region)
		        .append(estado.region)
		        .appendTo($("#estado"));
		});
		$("#estado").material_select('update');
	    $("#estado").trigger("change");
	});
});

//Al escoger un estado llamamos el servicios que retorna las ciudades
$("#estado").on("change", function(){
	codePais=$("#pais").val();
	estado=$("#estado").val();

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
        $("#ciudad option").remove();
        
		//loop through regions..
		$.each(ciudades,function(key,ciudad)
		{
		    $("<option></option>")
		        .attr("value",i++)
		        .append(ciudad.city)
		        .appendTo($("#ciudad"));
		});
	// trigger "change" to fire the #state section update process
	$("#ciudad").material_select('update');
	$("#ciudad").trigger("change");
	});
});
