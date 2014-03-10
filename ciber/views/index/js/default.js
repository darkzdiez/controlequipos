
function cambiarEstado(id){
    $.ajax({
        url: URL + "equipo/cambiarestado/",
        type: "POST",
        data: { 'id': id},
        dataType: 'json',
        beforeSend: function() {
        },
        success: function(data) {
        	if(data.s==1){
    	    	$('#btncambiarEstado'+id).text('Bloquear');
                $('#pctr'+id).addClass('yellow');
                $('#pctr'+id).removeClass('white');
                $('#pctr'+id).removeClass('red');
            }else if(data.s==2){
                $('#btncambiarEstado'+id).text('Desbloquear');
                $('#pctr'+id).addClass('white');
                $('#pctr'+id).removeClass('yellow');
                $('#pctr'+id).removeClass('red');
            }else if(data.s==3){
                $('#btncambiarEstado'+id).text('Conectar');
                $('#pctr'+id).removeClass('white');
                $('#pctr'+id).removeClass('yellow');
                $('#pctr'+id).addClass('red');
            }
        	alert(data.mensaje);
        }
    });
}