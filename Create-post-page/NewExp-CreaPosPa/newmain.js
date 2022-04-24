const LogIn = document.getElementById("Heading");
const HidePage = document.getElementById("magic");
const VisiblePage = document.getElementById("displayBlock");
const AlertOpenPage = document.getElementById("Alerte");
const AlertClosePage = document.getElementById("CancelPost");
const AlertCreatePage = document.getElementById("CreatePost");
const MainPage = document.getElementById("AddPost");


VisiblePage.addEventListener("click", () => {
    MainPage.style.display = "block";
    LogIn.style.display = "none";
})



AlertClosePage.addEventListener("click", () => {
    AlertOpenPage.style.display = "none";
})

AlertCreatePage.addEventListener("click", () => {
    MainPage.style.display = "none";
    LogIn.style.display = "block";

})

HidePage.addEventListener("click", () => {
    AlertOpenPage.style.display = "block";
})