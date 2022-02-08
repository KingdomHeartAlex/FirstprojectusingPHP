<form action="submit_contact.php" method="POST" enctype="multipart/form-data">
    <!-- champs de formulaire -->
</form>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email">
    </div>
    <div>
        <label for="message">Votre message</label>
        <textarea placeholder="Exprimez vous" name="message"></textarea>
    </div>

    <form action="submit_contact.php" method="POST" enctype="multipart/form-data">
    <!-- Ajout des champs email et message -->
    [...]
    <!-- Ajout champ d'upload ! -->
    <div class="mb-3">
        <label for="screenshot" class="form-label">Votre capture d'écran</label>
        <input type="file" class="form-control" id="screenshot" name="screenshot" />
    </div>
    <!-- Fin ajout du champ -->
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
