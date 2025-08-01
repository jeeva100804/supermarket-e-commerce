document.addEventListener('DOMContentLoaded', function () {
  const container = document.getElementById('productList');
  if (container) {
    fetch('backend/fetch_products.php')
      .then(response => response.json())
      .then(products => {
        container.innerHTML = '';
        products.forEach(product => {
          const box = document.createElement('div');
          box.className = 'product-box';
          box.innerHTML = `
            <img src="${product.image}" alt="${product.name}">
            <h3>${product.name}</h3>
            <p>₹${product.price}</p>
          `;
          container.appendChild(box);
        });
      });
  }
});

    
