// Attend que le document soit chargé avant d'exécuter le code
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('form-search-student');
    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Empêche la soumission classique du formulaire

        const email = document.getElementById('email-search-student').value;

        // Appel de la fonction pour envoyer la requête à request.php
        mySearchStudent(email);
    });

    function mySearchStudent(email) {
        // Envoi de la requête GET à request.php avec l'email en paramètre
        fetch(`request.php?email=${email}`)
            .then(response => response.json())
            .then(data => {
                // Affichage des résultats dans la div "result"
                const resultDiv = document.getElementById('result');
                resultDiv.innerHTML = ''; // Efface le contenu précédent

                if (data.length > 0) {
                    const table = document.createElement('table');
                    const headerRow = table.insertRow(0);

                    // En-têtes de colonnes
                    for (const key in data[0]) {
                        if (data[0].hasOwnProperty(key)) {
                            const headerCell = document.createElement('th');
                            headerCell.textContent = key;
                            headerRow.appendChild(headerCell);
                        }
                    }

                    data.forEach(student => {
                        const row = table.insertRow();
                        for (const key in student) {
                            if (student.hasOwnProperty(key)) {
                                const cell = row.insertCell();
                                cell.textContent = student[key];
                            }
                        }
                    });

                    resultDiv.appendChild(table);
                } else {
                    resultDiv.textContent = 'Aucun étudiant trouvé.';
                }
            })
            .catch(error => console.error('Erreur :', error));
    }
});
