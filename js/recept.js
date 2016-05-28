$(document).ready(function(){
  $('.category').on('change', function(){
    var category_list = [];
    $('#filters :input:checked').each(function(){
      var category = $(this).val();
      category_list.push(category); //Push each check item's value into an array
    });

    if(category_list.length == 0)
        $('.resultblock').fadeIn();
    else {
      $('.resultblock').each(function(){
        var item = $(this).attr('data-tag');
        if(jQuery.inArray(item,category_list) > -1) //Check if data-tag's value is in array
          $(this).fadeIn('slow');
        else
          $(this).hide();
      });
    });
});
