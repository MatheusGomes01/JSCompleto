<!DOCTYPE html>
<html>
<head>
	<title>Caracteres</title>
</head>
<body>

	<div class="container">
		<h1>JavaScript</h1>
		<textarea name="msg" id="msg" cols="20" rows="10" maxlength="200"></textarea>
		<div id="restoContainer" style="display: none;">
			Restam <span id="resto"></span> Caractesres
		</div>
	</div>

	<script type="text/javascript">

		(()=>{
			'use strict';
			
			let	txtMsg = document.querySelector('#msg');
			let restoContainer = document.querySelector('#restoContainer');
			let	resto = document.querySelector('#resto');
			let maximo = txtMsg.maxLength;

			restoContainer.style.display = "block";

			showCaracteres(maximo)
			txtMsg.addEventListener('input', checkLength);

			function checkLength(e){

				var numero = this.value.length;
				var CaracteresRestantes = parseInt(maximo) - parseInt(numero);

				showCaracteres(CaracteresRestantes);
			}

			function showCaracteres(n){
				resto.innerHTML = n;
			}
		})()
	</script>
</body>
</html>