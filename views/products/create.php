<!DOCTYPE html>
<html>
<head>
	<title>Crear producto</title>
</head>
<body>

	<form class="" method="POST">
		<input type="text" id="name"></input>
		<input type="number" id="price" value=""></input>
		<textarea id="description" rows="8" cols="80"></textarea>
		<button type="button" onclick="save()">Registrar</button>
	</form>

	<script type="text/javascript">
  		function save(){
  			var xhr = new XMLHttpRequest();
  			var url = 'http://localhost/mvc/controllers/ProductsController.php';
  			xhr.open('POST',url,true);
  			xhr.addEventListener('error',function(e){
  				console.log("Un error ocurrio")
  			});
  			var data = new FormData();
  			var name = document.querySelector("#name").value;
  			var price = document.querySelector("#price").value;
  			var description = document.querySelector("#description").value;
  			data.append('name',name);
  			data.append('price',price);
  			data.append('description',description);
  			data.append('action','create')
  			xhr.addEventListener('loadend',function(){
  				console.log("Peticion realizada")
  			});
  			xhr.send(data);
  		}
  		</script>

</body>
</html>

<!-- 
Para agregar los valores que se desean enviar se utiliza una instancia
de FormData, donde se agregan los valores utilizando el metodo append():
var data = new FornmData();
data.append('nombre','valor');
var nombre = document.querySelector("#nombre").value;
-->