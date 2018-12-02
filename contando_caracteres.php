<!DOCTYPE html>
<html>
<head>
	<title>Caracteres</title>
</head>
<body>

	<div class="container">
		<h1>JavaScript</h1>
		<textarea name="msg" id="msg" cols="20" rows="10"></textarea>
		<br>
		Restam <span id="resto"></span> Caractesres
	</div>

	<script type="text/javascript">

		(()=>{
			'use strict';
			var maximo = 100;
			var	txtMsg = document.querySelector('#msg');
			var	resto = document.querySelector('#resto');

			resto.innerHTML = maximo;
			txtMsg.addEventListener('input', checkLength);

			function checkLength(e){
				var numero = this.value.length;
				resto.innerHTML = maximo - numero;
			}
		})()
	</script>
</body>
</html>