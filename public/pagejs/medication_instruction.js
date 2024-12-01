(function(NioApp, $){
    'use strict';

    $('.datatable-init tbody').on('click', '.delete-record', function(){
        let dataid = $(this).data('id');
        let formDelete = $('#formDelete-'+dataid);
        Swal.fire({
            title: '¿Está Seguro de Eliminar el registro?',
            text: "El registro eliminado, no podrá ser recuperado!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Si, estoy seguro!'
        }).then((result) => {
            if (result.value) {
                $(formDelete).submit();
            }
        });
    });

})(NioApp, jQuery);
