// Fonction pour trouver l'entier le plus proche de zéro dans un tableau
function myNearZero(arr) {
    if (arr.length === 0) {
        return null; // Retourne null si le tableau est vide
    }

    let closest = arr[0]; // Initialise avec le premier élément du tableau

    // Parcourez les éléments du tableau
    for (let i = 1; i < arr.length; i++) {
        if (Math.abs(arr[i]) < Math.abs(closest)) {
            closest = arr[i]; // Met à jour le plus proche de zéro
        } else if (Math.abs(arr[i]) === Math.abs(closest) && arr[i] > 0) {
            closest = arr[i]; // Si les valeurs sont égales, choisissez la positive
        }
    }

    return closest;
}

// Tableau de nombres pour tester la fonction
const numbers = [5, -7, 2, 9, -3, 1];

// Affichez le tableau de nombres sur la page web
const numbersElement = document.getElementById("numbers");
numbersElement.textContent = `Tableau : [${numbers.join(', ')}]`;

// Appelez la fonction et stockez le résultat dans une variable
const nearestToZero = myNearZero(numbers);

// Affichez le résultat dans la console
console.log("Tableau d'origine :", numbers);
console.log("Nombre le plus proche de zéro :", nearestToZero);

// Affichez le résultat sur la page web
const outputElement = document.getElementById("output");
outputElement.textContent = `Nombre le plus proche de zéro : ${nearestToZero}`;
