document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll(".grille article");
    const radios = document.querySelectorAll('input[name="type"]');

    function filter(categorie) {
        items.forEach((item) => {
            const type = item.dataset.type;

            item.style.display =
                categorie === "all" || type === categorie ? "" : "none";
        });
    }

    radios.forEach((radio) => {
        radio.addEventListener("change", (e) => {
            filter(e.target.id);
        });
    });

    filter("all");
});
