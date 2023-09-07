// Fonction pour calculer le carré des nombres d'un tableau
function mySquareArray(arr) {
    // Créez un nouveau tableau pour stocker les carrés
    let squaredArray = [];

    // Parcourez chaque élément du tableau passé en paramètre
    for (let i = 0; i < arr.length; i++) {
        // Calculez le carré de l'élément et ajoutez-le au nouveau tableau
        squaredArray.push(arr[i] * arr[i]);
    }

    // Retournez le tableau des carrés
    return squaredArray;
}

// Tableau de nombres pour tester la fonction
const numbers = [1, 2, 3, 4, 5];

// Affichez le tableau d'origine sur la page web
const originalOutputElement = document.getElementById("original-output");
originalOutputElement.textContent = numbers.join(", ");

// Appelez la fonction et stockez le résultat dans une variable
const squaredNumbers = mySquareArray(numbers);

// Affichez le résultat dans la console
console.log("Tableau d'origine :", numbers);
console.log("Tableau au carré :", squaredNumbers);

// Affichez le tableau au carré sur la page web
const squaredOutputElement = document.getElementById("squared-output");
squaredOutputElement.textContent = squaredNumbers.join(", ");
