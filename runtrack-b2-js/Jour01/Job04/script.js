// Définition de la fonction myArraySum qui prend un tableau en argument et calcule sa somme.
function myArraySum(array) {
    // Vérification si l'argument passé est bien un tableau.
    if (!Array.isArray(array)) {
        return "L'argument n'est pas un tableau.";
    }

    // Initialisation d'une variable pour stocker la somme.
    let sum = 0;

    // Boucle pour parcourir les éléments du tableau.
    for (let i = 0; i < array.length; i++) {
        // Addition de l'élément actuel à la somme.
        sum += array[i];
    }

    // Retourne la somme calculée.
    return sum;
}

// Exemple d'utilisation de la fonction :
const numbers = [1, 2, 3, 4, 5];
const result = myArraySum(numbers);

// Affichage du résultat dans la console.
console.log("La somme des éléments du tableau est : " + result);

// Affichage du résultat sur la page web.
document.getElementById("result").textContent = "La somme des éléments du tableau est : " + result;
