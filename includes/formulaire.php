

<form action="index.php?page=contact" method="post">
    <legend>donne-moi tes données</legend>
  <div>
    <fieldset>
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom"/>
  </fieldset>
  </div>
  <div>
    <fieldset>
    <label for="prenom">prénom : </label>
    <input type="text" name="prenom" id="prenom" />
    </fieldset>
  </div>
  <div>
    <fieldset>
    <label for="email">e-mail : </label>
    <input type="email" name="email" id="email" />
    </fieldset>
  </div>
  <div>
    <fieldset>
    <label for="mdp">mot de passe : </label>
    <input type="password" name="mdp" id="mdp" />
    </fieldset>
  </div>
  <div>
    <label for="msg">Message :</label>
    <textarea name="msg" id="msg"></textarea>
  </div>
  <div>
    <fieldset>
    <input type="submit" value="envoyer" />
    </fieldset>
  </div>
  <fieldset>
  <input type="hidden" value="formulaire" />
</fieldset>
</form>
