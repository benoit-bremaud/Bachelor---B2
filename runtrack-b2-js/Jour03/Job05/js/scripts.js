// On charge les informations utiles
const statut = document.querySelector("h2")
let jeuActif = true
let joueurActif = "X"
let etatJeu = ["", "", "", "", "", "", "", "", "", ]

// Conditions de victoire possibles (indices des cases gagnantes)
const conditionsVictoire = [
    [0, 1, 2], // Ligne supérieure
    [3, 4, 5], // Ligne du milieu
    [6, 7, 8], // Ligne inférieure
    [0, 3, 6], // Colonne de gauche
    [1, 4, 7], // Colonne du milieu
    [2, 5, 8], // Colonne de droite
    [0, 4, 8], // Diagonale de gauche à droite
    [2, 4, 6]  // Diagonale de droite à gauche
]

// Fonction pour afficher le message de victoire
const gagne = () => `Le joueur ${joueurActif} a gagné`
// Fonction pour afficher le message d'égalité
const egalite = () => "Egalité"
// Fonction pour afficher le message du tour du joueur
const tourJoueur = () => `C'est au tour du joueur ${joueurActif}`

// Initialisation du message de statut
statut.innerHTML = tourJoueur()

// Ajout d'un écouteur de clic à toutes les cases du jeu
document.querySelectorAll(".case").forEach(cell => cell.addEventListener("click", gestionClicCase))

// Ajout d'un écouteur de clic pour le bouton "Recommencer"
document.querySelector("#recommencer").addEventListener("click", recommencer)

function gestionClicCase(){
    // On récupère l'index de la case cliquée
    const indexCase = parseInt(this.dataset.index)

    // Vérification si la case est déjà remplie ou si le jeu est terminé
    if (etatJeu[indexCase] !== "" || !jeuActif){
        return
    }

    // Mise à jour de l'état du jeu et affichage du symbole du joueur
    etatJeu[indexCase] = joueurActif
    this.innerHTML = joueurActif

    // Vérification de la victoire
    verifGagne()
}

function verifGagne(){
    let tourGagnant = false

    // Vérification des conditions de victoire possibles
    for(let conditionVictoire of conditionsVictoire){
        let val1 = etatJeu[conditionVictoire[0]]
        let val2 = etatJeu[conditionVictoire[1]]
        let val3 = etatJeu[conditionVictoire[2]]
        
        // Si l'une des cases est vide, on continue
        if (val1 === "" || val2 === "" || val3 === "") {
            continue
        }
        
        // Si les trois cases ont le même symbole, il y a un gagnant
        if (val1 === val2 && val2 === val3) {
            tourGagnant = true
            break
        }
    }
    
    // Si un joueur a gagné, afficher le message de victoire et terminer le jeu
    if (tourGagnant) {
        statut.innerHTML = gagne()
        jeuActif = false
        return
    }
    
    // Vérification si le tableau est plein (match nul)
    if (!etatJeu.includes("")) { // S'il n'y a pas de case vide
        statut.innerHTML = egalite() // Afficher le statut "égalité"
        jeuActif = false // Arrêter le jeu
        return
    }
    
    // Si ni l'un ni l'autre n'a gagné, le jeu continue avec l'autre joueur
    joueurActif = joueurActif === "X" ? "O" : "X"
    statut.innerHTML = tourJoueur() // C'est au tour de l'autre joueur
}

// Gérer la fonction "Recommencer"
function recommencer(){
    joueurActif = "X"
    jeuActif = true
    etatJeu = ["", "", "", "", "", "", "", "", "", ]
    statut.innerHTML = tourJoueur()
    // Réinitialiser le contenu de toutes les cases
    document.querySelectorAll(".case").forEach(cell => cell.innerHTML = "")
}
