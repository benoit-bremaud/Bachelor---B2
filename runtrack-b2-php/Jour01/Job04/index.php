<?php
// Fonction my_fizz_buzz() pour générer un tableau selon les règles de FizzBuzz.
function my_fizz_buzz(int $length): array {
    $result = []; // Crée un tableau vide pour stocker les résultats.

    // Boucle pour remplir le tableau de 1 à la longueur spécifiée.
    for ($i = 1; $i <= $length; $i++) {
        // Vérifie si $i est un multiple de 3 et/ou de 5 et le remplace en conséquence.
        if ($i % 3 === 0 && $i % 5 === 0) {
            $result[] = "FizzBuzz"; // Si c'est un multiple de 3 et 5, ajoute "FizzBuzz" au tableau.
        } elseif ($i % 3 === 0) {
            $result[] = "Fizz"; // Si c'est un multiple de 3, ajoute "Fizz" au tableau.
        } elseif ($i % 5 === 0) {
            $result[] = "Buzz"; // Si c'est un multiple de 5, ajoute "Buzz" au tableau.
        } else {
            $result[] = $i; // Sinon, ajoute simplement la valeur de $i au tableau.
        }
    }

    return $result; // Renvoie le tableau résultant.
}

// Exemple d'utilisation de la fonction pour générer un tableau de longueur 15.
$fizzBuzzArray = my_fizz_buzz(15);
echo "<h2>Ecriture du résultat en utilisant la fonction 'print_r()'</h2>";
print_r($fizzBuzzArray); // Affiche le tableau résultant.

// Autre façon d'afficher le tableau avec la fonction 'implode' pour concaténer les éléments du tableau en une chaîne de caractères et l'afficher avec echo.
$fizzBuzzArray = my_fizz_buzz(15);
echo "<h2>Ecriture du résultat en utilisant la fonction 'implode()'</h2>";
echo implode(', ', $fizzBuzzArray); // Affiche le tableau sous forme de chaîne séparée par des virgules et des espaces.

?>
