<?php include "head.inc.php" ?>
    <main class="wrapper">
        <section data-vw="home" class="current">
	        <img  class="logo" src="./assets/img/logo.png" alt="Logo"/>

	        <h1>Bonjour, scannez votre code bar ou introduisez votre code.</h1>

	        <form action="/borne/step2">
	            <input type="number" placeholder="Votre code"/>
	            <a href="/borne/step2" class="submit">Retirer mon argent</a>
	        </form>
        </section>

        <section data-vw="step2" style="display: none;">
		<img  class="logo" src="./assets/img/logo.png" alt="Logo"/>
		<h1>Voici <span>50€</span> <br>Merci de retirer vos billets.<br>A bientôt</h1>
		</main>
        </section>
</main>

<?php include "foot.inc.php" ?>