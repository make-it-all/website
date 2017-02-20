$(function(){

  $('a[data-method]').on('click', function(e){
    e.preventDefault();
    var href=this.href;
    var method = $(this).data('method');
    var $form = $('<form action="'+href+'" method="POST"><input type="hidden" name="__method" value="'+method+'"/></form>');
    $form.css('display', 'none');
    $('body').append($form);
    $form.submit()
  });

  $('[data-personnel-selector]').on('change', function(){
    console.log($(this).val())
    $("#yourdropdownid option:selected").text();
    var $selected = $(this).find("option:selected");
    var text = $selected.text();
    var email = $selected.data('email');
    $(this).closest('form').find('#name_field').val(text);
    $(this).closest('form').find('#email_field').val(email);
  });

});
