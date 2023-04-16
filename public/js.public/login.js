const $form = document.getElementById("form-login");
const $btnShowPassword = $form.querySelector("#show-hide");

$btnShowPassword.onclick = () => {
    const $input_pass = $form.querySelector("#password");
    $form.querySelector("#password-container").classList.toggle("show");
    $input_pass.type = $input_pass.type === "password" ? "text" : "password";
};
