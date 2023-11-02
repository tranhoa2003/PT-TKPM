
// ngôi nhà của di chuyển trang chủ lên xuống
document.addEventListener("DOMContentLoaded", function () {
    const linkHome = document.querySelector(".link-home");

    linkHome.addEventListener("mouseenter", function () {
        linkHome.style.backgroundPosition = "center -45px";
    });

    linkHome.addEventListener("mouseleave", function () {
        linkHome.style.backgroundPosition = "center 1px";
    });
});