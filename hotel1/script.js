function generateStarRating(rating) {
    const fullStars = Math.floor(rating);
    const halfStar = rating % 1 >= 0.5 ? 1 : 0;
    const emptyStars = 5 - fullStars - halfStar;
    
    return '★'.repeat(fullStars) + (halfStar ? '½' : '') + '☆'.repeat(emptyStars);
}

const hotels = [
    { name: "Grand Mercure Mysore", photo: "img/1.jpg", price: "7500/-", rating: "4.8" },
    { name: "Southern Star Mysuru", photo: "img/2.jpg", price: "7000/-", rating: "4.9" },
    { name: "Hotel Le Ruchi the Prince", photo: "img/3.jpg", price: "7500/-", rating: "4.5" },
    { name: "Radisson Blu Plaza Hotel", photo: "img/4.jpg", price: "6000/-", rating: "4.7" },
    { name: "Silent Shores Resort & Spa", photo: "img/5.jpg", price: "5000/-", rating: "4.2" },
    { name: "Yuvraj Le Royale", photo: "img/6.jpg", price: "5750/-", rating: "4.9" },
    { name: "Lalitha Mahal Palace Hotel", photo: "img/7.jpg", price: "6500/-", rating: "4.6" },
    { name: "Royal Orchid Metropole Hotel", photo: "img/8.jpg", price: "8000/-", rating: "4.4" },
    { name: "Green Hotel", photo: "img/9.jpg", price: "4500/-", rating: "4.8" }
];

const reviews = [
    {
        text: "An absolutely stunning experience! The service was impeccable and the views were breathtaking.",
        images: [
            "img/r1.jpg",
            "img/s1.jpg",
            "img/t1.jpg"
        ]
    },
    {
        text: "We had a wonderful stay. The amenities were top-notch and the staff went above and beyond.",
        images: [
            "img/r2.jpg",
            "img/s2.jpg",
            "img/t2.jpg"
        ]
    },
    {
        text: "A perfect getaway! The location was ideal and the hotel offered everything we needed for a relaxing vacation.",
        images: [
            "img/r3.jpg",
            "img/s3.jpg",
            "img/t3.jpg"
        ]
    }
];
function createHotelCard(hotel) {
    return `
        <div class="hotel-card">
            <img src="${hotel.photo}" alt="${hotel.name}">
            <div class="hotel-info">
                <div class="hotel-name">${hotel.name}</div>
                <div class="hotel-price">${hotel.price}</div>
                <div class="hotel-rating">
                    <span class="star-rating">${generateStarRating(parseFloat(hotel.rating))}</span>
                    (${hotel.rating})
                </div>
                <button class="book-now"><a href="buy12.html" style="color: black" >Book Now</a></button>
            </div>
        </div>
    `;
}

function displayHotels() {
    const grid = document.querySelector('.hotel-grid');
    hotels.forEach(hotel => {
        grid.innerHTML += createHotelCard(hotel);
    });
}

function displayReviews() {
    const reviewContainer = document.querySelector('.review-container');
    reviews.forEach((review, index) => {
        reviewContainer.innerHTML += `
            <div class="review" data-review-index="${index}">
                <p>${review.text}</p>
                <div class="review-images">
                    <img src="${review.images[0]}" alt="Review image 1">
                    <div class="image-controls">
                        <button class="prevImage">Previous</button>
                        <button class="nextImage">Next</button>
                    </div>
                </div>
            </div>
        `;
    });
}

function setupReviewImageNavigation() {
    const reviewContainer = document.querySelector('.review-container');
    reviewContainer.addEventListener('click', (event) => {
        if (event.target.classList.contains('prevImage') || event.target.classList.contains('nextImage')) {
            const reviewElement = event.target.closest('.review');
            const reviewIndex = parseInt(reviewElement.dataset.reviewIndex);
            const imageElement = reviewElement.querySelector('img');
            let currentImageIndex = reviews[reviewIndex].images.indexOf(imageElement.src);

            if (event.target.classList.contains('nextImage')) {
                currentImageIndex = (currentImageIndex + 1) % reviews[reviewIndex].images.length;
            } else {
                currentImageIndex = (currentImageIndex - 1 + reviews[reviewIndex].images.length) % reviews[reviewIndex].images.length;
            }

            imageElement.src = reviews[reviewIndex].images[currentImageIndex];
            imageElement.alt = `Review image ${currentImageIndex + 1} for ${hotels[reviewIndex].name}`;
        }
    });
}


document.addEventListener('DOMContentLoaded', () => {
    displayHotels();
    displayReviews();
    setupReviewImageNavigation();
});