const $form = document.getElementById("form-login");
const $show_pass = $form.querySelectorAll(".show-pass");

$show_pass.forEach(($element) => {
    const $button = $element.querySelector("#show-hide");
    const $input = $element.querySelector(".password");
    $button.onclick = () => {
        $element.classList.toggle("show");
        $input.type = $input.type === "password" ? "text" : "password";
    };
});
