// Fonction myIsInString - Cette fonction vérifie si une chaîne de caractères se trouve dans une autre.
function myIsInString(haystack, needle) {
    // Utilisez la méthode includes() pour vérifier si needle est contenu dans haystack.
    return haystack.includes(needle);
}

// Exemple d'utilisation de la fonction :
const mainString = "Ceci est un exemple de chaîne de caractères.";
const subString = "exemple";

const resultElement = document.getElementById("result"); // Déclarer la variable ici

if (myIsInString(mainString, subString)) {
    const resultMessage = `"${subString}" se trouve dans "${mainString}".`;
    console.log(resultMessage); // Affiche dans la console
    resultElement.textContent = resultMessage; // Affiche sur la page web
} else {
    const resultMessage = `"${subString}" ne se trouve pas dans "${mainString}".`;
    console.log(resultMessage); // Affiche dans la console
    resultElement.textContent = resultMessage; // Affiche sur la page web
}
