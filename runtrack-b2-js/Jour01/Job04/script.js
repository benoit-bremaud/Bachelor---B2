// Définition de la fonction myArraySum qui prend un tableau en argument et calcule sa somme.
function myArraySum(array) {
    // Vérification si l'argument passé est bien un tableau.
    if (!Array.isArray(array)) {
        return "L'argument n'est pas un tableau.";
    }

    // Initialisation d'une variable pour stocker la somme.
    let sum = 0;

    // Création d'une chaîne de caractères pour stocker les éléments du tableau.
    let elementsString = "";

    // Boucle pour parcourir les éléments du tableau.
    for (let i = 0; i < array.length; i++) {
        // Ajout de l'élément actuel à la chaîne de caractères.
        elementsString += array[i];
        // Ajout d'une virgule et d'un espace sauf pour le dernier élément.
        if (i < array.length - 1) {
            elementsString += ", ";
        }
        
        // Addition de l'élément actuel à la somme.
        sum += array[i];
    }

    // Retourne un objet avec la somme et les éléments du tableau.
    return {
        sum: sum,
        elementsString: elementsString
    };
}

// Exemple d'utilisation de la fonction :
const numbers = [1, 2, 3, 4, 5];
const result = myArraySum(numbers);

// Affichage du résultat dans la console.
console.log("La somme des éléments du tableau est : " + result.sum);

// Affichage du résultat sur la page web.
document.getElementById("elements").textContent = "Éléments du tableau : " + result.elementsString;
document.getElementById("result").textContent = "La somme des éléments du tableau est : " + result.sum;
