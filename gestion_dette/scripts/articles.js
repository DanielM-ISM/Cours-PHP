// let products = [
//     // { name: "Sen’eau", price: 400, stock: 54 },
//     // { name: "Kirène", price: 1000, stock: 100 },
//   ];
//   let selectedProducts = [];
  
//   function renderProducts() {
//     const productTable = document.getElementById("product-table");
//     productTable.innerHTML = "";
//     products.forEach((product, index) => {
//       productTable.innerHTML += `
//         <tr>
//           <td>${product.name}</td>
//           <td>${product.price} FCFA</td>
//           <td>${product.stock}</td>
//           <td><button onclick="selectProduct(${index})">Ajouter</button></td>
//         </tr>
//       `;
//     });
//   }
  
//   function addProduct() {
//     const name = document.getElementById("product-name").value;
//     const price = document.getElementById("product-price").value;
//     const quantity = document.getElementById("product-quantity").value;
  
//     if (name && price && quantity) {
//       products.push({ name, price: parseInt(price), stock: parseInt(quantity) });
//       renderProducts();
//     }
//   }
  
//   function selectProduct(index) {
//     const product = products[index];
//     const existingProduct = selectedProducts.find((p) => p.name === product.name);
//     if (existingProduct) {
//       existingProduct.quantity += 1;
//     } else {
//       selectedProducts.push({ ...product, quantity: 1 });
//     }
//     renderSelectedProducts();
//   }
  
//   function renderSelectedProducts() {
//     const selectedProductTable = document.getElementById("selected-product-table");
//     selectedProductTable.innerHTML = "";
//     let totalPrice = 0;
  
//     selectedProducts.forEach((product, index) => {
//       totalPrice += product.price * product.quantity;
//       selectedProductTable.innerHTML += `
//         <tr>
//           <td>${product.name}</td>
//           <td>${product.price} FCFA</td>
//           <td>
//             <button onclick="changeQuantity(${index}, -1)">-</button>
//             ${product.quantity}
//             <button onclick="changeQuantity(${index}, 1)">+</button>
//           </td>
//           <td><button onclick="removeProduct(${index})" class="remove">Supprimer</button></td>
//         </tr>
//       `;
//     });
  
//     document.getElementById("total-price").innerText = `${totalPrice} FCFA`;
//   }
  
//   function changeQuantity(index, change) {
//     if (selectedProducts[index].quantity + change > 0) {
//       selectedProducts[index].quantity += change;
//     } else {
//       selectedProducts.splice(index, 1);
//     }
//     renderSelectedProducts();
//   }
  
//   function removeProduct(index) {
//     selectedProducts.splice(index, 1);
//     renderSelectedProducts();
//   }
  
//   // Initialisation
//   renderProducts();
  


function sortTable() {
  // Récupère la table et les lignes
  var table = document.getElementById("clientTable").getElementsByTagName("tbody")[0];
  var rows = Array.from(table.rows); // Convertit les lignes en tableau pour faciliter le tri
  var criteria = document.getElementById("sortCriteria").value; // Critère choisi dans le menu déroulant

  // Tri des lignes en fonction du critère sélectionné
  rows.sort(function(rowA, rowB) {
      if (criteria === "prix") {
          // Comparer les montants en tant que nombres
          var montantA = parseInt(rowA.cells[1].getAttribute("data-montant"));
          var montantB = parseInt(rowB.cells[1].getAttribute("data-montant"));
          return montantB - montantA; // Tri décroissant
      } else if (criteria === "nom") {
          // Comparer les noms et prénoms en tant que texte
          var nomA = rowA.cells[0].innerText + " " + rowA.cells[1].innerText;
          var nomB = rowB.cells[0].innerText + " " + rowB.cells[1].innerText;
          return nomA.localeCompare(nomB); // Tri alphabétique
      } else if (criteria === "quantite") {
          // // Comparer les adresses en tant que texte
          // var stockA = rowA.cells[2].innerText;
          // var stockB = rowB.cells[2].innerText;
          // return adresseA.localeCompare(adresseB); // Tri alphabétique

           // Comparer les montants en tant que nombres
           var stockA = parseInt(rowA.cells[2].getAttribute("data-stock"));
           var stockB = parseInt(rowB.cells[2].getAttribute("data-stock"));
           return stockB - stockA; // Tri décroissant
      }
  });



  // Réorganise les lignes dans le tableau
  rows.forEach(function(row) {
      table.appendChild(row); // Ajoute chaque ligne triée dans le tableau
  });
}




