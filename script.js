// Function to add an item to the wishlist
function addToWishlist(name, image, id) {
    const wishlistItem = { name, image, id };
    let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
    wishlist.push(wishlistItem);
    localStorage.setItem('wishlist', JSON.stringify(wishlist));
    alert('Place added to wishlist!');
}

// Function to render the wishlist items
function renderWishlist() {
    const wishlistContainer = document.getElementById('wishlist-container');
    wishlistContainer.innerHTML = ''; // Clear previous content

    const wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

    wishlist.forEach(item => {
        const wishlistItem = document.createElement('div');
        wishlistItem.classList.add('wishlist-item');

        wishlistItem.innerHTML = `
            <img src="${item.image}" alt="${item.name}">
            <p>${item.name}</p>
            <button class="view-button" onclick="viewItem('${item.id}', '${item.url}')">View</button>
            <button class="remove-button" onclick="removeItem(${item.id})">Remove</button>
        `;

        wishlistContainer.appendChild(wishlistItem);
    });
}

// Function to remove an item from the wishlist
function removeItem(itemId) {
    const wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
    const updatedWishlist = wishlist.filter(item => item.id !== itemId);
    localStorage.setItem('wishlist', JSON.stringify(updatedWishlist));
    renderWishlist(); // Re-render the wishlist
}

function viewItem(itemId, itemUrl) {
    // You can modify this function based on how you want to handle opening the webpage
    // For example, you can open the page in a new tab or redirect the current tab to the URL
    window.open('adalaj.html', '_self'); // Opens in a new tab
}


// Initial rendering
renderWishlist();
