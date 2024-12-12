function sortTable() {
    // Récupère la table et les lignes
    var table = document.getElementById("clientTable").getElementsByTagName("tbody")[0];
    var rows = Array.from(table.rows); // Convertit les lignes en tableau pour faciliter le tri
    var criteria = document.getElementById("sortCriteria").value; // Critère choisi dans le menu déroulant

    // Tri des lignes en fonction du critère sélectionné
    rows.sort(function(rowA, rowB) {
        if (criteria === "montant") {
            // Comparer les montants en tant que nombres
            var montantA = parseInt(rowA.cells[3].getAttribute("data-montant"));
            var montantB = parseInt(rowB.cells[3].getAttribute("data-montant"));
            return montantB - montantA; // Tri décroissant
        } else if (criteria === "nom") {
            // Comparer les noms et prénoms en tant que texte
            var nomA = rowA.cells[0].innerText + " " + rowA.cells[1].innerText;
            var nomB = rowB.cells[0].innerText + " " + rowB.cells[1].innerText;
            return nomA.localeCompare(nomB); // Tri alphabétique
        } else if (criteria === "adresse") {
            // Comparer les adresses en tant que texte
            var adresseA = rowA.cells[2].innerText;
            var adresseB = rowB.cells[2].innerText;
            return adresseA.localeCompare(adresseB); // Tri alphabétique
        }
    });

    // Réorganise les lignes dans le tableau
    rows.forEach(function(row) {
        table.appendChild(row); // Ajoute chaque ligne triée dans le tableau
    });
}




