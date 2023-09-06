<?php
// Fonction my_is_prime() pour déterminer si un nombre est premier.
function my_is_prime(int $number): bool {
    if ($number <= 1) {
        return false; // Les nombres inférieurs ou égaux à 1 ne sont pas premiers.
    }

    // Boucle pour vérifier la divisibilité du nombre par d'autres entiers.
    for ($i = 2; $i <= sqrt($number); $i++) {
        // Vérifie si $number est divisible par $i.
        if ($number % $i === 0) {
            return false; // Si divisible, le nombre n'est pas premier.
        }
    }

    return true; // Si aucun diviseur n'est trouvé, le nombre est premier.
}

// Exemple d'utilisation de la fonction pour vérifier si un nombre est premier.
$testNumber = 17; // Vous pouvez changer ce nombre pour le tester.
echo "<h1>Job05</h1>";
echo "<h2>Définition de la fonction 'my_is_prime()'</h2>";
if (my_is_prime($testNumber)) {
    echo "$testNumber est un nombre premier.";
} else {
    echo "$testNumber n'est pas un nombre premier.";
}
?>
