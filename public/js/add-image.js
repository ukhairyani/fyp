$(document).ready(function() {

    $("#gambar_profile").change(function(){
      updatePlacholder1(this);
    });

    $("#gambar_lesen").change(function(){
      updatePlacholder2(this);
    });


  $("#gambar_ic").change(function(){
    updatePlacholder3(this);
  });






  // file upload
  function updatePlacholder1(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('.image-placeholder').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  function updatePlacholder2(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('.image-placeholder2').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  function updatePlacholder3(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('.image-placeholder2').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

})
