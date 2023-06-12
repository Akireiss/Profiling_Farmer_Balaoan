function previewPhoto(event) {
    var input = event.target;
    var reader = new FileReader();
    
    reader.onload = function(){
      var image = document.getElementById('preview');
      image.src = reader.result;
    };
    
    reader.readAsDataURL(input.files[0]);
  }