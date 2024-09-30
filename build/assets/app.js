document.addEventListener("DOMContentLoaded", () => {
  const saleElements = document.querySelectorAll("span.onsale");
  saleElements.forEach((element, index) => {
    element.classList.add(`onsale-${index + 1}`);
    console.log(`Added class onsale-${index + 1} to span.onsale element`);
  });
});
