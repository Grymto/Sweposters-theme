document.addEventListener('DOMContentLoaded', () => {
    // Select all the 'span.onsale' elements
    const saleElements = document.querySelectorAll('span.onsale');

    // Loop through each element and assign a unique class
    saleElements.forEach((element, index) => {
        element.classList.add(`onsale-${index + 1}`);
        console.log(`Added class onsale-${index + 1} to span.onsale element`); // Log for debugging
    });
});

