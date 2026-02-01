// import gallery from "./pages/gallery";
import globalFunction from "./global";
import dashboardPage from "./pages/dashboard.js";

document.addEventListener("DOMContentLoaded", function () {
    globalFunction();

    if (document.querySelector(".page-dashboard")) {
        dashboardPage();
    }

    
});