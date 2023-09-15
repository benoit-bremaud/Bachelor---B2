<?php
require_once 'connexion.php'; // Assurez-vous que cette ligne est présente avant la définition de la classe


class Room {
    private $id;
    private $floorId;
    private $name;
    private $capacity;
    // private $pdo; // Ajout d'une propriété pour stocker la connexion PDO

    // Constructeur avec des paramètres optionnels
    public function __construct(
        int $id = null,
        int $floorId = null,
        string $name = null,
        int $capacity = null
        // PDO $pdo = null // Ajoutez la connexion PDO en paramètre
    ) {
        $this->id = $id;
        $this->floorId = $floorId;
        $this->name = $name;
        $this->capacity = $capacity;
        // $this->pdo = $pdo; // Stockez la con0nexion PDO
    }

    // Getter pour l'ID de la salle
    public function getId(): ?int {
        return $this->id;
    }

    // Getter pour l'ID de l'étage auquel la salle est située
    public function getFloorId(): ?int {
        return $this->floorId;
    }

    // Setter pour l'ID de l'étage auquel la salle est située
    public function setFloorId(int $floorId): self {
        $this->floorId = $floorId;
        return $this;
    }

    // Getter pour le nom de la salle
    public function getName(): ?string {
        return $this->name;
    }

    // Setter pour le nom de la salle
    public function setName(string $name): self {
        $this->name = $name;
        return $this;
    }

    // Getter pour la capacité de la salle
    public function getCapacity(): ?int {
        return $this->capacity;
    }

    // Setter pour la capacité de la salle
    public function setCapacity(int $capacity): self {
        $this->capacity = $capacity;
        return $this;
    }
    
    // Fonction pour obtenir les notes associées à cette salle
    public function getGrades() {
        $grades = array(); // Tableau pour stocker les notes associées

        // Incluez le fichier de connexion
        // require_once 'connexion.php';

        // Utilisez la connexion à la base de données définie dans 'connexion.php'
        // pour exécuter la requête SQL et récupérer les notes associées à cette salle

        // Préparez la requête SQL pour récupérer les notes associées à cette salle
        $query = "SELECT * FROM grades WHERE room_id = ?";

        // Utilisez une requête préparée pour éviter les injections SQL
        $stmt = $pdo->prepare($query);

        // Liez le paramètre pour la salle actuelle
        $stmt->bindParam(1, $this->getId(), PDO::PARAM_INT);

        // Exécutez la requête
        $stmt->execute();

        // Récupérez le résultat
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Parcourez les résultats et créez des objets Grade pour chaque ligne
        foreach ($result as $row) {
            $grades[] = new Grade($row['id'], $row['room_id'], $row['name'], $row['year']);
        }

    return $grades;
}
}

?>
