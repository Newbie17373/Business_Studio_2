const btnClose = document.querySelectorAll(".popup__authorization-close");
const popupArea = document.querySelectorAll(".popup__area");
const body = document.querySelector("body");

const orderBtn = document.querySelectorAll(".button-order"); //order
const consultBtn = document.querySelector(".button-consult"); //consultation

const popupOrder = document.querySelector(".popup__order");
const popupConsult = document.querySelector(".popup__consultation");

//sign-up or sign-in

btnClose.forEach((elem) => {
  elem.addEventListener("click", () => {
    body.classList.remove("scroll-none");
    popupOrder.classList.remove("visible");
    popupConsult.classList.remove("visible");
  });
});

popupArea.forEach((elem) => {
  elem.addEventListener("click", () => {
    body.classList.remove("scroll-none");
    popupOrder.classList.remove("visible");
    popupConsult.classList.remove("visible");
  });
});

orderBtn.forEach((elem) => {
  elem.addEventListener("click", () => {
    popupOrder.classList.toggle("visible");
    body.classList.toggle("scroll-none");
  });
});

consultBtn.addEventListener("click", () => {
  popupConsult.classList.toggle("visible");
  body.classList.toggle("scroll-none");
});
