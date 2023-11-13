function activatePreview() {
}

function validarFormulario() {
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    
    if (name.trim() === "") {
        alert("El campo 'Name' no puede estar vacío.");
        return false;
    }

    var phoneRegex = /^\d{9}$/; // Acepta solo 9 números
    if (!phoneRegex.test(phone)) {
        alert("El campo 'Phone' debe contener exactamente 9 números.");
        return false;
    }


    // var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    // if (!emailRegex.test(email)) {
    //     alert("El campo 'Email' debe ser un correo electrónico válido.");
    //     return false;
    // }


    if (password.trim() === "") {
        alert("El campo 'Password' no puede estar vacío.");
        return false;
    }

    return true; 
}