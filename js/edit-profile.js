$(document).ready(function(){
     $('#image_upload').change(function(){
          $('#preview').html('<label>Image Uploading...</label>');
          $('#upload_image').ajaxForm({
               target: '#preview'
               
          }).submit();
     });
});
