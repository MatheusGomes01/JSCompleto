<!DOCTYPE html>
<html>
<head>
	<title>Caracteres</title>
</head>
<body>

	<div class="container">
		<h1>JavaScript</h1>
		<form action="#">
			<textarea cols="50" rows="10" readonly="">
				Contrato de serviços prestados
			</textarea>

			<div>

				<label>
					<input type="checkbox" name="check" id="check" checked=""> Li e aceito os termos deste contrato
				</label>
			</div>
			<div>
				<input type="submit" name="btn" id="btn" value="next">
			</div>
		</form>
	</div>

	<script type="text/javascript">
		(() => {
			var btn = document.querySelector('#btn');
			var check = document.querySelector('#check');

			toggleCheck();;

			check.addEventListener('change', function() {

				/*if(this.checked){
					btn.disabled = false;
				}else {
					btn.disabled = true;
				}*/

				toggleCheck();
			})

			function toggleCheck(){
				btn.disabled =  !check.checked 
			}
		})()
	</script>
</body>
</html>