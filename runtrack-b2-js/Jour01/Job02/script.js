// Définition de la fonction myCountChar
function myCountChar(haystack, needle) {
    let count = 0;  // Initialisation du compteur

    // Parcourir chaque caractère de la chaîne
    for (let i = 0; i < haystack.length; i++) {
        // Vérifier si le caractère actuel est égal au caractère cible
        if (haystack[i] === needle) {
            count++;  // Incrémenter le compteur si c'est le cas
        }
    }

    // Affichage du résultat dans la console
    console.log(`Le caractère "${needle}" apparaît ${count} fois dans la chaîne.`);

    // Affichage du résultat sur la page web
    const resultElement = document.getElementById("result");
    resultElement.textContent = `Le caractère "${needle}" apparaît ${count} fois dans la chaîne.`;
}

// Exemple d'utilisation de la fonction
const inputString = "Bienvenue à Cannes";
const targetChar = "e";
myCountChar(inputString, targetChar);
