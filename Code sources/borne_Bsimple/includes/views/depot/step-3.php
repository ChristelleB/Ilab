<!-- CONTAINER  -->
<div class="container vw-depot-step-3">
    <div class="explanation">
        <p class="comment">Récapitulatif du dépôt
            <em>Vous avez introduit 200€</em></p>
        <a class="countBillet ctaButton ctaButton2 changeAccount" href="step-2.php">Recompter les billets</a>
    </div>

    <ul class="billets">
        <li number="2"><img src="../assets/img/billets/billet-5e.png" alt="5€"/></li>
        <li number="4"><img src="../assets/img/billets/billet-10e.png" alt="10€"/></li>
        <li number="5"><img src="../assets/img/billets/billet-20e.png" alt="20€"/></li>
        <li number="1"><img src="../assets/img/billets/billet-50e.png" alt="50€"/></li>

    </ul>
    <form action="#" method="post">
        <fieldset>
            <legend>Communication :</legend>
            <input class="hidden" id="free" type="radio" name="type" value="free" checked><label class="commType on free" for="free">Libre</label>
            <input class="hidden" id="structured" type="radio" name="type" value="structured"><label class="commType structured" for="structured">Structurée</label>
            <textarea class="commFree" name="communication" id="communication" placeholder="Votre communication" maxlength="140"></textarea>
            <div  class="commStruct hide">
                <input type="number" placeholder="123" min="0" max="999" maxlength="3"/>
                <div>/</div>
                <input type="number" placeholder="6783" min="0" max="9999" maxlength="4"/>
                <div>/</div>
                <input type="number" placeholder="86547" min="0" max="99999" maxlength="5"/>
            </div>
            <p class="charCounter"><span>0</span>/140</p>
        </fieldset>
    </form>

    <div class="actions">
        <a class="cancel" href="/logged.php">Annuler le dépôt</a>
        <a class="ctaButton validate" href="step-4.php">Confirmer le dépôt</a>
    </div>
</div>

<!-- end CONTAINER  -->