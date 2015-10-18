<!-- CONTAINER  -->
<div class="container vw-virement-step-2">
    <div class="explanation">
        <p class="comment">Choisir un bénéficiaire
            <em>auquel effectuer le virement</em></p>
        <a class="ctaButton ctaButton2 changeAccount" href="step-1.php">Changer de bénéficiaire</a>
    </div>
    <form action="#">
        <input class="search" type="search" placeholder="Rechercher un bénéficiaire"/>
        <ul class="accounts">
            <li>
                <input id="compte1" class="hidden" type="radio" name="account" value="compte1"/>
                <label class="on" for="compte1">Jéremy Coel <br> BE11 7864 3876 8334</label>
            </li>
            <li>
                <input id="compte2" class="hidden" type="radio" name="account" value="compte2"/>
                <label for="compte2">Jéremy Cool <br> BE67 6529 5317 7667</label>
            </li>
            <li>
                <input id="compte3" class="hidden" type="radio" name="account" value="compte3"/>
                <label for="compte3">Jéremy Coolman <br> BE86 0758 2478 8334</label>
            </li>
            <li>
                <input id="compte4" class="hidden" type="radio" name="account" value="compte4"/>
                <label for="compte4">Jéremy Pascoel <br> BE19 1927 7964 0468</label>
            </li>

        </ul>
    </form>

    <div class="actions">
        <a class="cancel" href="/logged.php">Annuler le virement</a>
        <a class="ctaButton validate" href="step-3.php">Confirmer le bénéficiaire</a>
    </div>

</div>
<!-- end CONTAINER -->