<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  </head>
  <body>
	  <main>
	  	<button type="button" onclick="getProducts()">Hacer petición</button>
	  	<TABLE ID="product-list" class="table">
	  		  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">First</th>
			      <th scope="col">Last</th>
			      <th scope="col">Handle</th>
			    </tr>
			  </thead>
	  	</TABLE>
	  </main>
	  <script type="text/javascript">
  		function getProducts(){
  			var xhr = new XMLHttpRequest();
  			var url = 'http://localhost/mvc/controllers/ProductsController.php';
  			xhr.open('GET',url,true);
  			xhr.addEventListener('error',function(e){
  				console.log('Un error ocurrio',e);
  			});
  			xhr.addEventListener('loadend',function(){
  				//console.log('xhr.readyState:',xhr.responseText);
          products = eval(xhr.responseText);
          products.forEach(function(product){
            idColumn = document.createElement("td");
            nombreColumn = document.createElement("td");
            precioColumn = document.createElement("td");
            descripcionColumn = document.createElement("td");
            row = document.createElement("tr");

            idColumn.innerHTML=product.id;
            nombreColumn.innerHTML=product.nombre;
            precioColumn.innerHTML=product.precio;
            descripcionColumn.innerHTML=product.descripcion;

            // Agregar hijos a la fila
            row.appendChild(idColumn);
            row.appendChild(nombreColumn);
            row.appendChild(precioColumn);
            row.appendChild(descripcionColumn);

            document.querySelector("#product-list").appendChild(row);
          });
  			});
  			xhr.send();
  		}
  		</script>


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
