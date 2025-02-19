<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil LOCATION</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="script/script.js"></script>
</head>
<body>
    <div class="container">
        <div class="social-bar">
            <!-- Icônes à gauche (réseaux sociaux) -->
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
        
            <!-- Logo centré -->
            <div class="logo-container">
                <img src="images/voitures/logo.PNG" alt="Logo Boutique" class="logo">
            </div>
        
            <!-- Icônes à droite (recherche et panier) -->
            <div class="search-cart-icons">
                <a href="javascript:void(0);" class="search-icon" id="search-icon">
                    <img src="images/search.png" alt="Search" class="icon">
                </a>
            </div>
        </div>
       
        <h1 class="title">FASHA'S LOCATION</h1>
       
        <div class="top">
            <ul>
                <li>
                    <img src="images/home.png" alt="Home Icon" class="icon">
                    <a href="index.php">Accueil</a>
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
        
        <!-- Interface de location -->
        <div class="location-interface">
            <!-- Photo du produit à gauche -->
            <div class="product-image">
                <img src="images/voitures/caddilac.png" alt="Voiture de location">
                <center>
                    <h3>Description :</h3>
                </center>
                    <br>
                    Modèle : Cadillac Escalade
                    <br>
                    Moteur : V8 6.2L ou moteur électrique (version IQ)
                    <br>
                    Puissance : Jusqu'à 682 ch (version V-Series)
                    <br>
                    Transmission : Automatique 10 rapports
                    <br>
                    Traction : Propulsion ou intégrale
                    <br>
                    Accélération : 0 à 100 km/h en environ 4,4 s (version V-Series)
                    <br>
                    Intérieur : Cuir haut de gamme, écran OLED incurvé 38 pouces
                    <br>
                    Technologies : Super Cruise, affichage tête haute, son AKG 36 haut-parleurs
                    <br>
                    Sécurité : Freinage d’urgence, vision nocturne, aide au maintien de voie
                    <br>
                    Prix : À partir de 110 000 € (selon version)
        
            </div>

            <!-- Détails à droite -->
            <div class="product-details">
                <!-- Titre -->
                <h2>Cadillac Escalade</h2>

                <!-- Sélection des dates -->
                <div class="date-selection">
                    <label for="start-date">Date de début :</label>
                    <input type="date" id="start-date" name="start-date">

                    <label for="end-date">Date de fin :</label>
                    <input type="date" id="end-date" name="end-date">

                    <button onclick="calculatePrice()">Calculer le prix</button>
                </div>

                <!-- Prix calculé -->
                <div class="price-display">
                    <p>Prix total : <span id="total-price">0</span> €</p>
                </div>

               

                <!-- Moyen de paiement -->
                <div class="payment-method">
                    <h3>Moyen de paiement :</h3>
                    <select id="payment-method">
                        <option value="credit-card">Carte de crédit</option>
                        <option value="paypal">PayPal</option>
                        <option value="bank-transfer">Virement bancaire</option>
                    </select>
                </div>

                <!-- Bouton de location -->
                <button class="buy-button" onclick="confirmLocation()">Confirmer la location</button>
            </div>
        </div>

        <div class="bottom">
            <ul>
                <li>
                    <img src="images/wtsp.png" alt="GitHub Icon" class="icon">
                    <a href="https://github.com/agentLakh">WhatsApp</a>
                </li>
                <li>
                    <img src="images/facebook.png" alt="GitHub Icon" class="icon">
                    <a href="https://www.facebook.com" target="_blank">Facebook</a>
                </li>
                <li>
                    <img src="images/insta.png" alt="GitHub Icon" class="icon">
                    <a href="https://github.com/FatouDieng05">Instagram</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Script JavaScript -->
    <script src="script/script.js"></script>

</body>
</html>