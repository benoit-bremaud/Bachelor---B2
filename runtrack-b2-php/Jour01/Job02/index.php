<?php
// Fonction my_string_reverse() pour inverser l'ordre des lettres dans une chaîne de caractères.
function my_string_reverse(string $string): string {
    // Obtenir la longueur de la chaîne.
    $length = strlen($string);
    
    // Initialiser une chaîne vide pour stocker la version inversée.
    $reversed = '';

    // Parcourir la chaîne de la fin au début.
    for ($i = $length - 1; $i >= 0; $i--) {
        // Ajouter chaque caractère à la chaîne inversée.
        $reversed .= $string[$i];
    }

    // Renvoyer la chaîne inversée.
    return $reversed;
}

// Exemple d'utilisation de la fonction.
$sampleString = "Hello !";
$reversed = my_string_reverse($sampleString);
echo "Chaîne inversée : $reversed";
?>
