// function showCart()
// {
//     let cart = document.querySelector('.shopping-cart');
//     let current = parseInt(cart.style.right);
//     if(current == 1)
//     {
//         current = -30;
//     }
//     else{
//         current = 1;
//     }
//     cart.style.right = current + '%';
// }


// function addtocart()
// {
//     let product1 = document.getElementById('pr_heading1').innerText;
//     let price = document.getElementById('price1').innerText;
//     let cartitem = document.createElement("li");

//     cartitem.textContent = product1 + " " +price;

//     document.getElementById('cart_item').appendChild(cartitem);
// }

let cart = [];

function showCart() {
    let cartContainer = document.querySelector('.shopping-cart');
    let current = parseInt(cartContainer.style.right);
    
    if (current === 1) {
        current = -30;
    } else {
        current = 1;
    }
    
    cartContainer.style.right = current + '%';
}

function addtocart(productId, productName, productPrice) {
    // Check if the product is already in the cart
    let existingProduct = cart.find(item => item.id === productId);

    if (existingProduct) {
        existingProduct.quantity += 1;
    } else {
        cart.push({
            id: productId,
            name: productName,
            price: productPrice,
            quantity: 1
        });
    }

    updateCart();
}

function updateCart() {
    const cartItemsContainer = document.getElementById("cart_item");
    const totalPriceContainer = document.getElementById("total-price");

    cartItemsContainer.innerHTML = "";
    let totalPrice = 0;

    cart.forEach(item => {
        const listItem = document.createElement("li");
        listItem.textContent = `${item.name} - $${item.price} x ${item.quantity}`;
        cartItemsContainer.appendChild(listItem);
        totalPrice += item.price * item.quantity;
    });

    totalPriceContainer.textContent = `Total Price: $${totalPrice.toFixed(2)}`;

    // Show the cart container
    const cartContainer = document.getElementById("cartArea");
    cartContainer.style.right = '1%';
}


// Sample products to demonstrate the functionality
document.getElementById("product1").onclick = function () {
    addtocart(1, "Samsung Galaxy S23+ Plus", 1126.99);
};
document.getElementById("product2").onclick = function () {
    addtocart(2, "SAMSUNG Galaxy A54 5G", 449.99);
};
document.getElementById("product3").onclick = function () {
    addtocart(3, "Google Pixel 8", 339.99);
};
document.getElementById("product4").onclick = function () {
    addtocart(4, "Apple Iphone X", 259.99);
};
document.getElementById("product5").onclick = function () {
    addtocart(5, "TECNO Pova 5 Pro", 310.00);
};
document.getElementById("product6").onclick = function () {
    addtocart(6, "OPPO Reno 10x", 369.99);
};
document.getElementById("product7").onclick = function () {
    addtocart(7, "Apple Iphone 15", 800.00);
};
document.getElementById("product8").onclick = function () {
    addtocart(8, "Vivo Y20", 800.00);
};
document.getElementById("product9").onclick = function () {
    addtocart(9, "Apple Iphone 15", 800.00);
};
