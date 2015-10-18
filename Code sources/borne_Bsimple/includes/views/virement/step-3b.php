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
	margin-top: 20px;

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

.main {

	margin-top: 60px;
}

.mid_part {

	width: 70%;
	margin: 0 auto;

	font-family: sans-serif;
	color: #333;
}

.mid_part h2, .mid_part p {

	display: inline-block;
	font-size: 1em;
	margin: 20px 0;
}

.mid_part form {

	width: 100%;
}

.mid_part form h2 {

	font-size: 1.5em;
	margin-top: 50px;
}

.mid_part form ul {

	float: right;

	padding: 0;
	margin: 0;
	margin-top: 40px;

	list-style: none;
}

.mid_part form ul li {

	float: left;
	margin: 20px;
}

.mid_part form ul li a {

	padding: 10px 20px;
	background-color: #AAA;
	color: white;
	text-decoration: none;
}

.mid_part form fieldset {

	border: none;
	margin-top: 30px;
	padding: 0;
}

.mid_part form fieldset label {

	display: block;
}

.mid_part form fieldset input {

	display: block;
	margin-top: 5px;
	width: 70%;
	height: 30px;
}

.mid_part form fieldset textarea {

	display: block;
	margin-top: 5px;
	width: 70%;
	height: 100px;
}

.page_footer {
	float: right;
	margin-top: -59px;
}

.page_footer a {	

	width: 200px;
	text-align: center;
	display: block;

	margin: 0 auto;

	background-color: #222;

	padding: 20px;

	color: white;
	text-decoration: none;

	font-family: sans-serif;
}

.left {

	float: left;
}

.right {

	float: right;
}

.mid_part form fieldset input {

	display: block;
	margin-top: 5px;
	width: 70%;
	height: 30px;
}

.mid_part form fieldset textarea {

	display: block;
	margin-top: 5px;
	width: 70%;
	height: 100px;
}


.mid_part form .structure {

	display: inline-block;
	width: 35%;
	border: none;
	margin-top: 30px;
	padding: 0;
}

.mid_part form .structure label {

	font-size: .8em;
}

.mid_part form .structure input {

	display: block;
	margin-top: 5px;
	height: 30px;
}


.mid_part form .checkbox {

	display: inline-block;
	width: 50%;
	border: none;
	margin-top: 30px;
	padding: 0;
}

.mid_part form .checkbox label {

	display: inline-block;
}

.mid_part form .checkbox input {

	display: inline-block;
	margin-top: 5px;
	height: initial;
	width: initial;
}


.left {

	float: left;
}

.right {

	float: right;
}

</style>


<!-- CONTAINER  -->
<div class="container vw-virement-step-1">

	<div class='page_header'>

		<a class='left' href="/logged.php"> Revenir à l'acceuil </a>

		<h1> Réalisation d'un virement </h1>

		<a class='right' href="#"> Gerer mes bénéficiaires </a>

	</div>

	<div class='main'>

		<div class='mid_part'>

		<h2> BE 5151 - 1561 - 1515 - 2151 </h2> <p> &#8594;</p> <h2> BE 5151 - 1561 - 1515 - 2151 </h2>

		<form action='#' method="get">

			<fieldset >
			<label for='montant'> Introduisez le montant du virement </label>
			<input id='montant' type="number" value='&#8364;' placeholder='montant' name='montant'>
			</fieldset>

			<h2> Introduisez une communication</h2>

			<ul>

				<li><a href="step-3.php"> Libre </a></li>
				<li><a href="step-3b.php"> Structurée </a></li>

			</ul>

			<fieldset class='structure'>
			<label for='entreprise'> Numéro de l'entreprise </label>
			<input id='entreprise' name='entreprise'>
			</fieldset>

			<fieldset class='structure'>
			<label for='code'> Communication structurée </label>
			<input id='code' placeholder='+++     /         /       +++' value='' name='code' type="number">
			</fieldset>

			<fieldset class='checkbox'>
			<input type='checkbox' id='register' name='register'>
			<label for='register'> Enregistré cette action pour le profil  </label>
			</fieldset>
			

		</form>

		</div>

	</div>

	<div class='page_footer'>

		<a href="step-4.php"> Valider le virement </a>

	</div>
	
	
</div>
<!-- end CONTAINER -->