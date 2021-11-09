let displayReviewStars = (event, rating) => {
    let star = event.target.firstElementChild;

    for (i = 0; i < rating; i++) {
        if(star !== null){
            star.firstElementChild.style.fill = "#2e2e2e";
            star = star.nextElementSibling;
        }
    }
};

document.querySelectorAll('.product-review-stars').forEach(reviewStar => {
    reviewStar.click();
});