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

});
