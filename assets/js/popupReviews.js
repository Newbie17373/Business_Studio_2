const btnClose1 = document.querySelectorAll(".popup__authorization-close");
const popupArea1 = document.querySelectorAll(".popup__area");
const body1 = document.querySelector("body");

const reviewsBtn = document.querySelector(".main__reviews-button");
const popupReviews = document.querySelector(".popup__reviews");

btnClose.forEach((elem) => {
  elem.addEventListener("click", () => {
    body.classList.remove("scroll-none");
    popupReviews.classList.remove("visible");
  });
});

popupArea.forEach((elem) => {
  elem.addEventListener("click", () => {
    body.classList.remove("scroll-none");
    popupReviews.classList.remove("visible");
  });
});

reviewsBtn.addEventListener("click", () => {
  popupReviews.classList.toggle("visible");
  body.classList.toggle("scroll-none");
});
