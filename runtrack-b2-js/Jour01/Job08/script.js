// Fonction pour trier un tableau dans l'ordre croissant ou décroissant
function myArraySort(array, sorting) {
    if (sorting === 'ascending') {
        // Tri croissant
        return array.slice().sort((a, b) => a - b);
    } else if (sorting === 'descending') {
        // Tri décroissant
        return array.slice().sort((a, b) => b - a);
    } else {
        // Retourne null en cas de tri incorrect
        return null;
    }
}

// Tableau de nombres pour tester la fonction
const numbers = [5, -7, 2, 9, -3, 1];

// Affichage du tableau de nombres sur la page web
const numbersElement = document.getElementById("numbers");
numbersElement.textContent = `Tableau : [${numbers.join(', ')}]`;

// Écoute du bouton de tri
const sortButton = document.getElementById("sortButton");
sortButton.addEventListener("click", function () {
    // Récupération de l'option de tri sélectionnée
    const ascendingRadio = document.getElementById("ascending");
    const descendingRadio = document.getElementById("descending");
    let sortOrder = "ascending";

    if (descendingRadio.checked) {
        sortOrder = "descending";
    }

    // Appel de la fonction de tri
    const sortedNumbers = myArraySort(numbers, sortOrder);

    // Affichage du résultat trié sur la page web
    const sortedNumbersElement = document.getElementById("sortedNumbers");
    sortedNumbersElement.textContent = `Tableau trié (${sortOrder}) : [${sortedNumbers.join(', ')}]`;
});
