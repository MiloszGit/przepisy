document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".show-details").forEach(button => {
        button.addEventListener("click", () => {
            alert("Tutaj znajdziesz pełny przepis!");
        });
    });
});