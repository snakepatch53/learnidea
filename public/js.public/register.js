// declaracion de objetos del DOM
const $form = document.getElementById("form-login");
const $show_pass = $form.querySelectorAll(".show-pass");
const input_containers_array = $form.querySelectorAll(".item");
const $modal_success = document.getElementById("modal_success");
const $general_message = document.getElementById("general_message");

//conffeti en el modal
document.addEventListener("DOMContentLoaded", function () {
    var confettiSettings = { target: "canvas-confetti" };
    var confetti = new ConfettiGenerator(confettiSettings);
    confetti.render();
});

// define function to show password
$show_pass.forEach(($element) => {
    const $button = $element.querySelector(".show-hide");
    const $input = $element.querySelector(".password");
    $button.onclick = () => {
        $element.classList.toggle("show");
        $input.type = $input.type === "password" ? "text" : "password";
    };
});

// validacion de formulario al escribir
input_containers_array.forEach(($input_container) => {
    const $input = $input_container.querySelector("input");
    if (!$input) return;
    const input_type = $input.type;
    if (input_type === "submit") return;
    if (input_type === "checkbox") {
        $input.onchange = (e) => {
            const input_value = e.target.checked;
            const input_name = e.target.name;
            validate($input_container, input_value, input_name, input_type);
        };
        return;
    }

    $input.onkeyup = (e) => {
        const input_value = e.target.value;
        const input_name = e.target.name;
        validate($input_container, input_value, input_name, input_type);
    };
});

// validacion de formulario al enviar
$form.onsubmit = (e) => {
    e.preventDefault();
    let isValid = true;
    input_containers_array.forEach(($input_container) => {
        const $input = $input_container.querySelector("input");
        if (!$input) return; // si no existe el input, no se valida
        const input_value = $input.value;
        const input_name = $input.name;
        const input_type = $input.type;
        const _isValid = validate($input_container, input_value, input_name, input_type);
        if (!_isValid) isValid = false;
    });
    if (isValid) {
        // aqui se envia el formulario
        $modal_success.classList.add("open");
        const formData = new FormData($form);
        fetch_query(formData, "users", "register").then((res) => {
            if (!res.response) {
                $general_message.classList.remove("info");
                $general_message.classList.remove("success");
                $general_message.classList.add("error");
                $general_message.textContent = res.message;
                return;
            }
            $general_message.classList.remove("info");
            $general_message.classList.remove("error");
            $general_message.classList.add("success");
            $general_message.textContent = "";
            let user_shortname = $form["user_names"].value.split(" ")[0] + " " + $form["user_surnames"].value.split(" ")[0];
            $modal_success.classList.remove("load");
            $modal_success.querySelector(".user_name").textContent = user_shortname;
        });
    }
};

// funcion de validacion de campo
const validate = ($input_container, input_value, input_name, input_type) => {
    const validation_function = validation[input_name];
    if (!validation_function) return true;
    const isValid = validation_function(input_value);
    if (!isValid.valid) {
        $input_container.classList.remove("info");
        $input_container.classList.remove("success");
        $input_container.classList.add("error");
        $input_container.querySelector(".message").textContent = isValid.message;
        return false;
    }
    $input_container.classList.remove("info");
    $input_container.classList.remove("error");
    $input_container.classList.add("success");
    $input_container.querySelector(".message").textContent = "";
    return true;
};

// objeto de funciones de validacion
const validation = {
    user_cedula: (value) => {
        let result = {
            valid: true,
            message: "Numero de cedula valido",
        };

        // si el valor es vacio
        if (value.length < 1) {
            result.message = "La cedula es obligatoria";
            result.valid = false;
            return result;
        }

        // permite una longitud exacta de 10 caracteres
        if (value.length !== 10) {
            result.message = "La cedula debe tener 10 caracteres";
            result.valid = false;
            return result;
        }

        // validamos si el numero de cedula es totalmente valido
        if (!isCedula(value)) {
            result.message = "Numero de cedula invalido";
            result.valid = false;
            return result;
        }

        return result;
    },
    user_names: (value) => {
        let result = {
            valid: true,
            message: "Nombres válidos",
        };

        // si el valor es vacio
        if (value.length < 1) {
            result.message = "Por favor ingrese sus nombres";
            result.valid = false;
            return result;
        }

        // este regex permite un minimo de 3 caracteres
        const regex = /^[a-zA-ZÀ-ÿ\s]{3,40}$/g;
        if (!regex.test(value)) {
            result.message = "El nombre debe tener entre 3 y 40 caracteres";
            result.valid = false;
            return result;
        }

        return result;
    },
    user_surnames: (value) => {
        let result = {
            valid: true,
            message: "Apellidos válidos",
        };

        // si el valor es vacio
        if (value.length < 1) {
            result.message = "Por favor ingrese sus apellidos";
            result.valid = false;
            return result;
        }

        // este regex permite un minimo de 3 caracteres
        const regex = /^[a-zA-ZÀ-ÿ\s]{3,40}$/g;
        if (!regex.test(value)) {
            result.message = "El apellido debe tener entre 3 y 40 caracteres";
            result.valid = false;
            return result;
        }

        return result;
    },
    user_email: (value) => {
        let result = {
            valid: true,
            message: "Email válido",
        };

        // si el valor es vacio
        if (value.length < 1) {
            result.message = "Por favor ingrese su email";
            result.valid = false;
            return result;
        }

        // este regex valida un email
        const regex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;
        if (!regex.test(value)) {
            result.message = "El email no es válido";
            result.valid = false;
            return result;
        }

        return result;
    },
    user_phone: (value) => {
        let result = {
            valid: true,
            message: "Numero de celular válido",
        };

        // si el valor es vacio
        if (value.length < 1) {
            result.message = "Por favor ingrese su numero de celular";
            result.valid = false;
            return result;
        }

        // permite una longitud exacta de 10 caracteres
        if (value.length !== 10) {
            result.message = "El numero de celular debe tener 10 caracteres";
            result.valid = false;
            return result;
        }

        // este regex valida un numero de celular ecuatoriano
        const regex = /^(09)[0-9]{8}$/g;
        if (!regex.test(value)) {
            result.message = "El numero de celular no es válido";
            result.valid = false;
            return result;
        }

        return result;
    },
    user_pass: (value) => {
        let result = {
            valid: true,
            message: "Contraseña válida",
        };

        // si el valor es vacio
        if (value.length < 1) {
            result.message = "Por favor ingrese su contraseña";
            result.valid = false;
            return result;
        }

        // este regex permite un minimo de 8 caracteres y cualquier otra cosa estara bien
        const regex = /^.{8,}$/g;
        if (!regex.test(value)) {
            result.message = "La contraseña debe tener al menos 8 caracteres";
            result.valid = false;
            return result;
        }

        // este regex permite un maximo de 20 caracteres y cualquier otra cosa estara bien
        const regex2 = /^.{0,20}$/g;
        if (!regex2.test(value)) {
            result.message = "La contraseña debe tener maximo 20 caracteres";
            result.valid = false;
            return result;
        }

        // este regex permite al menos una letra mayuscula y cualquier otra cosa estara bien
        const regex3 = /^(?=.*[A-Z]).+$/g;
        if (!regex3.test(value)) {
            result.message = "La contraseña debe tener al menos una letra mayuscula";
            result.valid = false;
            return result;
        }

        // este regex permite al menos un numero y cualquier otra cosa estara bien
        const regex4 = /^(?=.*[0-9]).+$/g;
        if (!regex4.test(value)) {
            result.message = "La contraseña debe tener al menos un numero";
            result.valid = false;
            return result;
        }

        // este regex permite al menos un caracter especial y cualquier otra cosa estara bien
        const regex5 = /^(?=.*[!@#$%^&*]).+$/g;
        if (!regex5.test(value)) {
            result.message = "La contraseña debe tener al menos un caracter especial";
            result.valid = false;
            return result;
        }

        return result;
    },
    user_confirmpass: function (value) {
        let result = {
            valid: true,
            message: "Contraseña válida",
        };

        // si el valor es vacio
        if (value.length < 1) {
            result.message = "Por favor confirme su contraseña";
            result.valid = false;
            return result;
        }

        // si el valor es diferente a la contraseña
        if (value !== $form["user_pass"].value) {
            result.message = "Las contraseñas no coinciden";
            result.valid = false;
            return result;
        }

        return result;
    },
    user_terminos: function (value) {
        let result = {
            valid: true,
            message: "Terminos aceptados",
        };

        // si el valor es vacio
        $check = $form["user_terminos"];
        if (!$check.checked) {
            result.message = "Debe aceptar los terminos y condiciones";
            result.valid = false;
            return result;
        }

        return result;
    },
};

// mas funciones UI
// function sho
