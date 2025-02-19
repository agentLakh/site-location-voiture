<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Voitures</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="script/script.js" defer></script>
</head>
<body>
    <div class="container">
        <!-- Barre des réseaux sociaux et logo -->
        <div class="social-bar">
            <div class="social-icons-left">
                <a href="https://www.facebook.com" target="_blank">
                    <img src="images/facebook.png" alt="Facebook" class="social-icon">
                </a>
                <a href="https://www.instagram.com" target="_blank">
                    <img src="images/insta.png" alt="Instagram" class="social-icon">
                </a>
                <a href="https://wa.me" target="_blank">
                    <img src="images/wtsp.png" alt="WhatsApp" class="social-icon">
                </a>
            </div>
            <div class="logo-container">
                <img src="images/voitures/logo.PNG" alt="Logo Boutique" class="logo">
            </div>
            <div class="search-cart-icons">
                <a href="javascript:void(0);" class="search-icon" id="search-icon">
                    <img src="images/search.png" alt="Search" class="icon">
                </a>
            </div>
        </div>

        <!-- Titre de la page -->
        <h1 class="title">FASHA'S LOCATION - Gestion des Voitures</h1>

        <!-- Barre de navigation -->
        <div class="top">
            <ul>
                <li>
                    <img src="images/home.png" alt="Home Icon" class="icon">
                    <a href="gestion_voitures.php">Ajouter une nouvelles voitures</a>
                </li>
                <li>
                    <img src="images/shop.png" alt="Library Icon" class="icon">
                    <a href="voitures.php">Nos voitures</a>
                </li>
                <li>
                    <img src="images/infos.png" alt="Library Icon" class="icon">
                    <a href="contacts.php">Nous contacter</a>
                </li>
            </ul>
        </div>

        <!-- Section des voitures -->
        <div class="voitures-container">
            <!-- Exemple de boîte de voiture -->
            <div class="voiture-box">
                <!-- Icône de statut -->
                <div class="statut-icone statut-disponible"></div>
                <img src="images/voitures/toyota.png" alt="Voiture 1" class="voiture-image">
                <h3>Voiture 1</h3>
                <button class="voir-details">Voir détails</button>
                <div class="details-voiture">
                    <p>Marque: Toyota</p>
                    <p>Modèle: Corolla</p>
                    <p>Année: 2020</p>
                    <p>Prix: 20 000 €</p>
                    <p>Disponibilité: <span class="disponibilite-text">Disponible</span></p>
                    <!-- Formulaire de modification -->
                    <form class="modifier-form" style="display: none;">
                        <label for="disponibilite">Changer la disponibilité :</label>
                        <select id="disponibilite" name="disponibilite">
                            <option value="disponible">Disponible</option>
                            <option value="maintenance">En maintenance</option>
                            <option value="loue">Loué</option>
                        </select>
                        <button type="submit">Enregistrer</button>
                    </form>
                </div>
                <div class="actions-voiture">
                    <button class="supprimer">Supprimer</button>
                    <button class="publier">Publier</button>
                    <button class="modifier">Modifier</button>
                </div>
            </div>

            <!-- Répétez la structure pour chaque voiture -->
            <div class="voiture-box">
                <div class="statut-icone statut-maintenance"></div>
                <img src="images/voitures/caddilac.png" alt="Voiture 2" class="voiture-image">
                <h3>Voiture 2</h3>
                <button class="voir-details">Voir détails</button>
                <div class="details-voiture">
                    <p>Marque: Honda</p>
                    <p>Modèle: Civic</p>
                    <p>Année: 2019</p>
                    <p>Prix: 18 000 €</p>
                    <p>Disponibilité: <span class="disponibilite-text">En maintenance</span></p>
                    <!-- Formulaire de modification -->
                    <form class="modifier-form" style="display: none;">
                        <label for="disponibilite">Changer la disponibilité :</label>
                        <select id="disponibilite" name="disponibilite">
                            <option value="disponible">Disponible</option>
                            <option value="maintenance">En maintenance</option>
                            <option value="loue">Loué</option>
                        </select>
                        <button type="submit">Enregistrer</button>
                    </form>
                </div>
                <div class="actions-voiture">
                    <button class="supprimer">Supprimer</button>
                    <button class="publier">Publier</button>
                    <button class="modifier">Modifier</button>
                </div>
            </div>


            <div class="voiture-box">
                <div class="statut-icone statut-maintenance"></div>
                <img src="images/voitures/mercedes g.png" alt="Voiture 2" class="voiture-image">
                <h3>Voiture 2</h3>
                <button class="voir-details">Voir détails</button>
                <div class="details-voiture">
                    <p>Marque: Honda</p>
                    <p>Modèle: Civic</p>
                    <p>Année: 2019</p>
                    <p>Prix: 18 000 €</p>
                    <p>Disponibilité: <span class="disponibilite-text">En maintenance</span></p>
                    <!-- Formulaire de modification -->
                    <form class="modifier-form" style="display: none;">
                        <label for="disponibilite">Changer la disponibilité :</label>
                        <select id="disponibilite" name="disponibilite">
                            <option value="disponible">Disponible</option>
                            <option value="maintenance">En maintenance</option>
                            <option value="loue">Loué</option>
                        </select>
                        <button type="submit">Enregistrer</button>
                    </form>
                </div>
                <div class="actions-voiture">
                    <button class="supprimer">Supprimer</button>
                    <button class="publier">Publier</button>
                    <button class="modifier">Modifier</button>
                </div>
            </div>

            <!-- Ajoutez autant de boîtes de voiture que nécessaire -->
        </div>

        <!-- Barre inférieure -->
        <div class="bottom">
            <ul>
                <li>
                    <img src="images/wtsp.png" alt="WhatsApp Icon" class="icon">
                    <a href="https://github.com/agentLakh">WhatsApp</a>
                </li>
                <li>
                    <img src="images/facebook.png" alt="Facebook Icon" class="icon">
                    <a href="https://www.facebook.com" target="_blank">Facebook</a>
                </li>
                <li>
                    <img src="images/insta.png" alt="Instagram Icon" class="icon">
                    <a href="https://github.com/FatouDieng05">Instagram</a>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
