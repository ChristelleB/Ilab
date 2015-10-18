<style type="text/css">

body, html {

	margin: 0;
	padding: 0;

	font-family: sans-serif;
}

.container {

	width: 100%;
	margin: 0 auto;
}

.page_header{

	width: 100%;
	margin-top: 50px;

	text-align: center;
}

.page_header a {

	display: block;
	background-color: #CCC;

	padding: 20px;

	color: white;
	text-decoration: none;

	font-family: sans-serif;
}

.page_header h1 {
	
	display: inline;
}

.header_left {

	float: left;
}

.header_right {

	float: right;
}

.main {

	margin-top: 100px;
	width: 70%;
	margin: 0 auto;
}

.main form {

	width: 50%;
	margin: 0 auto;
	margin-top: 100px;
}

.main form fieldset {

	border: none;
}

.page_footer {

	margin: 0 auto;
	margin-top: 50px;
	text-align: center;
}

.page_footer a {	

	text-align: center;
	display: block;

	margin: 0 auto;

	background-color: #222;

	padding: 20px;

	color: white;
	text-decoration: none;

	font-family: sans-serif;
}

.page_footer p {
	
	display: inline-block;
	
}

.footer_left {

	float: left;
}

.footer_right {

	float: right;
}




</style>

<!-- CONTAINER  -->
<div class="container vw-extraits-step-2">

	<div class='page_header'>

		<a class='header_left' href="/logged.php"> Revenir à l'acceuil </a>

		<h1> Vos opérations du 8 Janvier au 28 fevrier 2015 </h1>
	
	</div>

	<div class='main'>

		<form action='#' method='get'>

			<fieldset>
				<input type='checkbox' id='vir1' name='vir1'>
				<label for='vir1'> Virement XXXXX à XX de XX</label>
			</fieldset>

			<fieldset>
				<input type='checkbox' id='vir2' name='vir2'>
				<label for='vir2'> Virement XXXXX à XX de XX</label>
			</fieldset>

			<fieldset>
				<input type='checkbox' id='vir3' name='vir3'>
				<label for='vir3'> Virement XXXXX à XX de XX</label>
			</fieldset>

			<fieldset>
				<input type='checkbox' id='vir4' name='vir4'>
				<label for='vir4'> Virement XXXXX à XX de XX</label>
			</fieldset>
		
		</form>

	</div>

	<div class='page_footer'>
		
		<a class='footer_left' href="/gestion/extraits/step-1.php"> retourner a l'étape précedente </a>

		<p> Vous avez 10 virements </br>Temps d'attente estimé à 2minutes </p>

		<a class='footer_right' href="/gestion/extraits/step-4.php"> Imprimer tout </a>

	</div>

</div>
<!-- end CONTAINER -->