<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGS</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="container">
      
        <h2 class="modal-title titre">Ajouter un nouveau Etudiant</h2>
      
      <form class="formulaire"action="action.php" method="POST">
      <fieldset>
        <div class="form">
            
            <div class="form-group">
                <label class="label">Nom</label>
                <input type="text" name="nom" class="form-control" placeholder="Entrer votre Nom" required>
            </div>
            <div class="form-group">
            <label class="label">Prénom</label>
                <input type="text" name="prenoms" class="form-control" placeholder="Entrer votre Prénoms" required>
            </div>
            <div class="form-group">
            <label class="label">Numéro AEJ</label>
                <input type="text" name="num_aej" class="form-control" placeholder="Entrer votre numéro AEJ" required>
            </div>
            <div class="form-group">
            <label class="label">Téléphone</label>
                <input type="text" name="tel" class="form-control" placeholder="Entrer votre numéro de téléphone" required>
            </div>
            <div class="form-group">
            <label class="label">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Entrer votre Email" required>
            </div>
            <div class="form-group">
            <label class="label">Fonction</label> </br>
                <select name="fonction">
                    <option>Developpeur Web / Mobile</option>
                    <option>Data IA</option>
                    <option>Réferent Digital</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" name="inscription" class="btn btn-primary">Sauvegarder</button>
            </div>
            <div class="form-group">
                <button type="submit" class="consul"> 
                <a href="consultation.php"> Consulter</a></button>
            </div> 
            </fieldset>        
      </form>
    </div>
</body>
</html>