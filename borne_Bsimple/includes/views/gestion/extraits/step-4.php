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

.mid_part {

	width: 50%;
	margin: 100px auto;
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
<div class="container vw-extraits-step-4">

	<div class='page_header'>

		<a class='header_left' href="/logged.php"> Revenir à l'acceuil </a>

		<h1> Impression des extraits de compte </h1>
	
	</div>

	<div class='main'>

		<div class='mid_part'>

			<p> Vos extrait sont en cours d'impression, John</p>
			<p> 10/16 extraits imprimé</p>
			<p>Le temps d'impression est de 2 minutes </p>

		</div>	

	</div>

	<div class='page_footer'>
		
		<a class='header_left' href="/gestion/extraits/step-1.php"> Imprimer d'autres extraits </a>

		<a class='header_right' href="/gestion/extraits/step-1.php"> Stop </a>

	</div>

</div>
<!-- end CONTAINER -->