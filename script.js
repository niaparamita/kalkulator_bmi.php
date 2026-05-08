const form = document.getElementById("bmiForm");

form.addEventListener("submit", () => {

    const button = document.querySelector("button");

    button.innerHTML =
    '<i class="fa-solid fa-spinner fa-spin"></i> Menghitung...';

    button.style.opacity = "0.8";

});

/* Efek hover glow */

const card = document.querySelector(".glass-card");

card.addEventListener("mousemove", (e) => {

    const x = e.clientX / window.innerWidth;
    const y = e.clientY / window.innerHeight;

    card.style.transform =
    `rotateY(${(x - 0.5) * 5}deg)
     rotateX(${(0.5 - y) * 5}deg)`;

});

card.addEventListener("mouseleave", () => {

    card.style.transform =
    "rotateY(0deg) rotateX(0deg)";

});