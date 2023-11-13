function validarFormulario(event) {
    // var email = document.forms["loginForm"]["email"].value;
    var password = document.forms["loginForm"]["contraseña"].value;
    var errorMessage = document.getElementById("error-message");


    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email === "" || password === "") {
        errorMessage.style.display = "block";
        errorMessage.innerHTML = "Por favor, completa todos los campos.";
        event.preventDefault(); 
    // } else if (!emailRegex.test(email)) {
    //     errorMessage.style.display = "block";
    //     errorMessage.innerHTML = "Por favor, ingresa un correo electrónico válido.";
    //     event.preventDefault(); 
    } else {
        errorMessage.style.display = "none";
    }
}


document.addEventListener("DOMContentLoaded", function () {
    var form = document.forms["loginForm"];
    form.addEventListener("submit", function (event) {
        validarFormulario(event);
    });
});
