<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/subirArchivosCarro.css">
    <title>Subir Archivos</title>
</head>
<body>
    
<center class="mainForm">

<h2>Subir archivos</h2>

<form class="uploadForm" action="completadoConductor.php" method="POST" enctype="multipart/form-data">
  <p>Adjunte los archivos que se requieren en formato PDF</p>
  <br><br>

  <button class="uploadButton" type="button">Sube tus archivos:</button>
  <br><br>

  <div class="fileUploadContainer">
    <div class="fileEntry">
      <img src="assets/img/PDF-removebg-preview.png" alt="PDF icon" class="pdfIcon">
      <label class="fileLabel" for="carnet">Carnet.pdf</label>
      <input class="fileInput" type="file" name="carnet" id="carnet" accept=".pdf" required><br>
      <img src="assets/img/cheque-removebg-preview.png" alt="Checkmark" class="checkmark" style="display: none;">
    </div>

    <div class="fileEntry">
      <img src="assets/img/PDF-removebg-preview.png" alt="PDF icon" class="pdfIcon">
      <label class="fileLabel" for="licencia">Licencia.pdf</label>
      <input class="fileInput" type="file" name="licencia" id="licencia" accept=".pdf" required><br>
      <img src="assets/img/cheque-removebg-preview.png" alt="Checkmark" class="checkmark" style="display: none;">
    </div>

    <div class="fileEntry">
      <img src="assets/img/PDF-removebg-preview.png" alt="PDF icon" class="pdfIcon">
      <label class="fileLabel" for="papeles_carro">Papeles del carro.pdf</label>
      <input class="fileInput" type="file" name="papeles_carro" id="papeles_carro" accept=".pdf" required><br>
      <img src="assets/img/cheque-removebg-preview.png" alt="Checkmark" class="checkmark" style="display: none;">
    </div>

    <div class="fileEntry">
      <img src="assets/img/PDF-removebg-preview.png" alt="PDF icon" class="pdfIcon">
      <label class="fileLabel" for="placa_carro">Placa del carro.pdf</label>
      <input class="fileInput" type="file" name="placa_carro" id="placa_carro" accept=".pdf" required><br>
      <img src="assets/img/cheque-removebg-preview.png" alt="Checkmark" class="checkmark" style="display: none;">
    </div>

    <div class="fileEntry">
      <img src="assets/img/PDF-removebg-preview.png" alt="PDF icon" class="pdfIcon">
      <label class="fileLabel" for="foto_carro">Fotografía del carro.pdf</label>
      <input class="fileInput" type="file" name="foto_carro" id="foto_carro" accept=".pdf" required><br>
      <img src="assets/img/cheque-removebg-preview.png" alt="Checkmark" class="checkmark" style="display: none;">
    </div>

    <div class="fileEntry">
      <img src="assets/img/PDF-removebg-preview.png" alt="PDF icon" class="pdfIcon">
      <label class="fileLabel" for="dui">DUI.pdf</label>
      <input class="fileInput" type="file" name="dui" id="dui" accept=".pdf" required><br>
      <img src="assets/img/cheque-removebg-preview.png" alt="Checkmark" class="checkmark" style="display: none;">
    </div>
  </div>
  
<br><br>
  <button class="submitButton" type="submit">Siguiente</button>
</form>
</center>

<script>
    const fileInputs = document.querySelectorAll('.fileInput');
    fileInputs.forEach(input => {
        input.addEventListener('change', function() {
            const checkmark = this.parentElement.querySelector('.checkmark');
            if (this.files.length > 0) {
                checkmark.style.display = 'inline';
            } else {
                checkmark.style.display = 'none';
            }
        });
    });
    </script>

</body>
</html>
