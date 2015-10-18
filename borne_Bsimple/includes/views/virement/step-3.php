<!-- CONTAINER  -->
<div class="container vw-virement-step-3">
    <div class="explanation">
        <p class="comment">Introduisez le contenu de la transaction
            <em>Que vous souhaitez transférer</em></p>
    </div>
    
    <form action="#" method="post">
        <div class="upComm">
            <label class="euros" for="montant">Montant :</label>
            <input id="montant" name="montant" type="number" min="0" max="9999"/>

            <label for="date">Date :</label>
            <input id="date" name="date" type="date" value="<?php print(date("Y-m-d")); ?>"/>
        </div>
        <fieldset>
            <legend>Communication :</legend>
            <input class="hidden" id="free" type="radio" name="type" value="free" checked><label class="commType on free" for="free">Libre</label>
            <input class="hidden" id="structured" type="radio" name="type" value="structured"><label class="commType structured" for="structured">Structurée</label>
            <textarea class="commFree" name="communication" id="communication" placeholder="Votre communication" maxlength="140"></textarea>
            <div class="commStruct hide">
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
        <a class="cancel" href="/logged.php">Annuler le virement</a>
        <a class="ctaButton validate" href="step-4.php">Confirmer les informations</a>
    </div>
</div>

<!-- end CONTAINER  -->