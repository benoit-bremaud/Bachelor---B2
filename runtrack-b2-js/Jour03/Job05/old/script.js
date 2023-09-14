// script.js

// Importez la classe Player depuis Player.js
import Player from './class/Player.js';

// Importez la classe Board depuis Board.js
import Board from './class/Board.js';

// Importez la classe Game depuis Game.js
import Game from './class/Game.js';

document.addEventListener("DOMContentLoaded", () => {
    // Créez deux joueurs
    const playerX = new Player('Joueur X', 'X');
    const playerO = new Player('Joueur O', 'O');
    
    // Créez un plateau de jeu
    const gameBoard = new Board();
    
    // Créez une instance de jeu en utilisant les joueurs et le plateau
    const ticTacToeGame = new Game(playerX, playerO, gameBoard);
    
    // Sélectionnez le bouton "Nouvelle partie" par son ID
    const newGameButton = document.getElementById("play");
    
    // Ajoutez un gestionnaire d'événements pour le clic sur le bouton
    newGameButton.addEventListener("click", () => {
        // Vérifiez si le bouton est actif
        if (!newGameButton.disabled) {
            // Initialisez une nouvelle partie en utilisant la méthode startNewGame de la classe Game
            console.log("Le bouton 'Nouvelle partie' est cliqué.");
            ticTacToeGame.startNewGame();
        }
    });
    
    // Exemple d'utilisation : initialisez une nouvelle partie au chargement de la page
    window.addEventListener("load", () => {
        console.log("LPage rechargée !");
        ticTacToeGame.startNewGame();
    });
    
});