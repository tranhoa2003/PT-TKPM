// nhấn vào và hiện ra đoạn text
document.addEventListener("DOMContentLoaded", function () {
    const faqItems = document.querySelectorAll(".faq li");

    faqItems.forEach(function (item) {
        const question = item.querySelector(".ask h3");
        const answer = item.querySelector(".answer");

        question.addEventListener("click", function () {
            if (answer.style.display === "block" || answer.style.display === "") {
                answer.style.display = "none";
            } else {
                answer.style.display = "block";
            }
        });
    });
});
