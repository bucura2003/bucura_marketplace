
document.addEventListener('DOMContentLoaded', function () {
    fetch('php/get_featured_products.php')
      .then(response => response.json())
      .then(products => {
        const productList = document.getElementById('productList');
        products.forEach(product => {
          const productCard = document.createElement('div');
          productCard.className = 'product-card';
          productCard.innerHTML = `
            <h3>${product.name}</h3>
            <p>${product.description}</p>
            <p>Price: $${product.price}</p>
          `;
          productList.appendChild(productCard);
        });
      })
      .catch(err => console.error('Error fetching products:', err));
  });
  