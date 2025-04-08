
const menuBtn = document.getElementById('menu-btn');
const mobileMenu = document.getElementById('mobile-menu');

menuBtn.addEventListener('click', () => {
    const isVisible = mobileMenu.classList.contains('hidden');
    if (isVisible) {
        mobileMenu.classList.remove('hidden');
    } else {
        mobileMenu.classList.add('hidden');
    }




    const firstname = document.getElementById("firstname")[0];


firstname.addEventListener("input", function () {
    // Si aucun caractère n'est présent dans l'input pseudo
    if (this.value.length === 0) {
        // On enlève la classe "is-valid" et on ajoute la classe "is-invalid"
        this.classList.remove("is-valid");
        this.classList.add("is-invalid");
    }
}