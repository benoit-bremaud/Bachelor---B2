// Board.js

class Board {
    constructor() {
      // Initialise le plateau de jeu avec des cases vides et pas de gagnant
      this.grid = this.initializeBoard();
      this.hasWinner = false;
    }
  
    // Méthode pour initialiser le plateau avec des cases vides et réinitialiser hasWinner
    initializeBoard() {
      this.hasWinner = false;
      // Crée un tableau 2D de 3x3 avec des cases vides représentées par des tirets "-"
      return Array(3).fill(null).map(() => Array(3).fill('-'));
    }
  
    // Méthode pour afficher le contenu du plateau dans la div avec l'id "board"
    displayBoard() {
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
  
          // Vous pouvez ajouter ici un gestionnaire d'événements pour gérer les clics sur les boutons
  
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
      // Implémentez ici la logique pour vérifier les combinaisons gagnantes
    }
  
    // Méthode pour vérifier si le plateau est plein
    isFull() {
      // Implémentez ici la logique pour vérifier si le plateau est plein
    }
  
    // Méthode pour réinitialiser le plateau pour une nouvelle partie
    resetBoard() {
      this.grid = this.initializeBoard();
      this.displayBoard();
    }
  }
  
  // Exportez la classe Board pour pouvoir l'utiliser dans d'autres fichiers
  export default Board;
  