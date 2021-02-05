<?php 
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
error_reporting(0);
include("includeQuery/conexion.php");
include ("plantillaIncludes/header.php");
include("includeQuery/insertarTienda.php")

 ?>

 	  <div class="container">

        <div class="row">
        	
        	<div class="col s12 center-align"><h1>Tienda</h1></div>
        </div>

	  	<div class="row">
	  		<div class="col s3">&nbsp</div>
	  		<div class="col s6">
	  			
            <form action="#" method="POST">
			
			
		  <input  type="number"  name="idTienda" placeholder="Ingrese id de tienda" id="idTienda"  min="0" class="validate" required>

          <label for="textarea1"> </label>
			
            	
          <input placeholder="Ingrese nombre" id="Nombre" name="Nombre" type="text" class="validate" required>
         
          <label for="textarea2"> </label> 
		  
		  
		  <input placeholder="Ingrese dirección" id="Direccion" name="Direccion" type="text" class="validate" required>
         
          <label for="textarea3"> </label> 
		  
		  
		  <input placeholder="Ingrese tel" id="Telefono" name="Telefono" type="text" class="validate" required>
         
          <label for="textarea4"> </label> 
		  
		  
		  <input  type="number"  name="Stock" placeholder="Ingrese stock" id="Stock"  min="0" class="validate" required>

          <label for="textarea1"> </label>
		  
		  
		  <input  type="number"  name="Articulo_idArticulo" placeholder="Ingrese id Articulo" id="Articulo_idArticulo"  min="0" class="validate" required>

          <label for="textarea1"> </label>
		  
		  
		  

          <br>
		  <br>
		  <br>
		  
          <p> </p>

          <input type="submit" name="boton"  id="registrar"   value="insertar" class="waves-effect waves-light btn " />


          <input type="submit" name="boton" id="registrar"   value="modificar" class="waves-effect waves-light btn"/>


          <input type="submit" name="boton" id="registrar"   value="borrar" class="waves-effect waves-light btn"/>

          </form>
            
	  		</div>

	  	</div>
	  		
	  		<div class="row">

	  	    
	  	    	
              <h1> </h1>
			<div class="col m12 center-align">

            <iframe src="includeQuery/tablaTienda.php" width="100%" height="500px" frameborder="0">
              
            </iframe>

	  	    </div>
			
			<center>
	  <medium><form method="get" action="http://localhost/bd_p10/index.php"><button type="submit" class="waves-effect waves-light btn">Ir a inicio</button></form></medium>
	  </center>
	  			
	  		</div>
	  	
	  </div> <!--fin contenedor-->
