<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Voitures</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1 class="title">Gestion des Voitures</h1>
        
        <!-- Formulaire d'ajout d'une nouvelle voiture -->
        <form action="enregistrer_voiture.php" method="POST" enctype="multipart/form-data" class="voiture-form">
            <div class="form-group">
                <label for="id_voiture">Identifiant unique (ID Voiture) :</label>
                <input type="text" id="id_voiture" name="id_voiture" required>
            </div>

            <div class="form-group">
                <label for="marque">Marque :</label>
                <input type="text" id="marque" name="marque" required>
            </div>

            <div class="form-group">
                <label for="modele">Modèle :</label>
                <input type="text" id="modele" name="modele" required>
            </div>

            <div class="form-group">
                <label for="annee">Année de fabrication :</label>
                <input type="number" id="annee" name="annee" min="1900" max="2023" required>
            </div>

            <div class="form-group">
                <label for="plaque">Plaque d'immatriculation :</label>
                <input type="text" id="plaque" name="plaque" required>
            </div>

            <div class="form-group">
                <label for="statut">Statut :</label>
                <select id="statut" name="statut" required>
                    <option value="disponible">Disponible</option>
                    <option value="louee">Louée</option>
                    <option value="maintenance">En maintenance</option>
                </select>
            </div>

            <div class="form-group">
                <label for="photo">Photo de la voiture :</label>
                <input type="file" id="photo" name="photo" accept="image/*" required>
            </div>

            <div class="form-group">
                <button type="submit" class="submit-button">Enregistrer la voiture</button>
            </div>
        </form>
    </div>
</body>
</html>