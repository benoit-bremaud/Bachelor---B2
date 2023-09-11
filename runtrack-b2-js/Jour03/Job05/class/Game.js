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
      this.board.initializeBoard();
      this.board.displayBoard();
      this.currentTurn = this.player1; // Le joueur 1 commence
      this.gameOver = false;
      this.registerMove();
    }
  
    // Méthode pour gérer le déroulement d'un tour de jeu
    makeMove(row, col) {
      if (!this.gameOver) {
        const symbol = this.currentTurn.symbol;
        const movePlaced = this.board.placeMove(row, col, symbol);
  
        if (movePlaced) {
          this.board.displayBoard();
          this.checkGameOver();
          this.switchTurn();
        }
      }
    }
  
    // Méthode pour ajouter des événements aux boutons du plateau
    registerMove() {
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
      this.currentTurn = this.currentTurn === this.player1 ? this.player2 : this.player1;
    }
  
    // Méthode pour vérifier si la partie est terminée
    checkGameOver() {
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
      const symbol = this.currentTurn.symbol;
      alert(`Le joueur ${symbol} a gagné !`);
    }
  
    announceDraw() {
      alert("Match nul !");
    }
  
    // Méthode pour réinitialiser le jeu pour une nouvelle partie
    resetGame() {
      this.board.resetBoard();
      this.currentTurn = this.player1;
      this.gameOver = false;
      this.registerMove();
    }
  }
  
  // Exportez la classe Game pour pouvoir l'utiliser dans d'autres fichiers
  export default Game;
  