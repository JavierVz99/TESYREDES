
$('#passwd').keyup(function(e) {
    var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
    var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
    var enoughRegex = new RegExp("(?=.{6,}).*", "g");
    if (false == enoughRegex.test($(this).val())) {
    $('#passstrength').removeClass('rojo');
    $('#passstrength').removeClass('naranja');
    $('#passstrength').removeClass('verde');
    $('#passstrength').addClass('seguridad');
    $('#passstrength').html('¡La contraseña es debil usuario!');
 } else if (strongRegex.test($(this).val())) {
    $('#passstrength').removeClass('naranja');
    $('#passstrength').addClass('verde');
     $('#passstrength').html(' ¡La contraseña esta fuerte usuario!');
 } else if (mediumRegex.test($(this).val())) {
    $('#passstrength').removeClass('rojo');
    $('#passstrength').addClass('naranja');
     $('#passstrength').html('¡La contraseña esta media segura usuario!');
 } else {
    $('#passstrength').removeClass('seguridad');
    $('#passstrength').addClass('rojo');
         $('#passstrength').html('¡La contraseña es aún es debil usuario!');
 }
 return true;
});

$('.bpas').click(function(){
   $('#passwd').each(function(){
      if(this.value.length < 8){
         $('#passstrength').html('Necesita minimo 8 caracteres.');
      }else if(this.value.length > 16){
         $('#passstrength').html('Solo un maximo de 16 caracteres');
      }
      else if(this.value.length <= 0){
         $('#passstrength').html('Rellena todos los campos');
      }else{
         document.getElementById('formtesyred').submit();
      }
   })
})