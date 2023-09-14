// Game.js

class Game {
    constructor(player1, player2, board) {
        this.player1 = player1;
        this.player2 = player2;
        this.board = board;
        this.currentTurn = player1; // Par défaut, le joueur 1 (X) commence
        this.gameOver = false; // Par défaut, la partie n'est pas terminée
    }
  
    // Méthode pour initialiser une nouvelle partie
    startNewGame() {
        console.log("La méthode startNewGame() est appelée.");
        this.board.initializeBoard();
        this.board.displayBoard();
        this.currentTurn = this.player1; // Le joueur 1 commence
        this.gameOver = false;
        this.registerMove();
    }
  
    // Méthode pour gérer le déroulement d'un tour de jeu
    makeMove(row, col) {
        console.log("méthode makeMove est appelée !");
        if (!this.gameOver) {
          const symbol = this.currentTurn.symbol;
          console.log(symbol);
          const movePlaced = this.board.placeMove(row, col, symbol);
      
            if (movePlaced) {
                console.log("condition movePlaced dans Game.js Vrai !!");
                this.board.displayBoard();
                this.checkGameOver();
                this.switchTurn();
            }
        }
    }
  
    // Méthode pour ajouter des événements aux boutons du plateau
    registerMove() {
        console.log("méthode registerMove() dans Game.js appelée !");
        const buttons = document.querySelectorAll(".case");
        buttons.forEach((button) => {
            button.addEventListener("click", () => {
                const [row, col] = button.id.split("-").slice(1).map(Number);
                this.makeMove(row, col);
            });
        });
    }
  
    // Méthode pour changer le tour entre les deux joueurs
    switchTurn() {
        console.log("Méthode switchTurn appelée !");
        this.currentTurn = this.currentTurn === this.player1 ? this.player2 : this.player1;
      
        // Mettez à jour le texte affiché pour le joueur actuel
        const currentPlayerSymbolElement = document.getElementById("current-player-symbol");
        currentPlayerSymbolElement.textContent = this.currentTurn.symbol;
    }
  
    // Méthode pour vérifier si la partie est terminée
    checkGameOver() {
        console.log("méthode checkGameOver appelée !");
        if (this.board.checkVictory()) {
            this.announceWinner();
            this.gameOver = true;
        } else if (this.board.isFull()) {
            this.announceDraw();
            this.gameOver = true;
        }
    }
  
    // Méthode pour annoncer le gagnant ou une égalité
    announceWinner() {
        console.log("méthode announceWinner appelée !");
        const symbol = this.currentTurn.symbol;
        alert(`Le joueur ${symbol} a gagné !`);
    }
  
    announceDraw() {
        console.log("méthode annouceDraw appelée !");
        alert("Match nul !");
    }
  
    // Méthode pour réinitialiser le jeu pour une nouvelle partie
    resetGame() {
        console.log("méthode resetGame appelée !");
        this.board.resetBoard();
        this.currentTurn = this.player1;
        this.gameOver = false;
        this.registerMove();
    }
}
  
// Exportez la classe Game pour pouvoir l'utiliser dans d'autres fichiers
export default Game;
  