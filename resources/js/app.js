document.addEventListener('DOMContentLoaded', () => {
    // Select all the 'span.onsale' elements
    const saleElements = document.querySelectorAll('span.onsale');

    // Loop through each element and assign a unique class
    saleElements.forEach((element, index) => {
        // Add a unique class based on index
        element.classList.add(`onsale-${index + 1}`);

        // Add a class based on the parent container
        if (element.closest('.single-product')) {
            element.classList.add('main-product-onsale');
        } else if (element.closest('.related')) {
            element.classList.add('related-product-onsale');
        } else {
            element.classList.add('other-onsale');
        }

        console.log(`Added class onsale-${index + 1} to span.onsale element`); // Log for debugging
    });

});

document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.querySelector(".menu-toggle");
    const menu = document.querySelector(".menu");
  
    menuToggle.addEventListener("click", () => {
      menu.classList.toggle("active");
      menuToggle.classList.toggle("active");
    });
  });