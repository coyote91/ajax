
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

<link rel="stylesheet" type="text/css" href="./css/style.css">

<link href="https://fonts.googleapis.com/css?family=Codystar|Denk+One|Eater|Fontdiner+Swanky|Hanalei|Julee|Kranky|Lakki+Reddy|Londrina+Sketch|Metal+Mania|Monoton|Mystery+Quest|Nosifer|Ribeye+Marrow|Sonsie+One|Zeyada" rel="stylesheet">

<script language="JavaScript" type="text/javascript" src="./js/busqueda.js"></script>

<script>
	 

        

         //this.form.action="somethingelse";
         

       function z()
	  {
          
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
          else
          { 
          	
          	document.getElementById('form').action = '?op=search&vista=listarticulos';

          }
          	
	  
	  }


       function y()
	  {
          
          var articulo_dos = document.getElementById("articulodos").value;
          var ciudad_dos = document.getElementById("ciudadybarriodos").value;


	  	 // document.getElementById("enviar").preventDefault();
	  	 if(articulo_dos == "" && ciudad_dos == ""  /* .length == 0  */ )
          {
              alert("Debe ingresar algun dato");

              /*document.getElementById("env").addEventListener("click", function(event)
                   {
                      event.preventDefault()
                    });*/
          }  


  
	  
	  }
           
	 
           
	 

</script>

</head>
<body>
<?php

extract($_REQUEST);

?>

 <div id="barra">
      
      <div id="contenedorlogo">

        <a href="http://localhost/metodoajaxdom/index.php"><h3 id="titulopricebook"><span id="pr">PR</span><span id="signodolar" >$</span><span id="ce">CE</span> <span id="book">BOOK</span></h3>
       </a>

      </div>

    </div>
    
              <div id="contenedorglobal"   class="clearfix" >


    <div id="contenedorformdos">

                             
                            <form action="" method="POST" name="formdos" id="formdos" >

                             <input type="text" name="articulo"  id="articulodos" class="input" placeholder="Buscar por articulo, marca"/>
                              <input type="text" name="ciudadybarrio" id="ciudadybarriodos" class="input" placeholder="Ingresa tu ciudad y barrio" />
                           <input type="submit" name="env" id="envdos" class="env" value="Enviar" onclick="enviardos(); return false " />

                
                           </form>
                         
                        

                 </div>

     
        
	  
        <div id="contenedorglobalinfo">
      
          <?php 
                
            if ($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']=="localhost/metodoajaxdom/index.php") 
            {
              ?>


                 <div id="contenedorbusqueda">

       
                    <h3 id="titulobusqueda">! Realiza  tu  búsqueda  aquí !</h3> 
        
                        <div id="forminput">
                             
                            <form action="" method="POST" name="form" id="form" >

                             <input type="text" name="articulo"  id="articulo" class="input" placeholder="Buscar por articulo, marca"/>
                              <input type="text" name="ciudadybarrio" id="ciudadybarrio" class="input" placeholder="Ingresa tu ciudad y barrio" />
                           <input type="submit" name="env" id="env" class="env" value="Enviar" onclick="enviar(); return false " />

                
                           </form>
                         
                        </div>  

                   </div>
                 
               
    <div id="contenedorizquierdo">
      
    </div>

    <div id="contenedorderecho">
      
      <div id="resultado">
      
 

    </div>


    </div>

           <?php 
            }
         ?>

      
  <?php 
  
  if (@$vista == "listarticulos") 
  {
?>
     

<?php 
  }

  ?>
 
 

    


	    		
 	
          </div>
        

 </div> <!--- END CONTENEDOR GLOBAL  -->
  	
</body>
</html>