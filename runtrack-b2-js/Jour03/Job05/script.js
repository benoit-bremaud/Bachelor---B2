// script.js

// Importez la classe Player depuis Player.js
import Player from './Player.js';

// Importez la classe Board depuis Board.js
import Board from './Board.js';

// Importez la classe Game depuis Game.js
import Game from './Game.js';

// Créez deux joueurs
const playerX = new Player('Joueur X', 'X');
const playerO = new Player('Joueur O', 'O');

// Créez un plateau de jeu
const gameBoard = new Board();

// Créez une instance de jeu en utilisant les joueurs et le plateau
const ticTacToeGame = new Game(playerX, playerO, gameBoard);

// Exemple d'utilisation : initialisez une nouvelle partie
ticTacToeGame.startNewGame();
