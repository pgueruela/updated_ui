function readSingleFile(e) {
  var file = e.target.files[0];
  if (!file) {
    return;
  }
  var reader = new FileReader();
  reader.onload = function(e) {
    var contents = e.target.result;
    displayContents(contents);
  };
  reader.readAsText(file);
}

function displayContents(contents) {
  var element = document.getElementById('file-content');
  element.textContent = contents;
  document.write(contents);
}

document.getElementById('file-input')
  .addEventListener('change', readSingleFile, false);

function fileValidation(){
    var fileInput = document.getElementById('file-input');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.dwg|\.cnc|\.nc|\.gcode)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .dwg/.cnc/.nc/.gcode only.');
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}
