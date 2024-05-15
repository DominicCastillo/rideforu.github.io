// Función para abrir el popup
function openPopup() {
    var popup = document.getElementById("popup");
    popup.style.display = "block";
}

// Función para cerrar el popup
function closePopup() {
    var popup = document.getElementById("popup");
    popup.style.display = "none";
}

// Evento click en el botón para abrir el popup
document.getElementById("popupBtn").addEventListener("click", openPopup);
