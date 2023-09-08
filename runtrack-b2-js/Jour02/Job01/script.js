// Fonction pour changer la couleur de fond de la balise <html> en fonction de la taille de l'écran
function myChangeBackgroundColor() {
    // Obtenir la largeur de l'écran du navigateur
    const screenWidth = window.innerWidth;

    // Définir une référence à la balise <html>
    const htmlElement = document.documentElement;

    // Vérifier la largeur de l'écran et changer la couleur de fond en conséquence
    if (screenWidth >= 1337) {
        // Si la largeur est supérieure ou égale à 1337 pixels, définir la couleur à #ffb703 (jaune)
        htmlElement.style.backgroundColor = "#ffb703";
    } else if (screenWidth >= 506 && screenWidth <= 1336) {
        // Si la largeur est comprise entre 506 et 1336 pixels, définir la couleur à #d90429 (rouge)
        htmlElement.style.backgroundColor = "#d90429";
    } else if (screenWidth <= 505) {
        // Si la largeur est inférieure ou égale à 505 pixels, définir la couleur à #003049 (bleu foncé)
        htmlElement.style.backgroundColor = "#003049";
    }
}

// Appel initial de la fonction pour définir la couleur initiale
myChangeBackgroundColor();

// Écouter les changements de taille de l'écran et réagir en conséquence
window.addEventListener('resize', myChangeBackgroundColor);

// Réagir également lorsque la page est chargée (pour les fenêtres déjà réduites)
window.addEventListener('load', myChangeBackgroundColor);
