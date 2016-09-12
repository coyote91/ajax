<?php

extract($_REQUEST);


?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	
	 <script language="JavaScript" type="text/javascript" src="./js/busqueda.js"></script>
	<link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
	
	
	<form name="form"  action="" onsubmit="enviar(); return false">
         <input type="text" name="articulo" value=<?php echo @$articulo; ?> />
          <input type="text" name="ciudadybarrio" value=<?php echo @$ciudadybarrio; ?> />
	     <input type="submit" name="env" id="env" class="env" value="Enviar" />

		</form>
 

  <div id="contenedor">
  	 

		<div id="resultado">
			
 

		</div>

 



  </div>  
	
	
</body>
</html>