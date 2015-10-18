<!-- CONTAINER  -->
<div class="container vw-virement-step-2b">
    <div class="explanation">
        <p class="comment">Entrez un nouveau bénéficiaire
            <em>à qui effectuer le virement</em></p>
        <a class="ctaButton ctaButton2 changeAccount" href="step-1.php" data-hide="Masquer les comptes" data-show="Changer de compte">Changer de bénéficiaire</a>
    </div>

    <form action="#" class="newBenef">
        <div>
            <label class="leftLabel" for="name">Nom et prénom</label>
            <input id="name" type="text" placeholder="Jérémy Coel"/>
        </div>
        <div>
            <label class="leftLabel" for="name">IBAN</label>
            <input id="name" type="text" placeholder="BE54 7364 3764 9384"/>
        </div>
        <div>
            <label class="leftLabel" for="name">Adresse</label>
            <input id="name" type="text" placeholder="Rue Louvrex 15, 4000 Liège"/>
        </div>
        <div>
            <label class="addBenef" for="addBenef">Ajouter à vos bénéficiaires</label>
            <input  class="addBenefCheckbox" id="addBenef" type="checkbox"/>
        </div>
    </form>

    <div class="actions">
        <a class="cancel" href="/logged.php">Annuler le virement</a>
        <a class="ctaButton validate" href="step-3.php">Confirmer le bénéficiaire</a>
    </div>
</div>
<!-- end CONTAINER -->