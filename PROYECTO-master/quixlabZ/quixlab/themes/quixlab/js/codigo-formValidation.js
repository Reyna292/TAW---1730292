$(document).on('keyup','#precio1', function(){

	var precio1 = 0;
	var precio2 = 0;
	var horas =0;

	horas= document.getElementById("hora").value;
	precio1= document.getElementById("precio1").value;
	precio2 = document.getElementById("precio2").value;


	

	var total = parseInt(precio1)*horas + parseInt(precio2);
	document.getElementById("total").value = total;
	console.log("1 "+total);

})

$(document).on('keyup','#precio2', function(){
	
	var precio1 = 0;
	var precio2 = 0;
	var horas =0;

	

	horas= document.getElementById("hora").value;
	precio1= document.getElementById("precio1").value;
	precio2 = document.getElementById("precio2").value;

	if(isNaN(precio1)){
		precio1=0;
	}
	if(isNaN(precio2)){
		precio2=0;
	}
	if(isNaN(horas)){
		horas=0;
	}

	var total = parseInt(precio1)*horas + parseInt(precio2);
	document.getElementById("total").value = total;
	console.log("2 "+total);
})

$(document).on('keyup','#hora', function(){

	var precio1 = 0;
	var precio2 = 0;
	var horas =0;

	horas= document.getElementById("hora").value;
	precio1= document.getElementById("precio1").value;
	precio2 = document.getElementById("precio2").value;

	if(isNaN(precio1)){
		precio1=0;
	}
	if(isNaN(precio2)){
		precio2=0;
	}
	if(isNaN(horas)){
		horas=0;
	}
	var total = parseInt(precio1)*horas + parseInt(precio2);
	document.getElementById("total").value = total;
	console.log("3 h "+total);

})


$(document).on('keyup','#canti', function(){
    var cantidad = 0;
    var precio = 0;
    
    cantidad= document.getElementById("canti").value;
    precio= document.getElementById("val-monedas").value;
    //precio2 = document.getElementById("precio2").value;
    var total = parseInt(precio)*cantidad;
    document.getElementById("total").value = total;
    console.log("3 h "+total);
}) 