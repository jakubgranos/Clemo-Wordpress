const hamburgerButton = document.querySelector("[data-toggle='hamburger']");
const hamburgerBox = document.querySelector("[data-toggle='hamburger-box']");
const navigation = document.querySelector("[data-toggle='navigation']");
const navigationBlock = document.querySelector("[data-toggle='navigation-block']");
const bodyBlock = document.querySelector("body");

hamburgerButton.onclick = () => {
  hamburgerBox.classList.toggle('hamburger-box-active');
  hamburgerButton.classList.toggle('hamburger-active');
  navigation.classList.toggle('navigation-active');
  navigationBlock.classList.toggle('navigation-block');
  bodyBlock.classList.toggle('body-block');
}
