// Fonction pour afficher le texte de l'input dans le paragraphe
function myDisplayText() {
    const textDisplayer = document.getElementById("text-displayer");
    const inputText = document.getElementById("input-text").value;
    textDisplayer.textContent = inputText;
}

// Fonction pour mettre le texte en gras
function myTurnBold() {
    const textDisplayer = document.getElementById("text-displayer");
    textDisplayer.style.fontWeight = "bold";
}

// Fonction pour mettre le texte en italique
function myTurnItalic() {
    const textDisplayer = document.getElementById("text-displayer");
    textDisplayer.style.fontStyle = "italic";
}

// Fonction pour effacer tous les effets appliqués au texte
function myClearText() {
    const textDisplayer = document.getElementById("text-displayer");
    textDisplayer.textContent = "Texte à afficher ici";
    textDisplayer.style.fontWeight = "normal";
    textDisplayer.style.fontStyle = "normal";
}

// Écouter le changement de valeur de l'input et déclencher la fonction myDisplayText()
document.getElementById("input-text").addEventListener("input", myDisplayText);

// Écouter le clic sur le bouton "Gras" et déclencher la fonction myTurnBold()
document.getElementById("turn-text-bold").addEventListener("click", myTurnBold);

// Écouter le clic sur le bouton "Italique" et déclencher la fonction myTurnItalic()
document.getElementById("turn-text-italic").addEventListener("click", myTurnItalic);

// Écouter le clic sur le bouton "Effacer" et déclencher la fonction myClearText()
document.getElementById("clear-text").addEventListener("click", myClearText);
