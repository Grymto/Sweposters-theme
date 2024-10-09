document.addEventListener("DOMContentLoaded", () => {
  const saleElements = document.querySelectorAll("span.onsale");
  saleElements.forEach((element, index) => {
    element.classList.add(`onsale-${index + 1}`);
    if (element.closest(".single-product")) {
      element.classList.add("main-product-onsale");
    } else if (element.closest(".related")) {
      element.classList.add("related-product-onsale");
    } else {
      element.classList.add("other-onsale");
    }
    console.log(`Added class onsale-${index + 1} to span.onsale element`);
  });
});
