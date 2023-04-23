document.addEventListener("DOMContentLoaded", function () {
    var confettiSettings = { target: "canvas-confetti" };
    var confetti = new ConfettiGenerator(confettiSettings);
    confetti.render();
});
