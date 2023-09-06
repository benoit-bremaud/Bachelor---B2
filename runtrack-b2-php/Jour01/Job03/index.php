<?php
// Fonction my_is_multiple() pour déterminer si un nombre est un multiple d'un autre.
function my_is_multiple(int $divider, int $multiple): bool {
    // Vérifier si le diviseur n'est pas zéro (division par zéro n'est pas autorisée).
    if ($divider !== 0) {
        // Utiliser l'opérateur % (modulo) pour vérifier si le reste de la division est égal à zéro.
        if ($multiple % $divider === 0) {
            // Si le reste est zéro, alors $multiple est un multiple de $divider.
            return true;
        } else {
            // Sinon, $multiple n'est pas un multiple de $divider.
            return false;
        }
    } else {
        // Si le diviseur est zéro, la division n'est pas définie, donc $multiple n'est pas un multiple.
        return false;
    }
}

// Exemple d'utilisation de la fonction.
$divider = 3;
$multiple = 9;

if (my_is_multiple($divider, $multiple)) {
    echo "$multiple est un multiple de $divider.";
} else {
    echo "$multiple n'est pas un multiple de $divider.";
}
?>
