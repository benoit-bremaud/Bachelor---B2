<?php
// Fonction my_array_sort() pour trier un tableau dans l'ordre croissant ou décroissant.
function my_array_sort(array $arrayToSort, string $order): array {
    $size = count($arrayToSort);

    // Vérifie si le paramètre d'ordre est "ASC" (croissant) ou "DESC" (décroissant).
    if ($order === "ASC") {
        // Tri dans l'ordre croissant.
        for ($i = 0; $i < $size - 1; $i++) {
            for ($j = 0; $j < $size - $i - 1; $j++) {
                if ($arrayToSort[$j] > $arrayToSort[$j + 1]) {
                    // Échange les éléments s'ils sont dans le mauvais ordre.
                    $temp = $arrayToSort[$j];
                    $arrayToSort[$j] = $arrayToSort[$j + 1];
                    $arrayToSort[$j + 1] = $temp;
                }
            }
        }
    } elseif ($order === "DESC") {
        // Tri dans l'ordre décroissant.
        for ($i = 0; $i < $size - 1; $i++) {
            for ($j = 0; $j < $size - $i - 1; $j++) {
                if ($arrayToSort[$j] < $arrayToSort[$j + 1]) {
                    // Échange les éléments s'ils sont dans le mauvais ordre.
                    $temp = $arrayToSort[$j];
                    $arrayToSort[$j] = $arrayToSort[$j + 1];
                    $arrayToSort[$j + 1] = $temp;
                }
            }
        }
    } else {
        // Cas où l'ordre n'est ni "ASC" ni "DESC", retourne le tableau non trié.
        return $arrayToSort;
    }

    return $arrayToSort; // Renvoie le tableau trié.
}

// Exemple d'utilisation de la fonction pour trier un tableau dans l'ordre croissant.
$arrayToSort = [5, 2, 9, 1, 5, 6];
$sortedArrayAsc = my_array_sort($arrayToSort, "ASC");
echo "<h2>Tri dans l'ordre croissant :</h2>";

// Affichage avec print_r().
echo "<h3>Avec print_r() :</h3>";
print_r($sortedArrayAsc);

// Affichage avec implode().
echo "<h3>Avec implode() :</h3>";
echo implode(', ', $sortedArrayAsc);

// Exemple d'utilisation de la fonction pour trier un tableau dans l'ordre décroissant.
$sortedArrayDesc = my_array_sort($arrayToSort, "DESC");
echo "<h2>Tri dans l'ordre décroissant :</h2>";

// Affichage avec print_r().
echo "<h3>Avec print_r() :</h3>";
print_r($sortedArrayDesc);

// Affichage avec implode().
echo "<h3>Avec implode() :</h3>";
echo implode(', ', $sortedArrayDesc);

// Définitions des fonctions 'print_r' et 'implode'
echo "<h2>Différences entre 'print_r()' et 'implode()'</h2>";
echo "<h3>print_r()</h3>";
echo "<p><strong>print_r()</strong> est une fonction PHP qui est principalement utilisée pour afficher des informations lisibles par l'homme sur une variable, généralement un tableau. Elle prend en argument la variable que vous souhaitez afficher et la formate de manière lisible, avec une indentation pour les tableaux multidimensionnels, ce qui facilite la compréhension de la structure de la variable.</p>";
echo "<p><strong>print_r()</strong> est utile pour le débogage et l'inspection de variables complexes, car elle affiche les clés et les valeurs associées pour les tableaux, les objets et les structures de données.</p>";
echo "<h3>implode()</h3>";
echo "<p><strong>implode()</strong> est une fonction PHP qui est utilisée pour concaténer les éléments d'un tableau en une seule chaîne de caractères, en les séparant par un délimiteur spécifié.
Elle prend deux arguments : le premier est le délimiteur (une chaîne de caractères) qui sera inséré entre chaque élément du tableau dans la chaîne résultante, et le deuxième est le tableau contenant les éléments à concaténer.</p>";
echo "<p><strong>implode()</strong> est couramment utilisée pour afficher des listes d'éléments à partir d'un tableau sous une forme lisible par l'homme. Par exemple, elle peut être utilisée pour afficher une liste de noms séparés par des virgules.</p>";
?>