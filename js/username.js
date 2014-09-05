$(function() {

    //$.removeCookie('name', { path: '/' });
    ($.cookie('name') === undefined) ? $('#name_user').css('display', 'compact') + $('#submit-btn').css('margin-top', '-50px') :                      $('#name_user').css('display', 'none'); 
});

$("#btn-name").bind('click', function(e) {

    e.preventDefault();
    
    var name      = $("#name");
    var nameValue = $.trim(name.val()); 
   
    if (nameValue.length === 0) {
    
        alert('Nombre no puede estar vacio, no es requerido');
    
    } else {
    
        $.cookie('name', nameValue, { expires: 1, path: '/' });
        
        $('#name_user').css('display', 'none');
        $('#success_name').html($.cookie('name'));
        $('#submit-btn').css('margin-top', '-20px');
    }
});