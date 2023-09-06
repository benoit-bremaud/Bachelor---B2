<?php
function my_str_search(string $haystack, string $needle): int {
    // Utilisation de la fonction mb_strlen() pour gérer correctement les caractères UTF-8.
    $haystackLength = mb_strlen($haystack);
    $needleLength = mb_strlen($needle);
    $needleCount = 0;

    // Parcours de la chaîne de caractères pour compter les occurrences de l'aiguille (needle).
    for ($i = 0; $i <= $haystackLength - $needleLength; $i++) {
        if (mb_substr($haystack, $i, $needleLength) === $needle) {
            $needleCount++;
        }
    }
    return $needleCount;
}
// Exemple d'utilisation de la fonction.
$sampleString = "La plateforme";
$searchSubstring = "a";

$occurrences = my_str_search($sampleString, $searchSubstring);
echo "Le nombre d'occurrences de la sous-chaîne '$searchSubstring' dans la chaîne '$sampleString' est : $occurrences";

?>