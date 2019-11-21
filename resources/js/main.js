function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            var img = $(input).parent().children('img');

            reader.onload = function (e) {
                $(img)
                    .attr('src', e.target.result)
                    .show();
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
$(document).ready(function(){
    $('.form-search input').focus(function(){
        $('.guide-box').fadeIn();
    });
    $('.form-search input').focusout(function(){
        $('.guide-box').fadeOut();
    });

    $('.datetime input').datepicker({
          format: 'dd/mm/yyyy'
      });
});