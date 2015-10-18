<style type="text/css">

body, html {

	margin: 0;
	padding: 0;

	font-family: sans-serif;
}

.clearfix:after {
     visibility: hidden;
     display: block;
     font-size: 0;
     content: " ";
     clear: both;
     height: 0;
     }
.clearfix { display: inline-block; }
/* start commented backslash hack \*/
* html .clearfix { height: 1%; }
.clearfix { display: block; }
/* close commented backslash hack */

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

.header_right p {

	margin: 0;
}

.header_right ul {

	list-style: none;
	padding: 0;
	margin: 0;
}

.header_right ul li {

	float: left;

	width: 50px;
	height: 20px;
	padding: 5px;
	margin: 5px;
	background-color: #333;
}

.main {

	margin-top: 60px;
	text-align: center;
}

.main h2 {

	display: inline-block;
}

.main h3 {

	font-size: 2.2em;
	margin-top: 0;
}
.main ul {

	width: 80%;
	display: block;
	list-style: none;
	padding: 0;
	margin: 0 auto;
}

.main ul li {

	float: left;

	width: calc(80%/6);
	height: 50px;
	line-height: 50px;
	padding: 5px;
	margin: 5px;
	background-color: #BBB;
}

.main ul .none {

	background-color: #444;
}

.main ul li a {

	color: white;
	text-decoration: none;
}

.page_footer {

	width: 800px;
	margin: 0 auto;
	margin-top: 50px;
}

.action{
	width: 45%;
    	margin: 34px auto 0;
}

.page_footer a , .action a{	

	width: 200px;
	text-align: center;
	display: block;

	float: left;

	background-color: #222;

	padding: 20px;

	color: white;
	text-decoration: none;

	font-family: sans-serif;
}

.question{
	float: left;
	margin-top: 15px;
}

.page_footer a:last-child, .action a:last-child{	
	float: right;
}

.dont_forget h4{
	text-align: center;
	font-size: 2em;
	margin-top: 50px;
	position: relative;
}
.dont_forget h4:after{
	content: '';
	position: absolute;
	left: 50%;
	bottom: -30px;
	transform: translateX(-50%);
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 20px 20px 0 20px;
	border-color: black transparent transparent transparent;
}
</style>
<!-- CONTAINER  -->
<div class="container vw-retrait-step-1">

	<div class='page_header clearfix'>

		<a class='header_left' href="step-1.php"> Revenir à l'écran précédent </a>

		<div class="header_right ">

			<a href="#"> changer de montant</a>

		</div>

	</div>

	<div class='main clearfix'>		

		<h3> Retrait en cours</h3>
		<h2> Souhaitez vous le ticket de la transaction ?</h2>
		<div class='action'>
			<div class="clearfix">
				<a href="#"> Oui</a>
				<a href="#">Non</a>
			</div>
			<form action="" class="question">
				<input type="checkbox" id="check">
				<label for="check">Ne plus me poser la question</label>
			</form>
		</div>

	</div>

	<div class='page_footer clearfix'>

		<a href="/retrait/step-1.php"> Refaire un retrait</a>
		<a href="/logged.php">Retour à l'accueil</a>

	</div>

	<div class="dont_forget">
		<h4>N'oubliez pas votre argent</h4>
	</div>

</div>
<!-- end CONTAINER -->