// Board.js

class Board {
  constructor() {
    // Initialise le plateau de jeu avec des cases vides et pas de gagnant
    this.grid = this.initializeBoard();
    this.hasWinner = false;
  }

  // Méthode pour initialiser le plateau avec des cases vides et réinitialiser hasWinner
  initializeBoard() {
    console.log("méthode 'initializeBoard() dans Board.js' appelée");
    this.hasWinner = false;
    // Crée un tableau 2D de 3x3 avec des cases vides représentées par des tirets "-"
    return Array(3).fill(null).map(() => Array(3).fill('-'));
  }

  // Méthode pour afficher le contenu du plateau dans la div avec l'id "board"
  displayBoard() {
    console.log("méthode 'displayBoard() dans Board.js' appelée");
    const boardDiv = document.getElementById("board");
    boardDiv.innerHTML = ''; // Efface le contenu précédent

    this.grid.forEach((row, rowIndex) => {
      const rowDiv = document.createElement("div");
      rowDiv.classList.add("row");

      row.forEach((cell, colIndex) => {
        const button = document.createElement("button");
        button.classList.add("case");
        button.id = `btn-${rowIndex}-${colIndex}`;
        button.textContent = cell;

        // Ajoutez un gestionnaire d'événements pour gérer les clics sur les boutons
        button.addEventListener("click", () => {
          // Vérifiez d'abord si le bouton est déjà marqué par un joueur
          if (button.textContent === '-') {
            // Mettez à jour le contenu du bouton avec le symbole du joueur en cours
            button.textContent = this.currentPlayerSymbol; // Assurez-vous d'avoir cette variable définie
            // Vous pouvez également appeler une fonction pour gérer la logique du jeu ici
            // par exemple : this.handleButtonClick(rowIndex, colIndex);
          }
        });

        rowDiv.appendChild(button);
      });

      boardDiv.appendChild(rowDiv);
    });
  }

  // Méthode pour placer un mouvement à l'emplacement spécifié
  placeMove(row, col, symbol) {
    if (this.grid[row][col] === '-') {
      this.grid[row][col] = symbol;
      return true; // Le mouvement a été placé avec succès
    } else {
      return false; // La case est déjà prise
    }
  }

  // Méthode pour vérifier s'il y a une victoire
  checkVictory() {
    console.log("méthode 'checkVictory() dans Board.js' appelée");
    // Implémentez ici la logique pour vérifier les combinaisons gagnantes
  }

  // Méthode pour vérifier si le plateau est plein
  isFull() {
    console.log("méthode 'isFull() dans Board.js' appelée");
    // Implémentez ici la logique pour vérifier si le plateau est plein
  }

  // Méthode pour réinitialiser le plateau pour une nouvelle partie
  resetBoard() {
    console.log("méthode 'resetBoard() dans Board.js' appelée");
    this.grid = this.initializeBoard();
    this.displayBoard();
  }
}
  
// Exportez la classe Board pour pouvoir l'utiliser dans d'autres fichiers
export default Board;
  