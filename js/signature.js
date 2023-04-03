// Initialize the signature pad
var signaturepad;

function initSignaturePad() {
    // Get the canvas element
    var canvas = document.getElementById('signature-pad');

    // Create a new signature pad
    signaturePad = new SignaturePad(canvas);

    // Get the reset button
    var resetButton = document.getElementById('reset-button');

    // Add a click event listener to the reset button
    resetButton.addEventListener('click', function () {
        // Clear the canvas
        signaturePad.clear();
    });
}

// Initialize the signature pad when the page loads
window.addEventListener('load', initSignaturePad);