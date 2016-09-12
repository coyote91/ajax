// JavaScript Document
 
// Función para recoger los datos de PHP según el navegador, se usa siempre.
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
 
	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}
 
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
 
//Función para recoger los datos del formulario y enviarlos por post  
function enviar(){
 
  var articulo = document.getElementById("articulo").value;
          var ciudad = document.getElementById("ciudadybarrio").value;


	  	 // document.getElementById("enviar").preventDefault();
	  	 if(articulo == "" && ciudad == ""  /* .length == 0  */ )
          {
              alert("Debe ingresar algun dato");

              /*document.getElementById("env").addEventListener("click", function(event)
                   {
                      event.preventDefault()
                    });*/
          }
          
          
          
          	
  //div donde se mostrará lo resultados
  divResultado = document.getElementById('resultado');
  //recogemos los valores de los inputs

  articulo=document.form.articulo.value;
  ciudadybarrio = document.form.ciudadybarrio.value;
  
 
  //instanciamos el objetoAjax
  ajax=objetoAjax();
 
  //uso del medotod POST
  //archivo que realizará la operacion
  //registro.php
  ajax.open("POST", "./include/listaproductos.php",true);
  //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
  ajax.onreadystatechange=function() {
	  //la función responseText tiene todos los datos pedidos al servidor
  	if (ajax.readyState==4) 
  	{
  			document.getElementById('contenedorbusqueda').style.display = 'none';
        document.getElementById('contenedorformdos').style.display = 'block';

		divResultado.innerHTML = ajax.responseText
  		//llamar a funcion para limpiar los inputs

	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores a registro.php para que inserte los datos
	ajax.send("articulo="+articulo+"&ciudadybarrio="+ciudadybarrio);
}


function enviardos(){
 
  var articulo = document.getElementById("articulodos").value;
          var ciudad = document.getElementById("ciudadybarriodos").value;


	  	 // document.getElementById("enviar").preventDefault();
	  	 if(articulo == "" && ciudad == ""  /* .length == 0  */ )
          {
              alert("Debe ingresar algun dato");

              /*document.getElementById("env").addEventListener("click", function(event)
                   {
                      event.preventDefault()
                    });*/
          }
          
          
          
          	
  //div donde se mostrará lo resultados
  divResultado = document.getElementById('resultado');
  //recogemos los valores de los inputs

  articulo=document.formdos.articulodos.value;
  ciudadybarrio = document.formdos.ciudadybarriodos.value;
  
 
  //instanciamos el objetoAjax
  ajax=objetoAjax();
 
  //uso del medotod POST
  //archivo que realizará la operacion
  //registro.php
  ajax.open("POST", "./include/listaproductos.php",true);
  //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
  ajax.onreadystatechange=function() {
	  //la función responseText tiene todos los datos pedidos al servidor
  	if (ajax.readyState==4) 
  	{
  			document.getElementById('contenedorbusqueda').style.display = 'none';
      

		divResultado.innerHTML = ajax.responseText
  		//llamar a funcion para limpiar los inputs

	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores a registro.php para que inserte los datos
	ajax.send("articulo="+articulo+"&ciudadybarrio="+ciudadybarrio);
}

