function myUpperCase(string) {
    return string.toUpperCase();
}

// Exemple d'utilisation
const inputString = "Bonjour, je m'appelle Benoit !";
const result = myUpperCase(inputString);

document.getElementById("result").textContent = `Chaîne originale : "${inputString}" - En majuscules : "${result}"`;
