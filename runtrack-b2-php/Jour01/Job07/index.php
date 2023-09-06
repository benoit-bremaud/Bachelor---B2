<?php
function my_closet_to_zero(array $array): int {
    // Vérifie si la liste d'entiers est vide.
    if (empty($array)) {
        throw new InvalidArgumentException("La liste d'entiers ne peut pas être vide.");
    }

    // Initialise la variable pour stocker le nombre le plus proche de zéro.
    $closestToZero = $array[0]; // On commence avec le premier entier de la liste.

    // Parcourt la liste d'entiers pour trouver le nombre le plus proche de zéro.
    foreach ($array as $number) {
        // Calcule la valeur absolue du nombre actuel en évitant la fonction abs().
        $absoluteValue = ($number < 0) ? -$number : $number;

        // Calcule la valeur absolue du nombre le plus proche de zéro actuel.
        $closestAbsolute = ($closestToZero < 0) ? -$closestToZero : $closestToZero;

        // Vérifie si le nombre actuel est plus proche de zéro que le nombre précédent.
        if ($absoluteValue < $closestAbsolute) {
            $closestToZero = $number;
        } elseif ($absoluteValue == $closestAbsolute) {
            // En cas d'égalité de distance à zéro, on choisit le nombre positif.
            if ($number > $closestToZero) {
                $closestToZero = $number;
            }
        }
    }

    return $closestToZero; // Renvoie le nombre le plus proche de zéro.
}

// Exemple d'utilisation de la fonction avec une liste d'entiers.
$integerList = [3, -7, 2, -5, 1];
$closestInteger = my_closet_to_zero($integerList);
echo "<h1>Job07</h1>";

echo "<h2>Liste des valeurs</h2>";
// Parcourt la liste et affiche chaque élément.
$joinedList = implode(', ', $integerList);
echo "[$joinedList]";


echo "<p>Le nombre le plus proche de zéro dans la liste est : $closestInteger</p>";
?>
