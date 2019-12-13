

<form action="index.php?page=contact" method="post">
  <fieldset>
    <legend>donne-moi tes données</legend>
  <div>
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom"/>
  </div>
  <div>
    <label for="prenom">prénom :</label>
    <input type="text" name="prenom" id="prenom" />
  </div>
  <div>
    <label for="email">e-mail :</label>
    <input type="email" name="email" id="email" />
  </div>
  <div>
    <label for="msg">Message :</label>
    <textarea name="msg" id="msg"><?=$msg ?></textarea>
  </div>
  <div>
    <input type="submit" value="envoyer" />
  </div>
  <input type="hidden" value="formulaire" />
</fieldset>
</form>
