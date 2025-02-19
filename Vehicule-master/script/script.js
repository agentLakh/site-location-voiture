     // Prix par jour de location
     const pricePerDay = 100; // Exemple : 100 € par jour

     // Fonction pour calculer le prix total
     function calculatePrice() {
         const startDate = new Date(document.getElementById('start-date').value);
         const endDate = new Date(document.getElementById('end-date').value);

         // Calcul de la durée en jours
         const timeDiff = endDate - startDate;
         const daysDiff = Math.ceil(timeDiff / (1000 * 60 * 60 * 24));

         // Calcul du prix total
         const totalPrice = daysDiff * pricePerDay;

         // Affichage du prix
         document.getElementById('total-price').textContent = totalPrice;
     }

     // Fonction pour confirmer la location
     function confirmLocation() {
         const paymentMethod = document.getElementById('payment-method').value;
         const totalPrice = document.getElementById('total-price').textContent;

         alert(`Location confirmée !\nMoyen de paiement : ${paymentMethod}\nPrix total : ${totalPrice} €`);
     }

     // Gestion du menu déroulant
document.addEventListener("DOMContentLoaded", function() {
    const profileIcon = document.getElementById("profile-icon");
    const dropdownContent = document.getElementById("dropdown-content");

    // Afficher ou masquer le menu déroulant au clic sur l'icône de profil
    profileIcon.addEventListener("click", function(event) {
        event.stopPropagation(); // Empêche la propagation du clic
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });

    // Masquer le menu déroulant si on clique ailleurs sur la page
    document.addEventListener("click", function() {
        dropdownContent.style.display = "none";
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const voirDetailsButtons = document.querySelectorAll('.voir-details');
    const modifierButtons = document.querySelectorAll('.modifier');

    voirDetailsButtons.forEach(button => {
        button.addEventListener('click', function() {
            const details = this.nextElementSibling;
            details.style.display = details.style.display === 'block' ? 'none' : 'block';
        });
    });

    modifierButtons.forEach(button => {
        button.addEventListener('click', function() {
            const voitureBox = this.closest('.voiture-box');
            const details = voitureBox.querySelector('.details-voiture');
            const form = document.createElement('form');
            form.className = 'voiture-form';

            details.querySelectorAll('p').forEach(p => {
                const label = document.createElement('label');
                label.textContent = p.textContent.split(':')[0] + ': ';
                const input = document.createElement('input');
                input.type = 'text';
                input.value = p.textContent.split(':')[1].trim();
                form.appendChild(label);
                form.appendChild(input);
            });

            const submitButton = document.createElement('button');
            submitButton.type = 'submit';
            submitButton.textContent = 'Enregistrer';
            form.appendChild(submitButton);

            voitureBox.replaceChild(form, details);
        });
    });
});