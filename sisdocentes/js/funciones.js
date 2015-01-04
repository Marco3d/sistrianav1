function eliminiar(url,id){
	if(confirm("Desea eliminar este registro?")){
		window.location=url+"?id="+id;
	}
}
function aprobar(url,id){
	if(confirm("Desea activar esta votación?")){
		window.location=url+"?id="+id;
	}


}

function noaprobar(url,id){
	if(confirm("Desea cerrar esta votación?")){
		window.location=url+"?id="+id;
	}


}


function aprobarper(url,id){
	if(confirm("Desea activar el personero?")){
		window.location=url+"?id="+id;
	}


}

function noaprobarper(url,id){
	if(confirm("Desea desactivar el personero?")){
		window.location=url+"?id="+id;
	}


}


function aprobarcon(url,id){
	if(confirm("Desea activar el contralor?")){
		window.location=url+"?id="+id;
	}


}

function noaprobarcon(url,id){
	if(confirm("Desea desactivar el contralor?")){
		window.location=url+"?id="+id;
	}


}

function aprobarima(url,id){
	if(confirm("Desea activar la imagen?")){
		window.location=url+"?id="+id;
	}


}

function noaprobarima(url,id){
	if(confirm("Desea desactivar la imagen?")){
		window.location=url+"?id="+id;
	}


}



