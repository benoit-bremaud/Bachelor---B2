// Fonction pour vérifier si un nombre est premier
function isPrime(num) {
    // Les nombres inférieurs ou égaux à 1 ne sont pas premiers
    if (num <= 1) {
        return false;
    }

    // Vérifier si le nombre est divisible par un autre nombre
    // de 2 à la racine carrée de num
    for (let i = 2; i <= Math.sqrt(num); i++) {
        if (num % i === 0) {
            return false; // Si divisible, ce n'est pas premier
        }
    }
    return true; // Si aucun diviseur n'a été trouvé, c'est un nombre premier
}

// Fonction pour générer et afficher la liste des nombres premiers jusqu'à une limite donnée
function myPrimeList(limit) {
    const primeList = [];
    // Parcourir tous les nombres de 2 à la limite spécifiée
    for (let i = 2; i <= limit; i++) {
        if (isPrime(i)) {
            primeList.push(i); // Si le nombre est premier, l'ajouter à la liste
        }
    }
    return primeList; // Retourner la liste des nombres premiers
}

// Récupérer un élément HTML pour afficher le résultat
const primeListResult = document.getElementById("primeListResult");

// Appeler la fonction et afficher le résultat sur la page et dans la console
const limit = 100; // Vous pouvez modifier la limite ici
const primes = myPrimeList(limit);

// Afficher le résultat sur la page web
primeListResult.innerHTML = "<p>Liste des nombres premiers jusqu'à " + limit + " :</p>";
primeListResult.innerHTML += "<p>" + primes.join(", ") + "</p>";

// Afficher le résultat dans la console du navigateur
console.log("Liste des nombres premiers jusqu'à " + limit + " :");
console.log(primes);
