function showPopup() {
    document.getElementById("popup").style.display = "block";
}

function closePopup() {
    document.getElementById("popup").style.display = "none";
}

// Close the popup when clicking anywhere on the page
window.onclick = function(event) {
    closePopup();
};
