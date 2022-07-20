 
$(document).ready(function() {

    $("#frm_foto").unbind('submit').bind('submit', function(){
            $.ajax({
                url: 'save_img.php',
                type: 'POST',
                data: new FormData(this),
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function(){
                    btnSaveLoad();
                },
            });  
    });

here
});