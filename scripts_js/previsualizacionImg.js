function activatePreview() {
    var input = document.getElementById('imagen');
    var file = input.files[0];

    if (file) {
        var preview = document.getElementById('preview');
        var reader = new FileReader();

        reader.onload = function(e) {
            preview.src = e.target.result;
        };

        reader.readAsDataURL(file);
    } else {
        alert('Selecciona una imagen primero...');
    }
}
