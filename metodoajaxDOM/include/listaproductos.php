<?php
 /**
* @Project Metodo ajax DOM-Javascript
* @copyright (c) 2016
* @author David Fernando Ramirez Gonzalez <david.f.r91@hotmail.com>
* @license GNU-GPL  http://www.gnu.org/licenses/ http://es.wikipedia.org/wiki/GNU_General_Public_License
* @since Version 1.0
*/

include'../bd/conexion.php';

extract($_REQUEST);

//variables POST
  /*@$articulo = $_POST['articulo'];
 @$ciudadybarrio = $_POST['ciudadybarrio'];*/


/*             
$consulta = " SELECT *                  
              FROM articulos 
              WHERE nombrearticulo = '".$articulo."'";

                   $query = $conexion->query($consulta);     
                 while($array = $query->fetch(PDO::FETCH_LAZY))
                 {        

         
                         echo $array->articulo." ".$array->nombrearticulo;
             
                 }    */           



  $f = (!empty($ciudadybarrio) ? "AND match(h.ciudad, h.barrio) against('$ciudadybarrio') " : " "  );
    
            
            
$consulta = " SELECT DISTINCT a.peso, a.unidadpeso, 
                     a.id_articulo, 
                     a.articulo, 
                     a.nombrearticulo, 
                     a.marca, 
                     a.fotoproducto
                     ".(!empty($ciudadybarrio) ? ", h.ciudad , h.barrio " : " "  )."
              FROM articulos a
              INNER JOIN  historialcompras h  ON h.id_articulo = a.id_articulo
              WHERE match(a.articulo, a.nombrearticulo, a.marca) against('".$articulo."') ".$f."  ";
            	
    
                   $query = $conexion->query($consulta);     

                 while($array = $query->fetch(PDO::FETCH_LAZY))
                 {        

                  ?>
                 
                  
                   <a id="info" href=<?php echo $_SERVER['PHP_SELF'].'?op=search&vista=detallearticulo&idarticulo='.$array->id_articulo ?> >
                     <img class="fotoproducto" SRC=./<?php echo $array->fotoproducto ?> >     
                      <div id="contnombreproducto">                
               <?php         
                         echo $array->articulo." ".$array->nombrearticulo." ".$array->marca." ".$array->peso." ".$array->unidadpeso;
                 ?> 
                      </div>
                    
                    </a>           
                   

            <?php
              }
             
         ?>
                
