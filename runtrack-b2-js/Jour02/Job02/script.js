// Fonction pour incrémenter le compteur
function myAddCount() {
    // Obtenir l'élément de paragraphe avec l'ID "count-displayer"
    const countParagraph = document.getElementById("count-displayer");

    // Obtenir la valeur actuelle du compteur depuis le texte du paragraphe
    let currentCount = parseInt(countParagraph.textContent.split(":")[1].trim());

    // Incrémenter le compteur
    currentCount++;

    // Mettre à jour le texte du paragraphe avec la nouvelle valeur du compteur
    countParagraph.textContent = "Compteur : " + currentCount;
}

// Obtenir le bouton avec l'ID "add-count-btn"
const addButton = document.getElementById("add-count-btn");

// Ajouter un écouteur d'événements pour le clic sur le bouton
addButton.addEventListener("click", myAddCount);
