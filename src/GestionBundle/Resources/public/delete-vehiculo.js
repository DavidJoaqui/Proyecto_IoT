$(document).ready(function () {

    $('.btn-delete').click(function (event) {
        event.preventDefault();
        var row=$(this).parents('tr');
        var id = row.data('id');


        var form=$('#form-delete');
        var url=form.attr('action').replace(':VEHICULO_ID',id);
        var data= form.serialize();

        bootbox.confirm(message,function (res) {

            if(res == true){

                $('#delete-progress').removeClass('hidden');

                $.post(url,data,function (result) {

                    $('#delete-progress').addClass('hidden');

                    if(result.removed == 1){

                        row.fadeOut();
                        $('#message').removeClass('hidden');

                        $('#vehiculo-message').text(result.message);

                        //var total_usuarios=$('#total').text();

                        /*if($.isNumeric(t)){
                            $('#total').text(total_usuarios-1);
                        }else {
                            $('#total').text(result.num_vehiculos);
                        }*/
                    }else {

                        $('#message-danger').removeClass('hidden');
                        $('#vehiculo-message-danger').text(result.message);

                    }

                }).fail(function () {
                    //alert(status);
                    alert('Error ...!');
                    row.show();
                })
            }
        })

    });

})