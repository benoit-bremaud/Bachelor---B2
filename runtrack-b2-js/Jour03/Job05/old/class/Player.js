// Player.js

class Player {
  constructor(name, symbol) {
    this.name = name;
    this.symbol = symbol;
    this.isCurrentPlayer = false; // Par défaut, ce n'est pas le tour de ce joueur
  }
}
  
// Exportez la classe Player pour pouvoir l'utiliser dans d'autres fichiers
export default Player;
  