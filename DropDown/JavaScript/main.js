const Category = document.querySelector(".category");
const Dashboard = document.querySelector("#dashboard");
const LeftSidebar = document.querySelector("#left-sidebar");
const DashboardMain = document.querySelector("#dashboard-main");
const SidebarTittle = document.querySelector(".sidebar-title");
const Post = document.querySelector(".post");
const Analytics = document.querySelector(".analytics");
const Historys = document.querySelector(".history");
const Plugina = document.querySelector(".plugin");
const Settings = document.querySelector(".settings");
const Item = document.querySelector(".item");
const Explore = document.querySelector(".explore");
const Chart = document.querySelector(".chart");
const Switch = document.querySelector(".dark-btn-switch");


const DarkBtn = document.getElementById("darkBtnMain");
const MainBody = document.getElementById("MainBodyContainer");

// Dark button

DarkBtn.addEventListener("click", () => {
    Switch.classList.toggle("switch")
    document.body.classList.toggle("dark-theme");
})

// sidebar hide and visible

DashboardMain.addEventListener("click", () => {
    LeftSidebar.style.display = "block";
    DashboardMain.style.display = "none";

})

Dashboard.addEventListener("click", () => {
    LeftSidebar.style.display = "none";
    DashboardMain.style.display = "block";

})

// Sidebar left

Chart.addEventListener("click", () => {
    Plugina.classList.remove("active");
    Item.classList.remove("active");
    Category.classList.remove("active");
    Historys.classList.remove("active");
    Analytics.classList.remove("active");
    Explore.classList.remove("active");
    Post.classList.remove("active");
    Settings.classList.remove("active");
    Chart.classList.toggle("active");
})


Settings.addEventListener("click", () => {
    Analytics.classList.remove("active");
    Item.classList.remove("active");
    Category.classList.remove("active");
    Historys.classList.remove("active");
    Plugina.classList.remove("active");
    Explore.classList.remove("active");
    Post.classList.remove("active");
    Settings.classList.toggle("active");
    Chart.classList.r("active");

})

Explore.addEventListener("click", () => {
    Plugina.classList.remove("active");
    Item.classList.remove("active");
    Category.classList.remove("active");
    Historys.classList.remove("active");
    Analytics.classList.remove("active");
    Explore.classList.toggle("active");
    Post.classList.remove("active");
    Settings.classList.remove("active");
    Chart.classList.remove("active");

})

Plugina.addEventListener("click", () => {
    Plugina.classList.toggle("active");
    Item.classList.remove("active");
    Category.classList.remove("active");
    Historys.classList.remove("active");
    Analytics.classList.remove("active");
    Explore.classList.remove("active");
    Post.classList.remove("active");
    Settings.classList.remove("active");
    Chart.classList.remove("active");

})

Historys.addEventListener("click", () => {
    Analytics.classList.remove("active");
    Item.classList.remove("active");
    Category.classList.remove("active");
    Historys.classList.toggle("active");
    Plugina.classList.remove("active");
    Explore.classList.remove("active");
    Post.classList.remove("active");
    Settings.classList.remove("active");
    Chart.classList.remove("active");

})

Post.addEventListener("click", () => {
    Post.classList.toggle("active");
    Item.classList.remove("active");
    Category.classList.remove("active");
    Historys.classList.remove("active");
    Plugina.classList.remove("active");
    Explore.classList.remove("active");
    Analytics.classList.remove("active");
    Settings.classList.remove("active");
    Chart.classList.remove("active");

})

Analytics.addEventListener("click", () => {
    Analytics.classList.toggle("active");
    Item.classList.remove("active");
    Category.classList.remove("active");
    Historys.classList.remove("active");
    Plugina.classList.remove("active");
    Explore.classList.remove("active");
    Post.classList.remove("active");
    Settings.classList.remove("active");
    Chart.classList.remove("active");

})

Item.addEventListener("click", () => {
    Item.classList.toggle("active");
    Category.classList.remove("active");
    Analytics.classList.remove("active");
    Historys.classList.remove("active");
    Plugina.classList.remove("active");
    Explore.classList.remove("active");
    Post.classList.remove("active");
    Settings.classList.remove("active");
    Chart.classList.remove("active");

})

function CateGory() {
    Category.classList.toggle("active");
    Item.classList.remove("active");
    Post.classList.remove("active");
    Analytics.classList.remove("active");
    Historys.classList.remove("active");
    Plugina.classList.remove("active");
    Explore.classList.remove("active");
    Settings.classList.remove("active");
    Chart.classList.remove("active");

}