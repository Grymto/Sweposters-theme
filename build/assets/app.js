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
document.addEventListener("DOMContentLoaded", () => {
  const menuToggle = document.querySelector(".menu-toggle");
  const menu = document.querySelector(".menu");
  menuToggle.addEventListener("click", () => {
    menu.classList.toggle("active");
    menuToggle.classList.toggle("active");
  });
});
document.addEventListener("DOMContentLoaded", function() {
  const mainImageContainer = document.querySelector(".woocommerce-product-gallery__image");
  const mainImage = mainImageContainer.querySelector("img");
  const thumbnails = document.querySelectorAll(".woocommerce-product-gallery__image a");
  let originalImageSrc = mainImage.getAttribute("src");
  let originalImageSrcset = mainImage.getAttribute("srcset");
  let originalThumbAdded = false;
  thumbnails.forEach((thumbnail) => {
    thumbnail.addEventListener("click", function(e) {
      e.preventDefault();
      const newImage = this.querySelector("img");
      mainImage.src = newImage.src;
      mainImage.srcset = newImage.srcset || "";
      if (!originalThumbAdded) {
        const originalThumb = document.createElement("a");
        originalThumb.classList.add("woocommerce-product-gallery__image", "original-thumbnail");
        originalThumb.href = originalImageSrc;
        originalThumb.innerHTML = `<img src="${originalImageSrc}" srcset="${originalImageSrcset || ""}" alt="Original Image">`;
        const galleryWrapper = document.querySelector(".woocommerce-product-gallery__wrapper");
        galleryWrapper.appendChild(originalThumb);
        originalThumbAdded = true;
        originalThumb.addEventListener("click", function(e2) {
          e2.preventDefault();
          mainImage.src = originalImageSrc;
          mainImage.srcset = originalImageSrcset || "";
        });
        originalThumb.style.display = "inline-block";
        originalThumb.style.maxWidth = "100px";
        originalThumb.querySelector("img").style.maxWidth = "100%";
      }
      setTimeout(() => {
        mainImage.style.border = "1px solid #66afe9";
        mainImage.style.boxShadow = "0 8px 16px rgba(0, 0, 0, 0.2)";
        mainImage.style.borderRadius = "5%";
        mainImage.style.width = "100%";
      }, 50);
    });
  });
});
