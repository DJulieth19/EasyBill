function btnSaveLoad() {
    $("#btn_save").html('Guardando ...');
    $("#btn_save").attr("disabled", true);
}

function btnSave() {
    $("#btn_save").html('Guardar');
    $("#btn_save").attr("disabled", false);
}

$(document).ready(function() {

    $("#frm_foto").unbind('submit').bind('submit', function(){

        var nombreProducto = $('#nombreProducto').val();
        var valor = $('#valor').val();

            $.ajax({
                url: 'backend/save_img.php',
                type: 'POST',
                data: new FormData(this),
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function(){
                    btnSaveLoad();
                },
                success: function(response){
                    btnSave();
                    if (response.success == true) {
                        swal("MENSAJE", response.messages , "success");
                        $("#frm_foto")[0].reset();
                        $("#radiosfoto").click();
                    } else {
                        swal("MENSAJE", response.messages , "error");
                    }
                }
            });
    });


});