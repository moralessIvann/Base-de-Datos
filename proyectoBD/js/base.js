var bd;

function iniciar(){

	zonadatos = document.getElementById("zonaDatos");
	boton = document.getElementById("registrar");

	boton.addEventListener("click", agregarObjeto , false);


    var solicitud = indexedDB.open("mibase",{ketPath : "nombre"});

      
    solicitud.onsucess = function(e){

    	bd = e.target.result;
    }


solicitud.onupgradeneeded = function(e){
	bd.createObjetecStore("producto", );
}
}




window.addEventListener("load",iniciar,false);