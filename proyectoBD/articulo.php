<?php 
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
error_reporting(0);
include("includeQuery/conexion.php");
include ("plantillaIncludes/header.php");
include("includeQuery/insertarArticulo.php")

 ?>

 	  <div class="container">

        <div class="row">
        	
        	<div class="col s12 center-align"><h1>Artículo</h1></div>
        </div>

	  	<div class="row">
	  		<div class="col s3">&nbsp</div>
	  		<div class="col s6">
	  			
            <form action="#" method="POST">
			
			
		  <input  type="number"  name="idArticulo" placeholder="Ingrese id de articulo" id="idArticulo"  min="0" class="validate" required>

          <label for="textarea1"> </label>
			
            	
          <input placeholder="Ingrese nombre" id="Nombre" name="Nombre" type="text" class="validate" required>
         
          <label for="textarea2"> </label> 
		 
		 
		  <input placeholder="Ingrese código de barra" id="CodigoBarra" name="CodigoBarra" type="text" class="validate" required>
         
          <label for="textarea3"> </label> 
		  
		  
		  <input placeholder="Ingrese marca" id="Marca" name="Marca" type="text" class="validate" required>
         
          <label for="textarea4"> </label> 
		  
		  
		  <input placeholder="Ingrese stock" id="Stock" name="Stock" type="text" class="validate" required>
         
          <label for="textarea5"> </label> 
		  

		 <input placeholder="Ingrese presentación" id="Presentacion" name="Presentacion" type="text" class="validate" required>
         
          <label for="textarea6"> </label><br><br>
		  
		  
		  <input type="date" name="FechaCaducidad"  value=""   >

          <label for="first_name">fecha de caducidad</label> <br><br>		
		  
		  
		  <input placeholder="ID de proveedor " id="Proveedor_idProveedor" name="Proveedor_idProveedor" type="text" >
         
          <label for="textarea6"> </label>
		  
		  <input placeholder="ID de departamento" id="Departamento_idDepartamento" name="Departamento_idDepartamento" type="text" class="validate" required>
         
          <label for="textarea6"> </label>
		  
		  
		  
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

            <iframe src="includeQuery/tablaArticulo.php" width="100%" height="500px" frameborder="0">
              
            </iframe>

	  	    </div>
			
			<center>
			<medium><form method="get" action="http://localhost/bd_p10/index.php"><button type="submit" class="waves-effect waves-light btn">Ir a inicio</button></form></medium>
			</center>
	  			
	  		</div>
	  	
	  </div> <!--fin contenedor-->
