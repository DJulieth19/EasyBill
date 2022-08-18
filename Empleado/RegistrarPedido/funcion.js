$('#enviar').click(regresar);

function regresar(){
    $.ajax(
        {
            url:'datos.php',
            type: 'post',
            dataType: 'json',
            data:{
                plato:$('#plato').val()
            }
        }
    ).done(
        function(data){
            $('#salida').append(data);

        }
    );
}