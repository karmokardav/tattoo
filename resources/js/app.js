// import gallery from "./pages/gallery";
import globalFunction from "./global";
import galleryPage from "./pages/gallery.js";
import blogPage from "./pages/blog.js";

document.addEventListener("DOMContentLoaded", function () {
    globalFunction();
    
    if (document.querySelector('.page-gallery')) {
        galleryPage();
    }
    if (document.querySelector('.page-blog')) {
        blogPage();
    }
});