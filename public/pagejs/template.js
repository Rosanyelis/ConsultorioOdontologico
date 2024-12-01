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

    function customCalSelect(cat) {
    if (!cat.id) {
        return cat.text;
    }

    var $cat = $('<span class="fc-' + cat.element.value + '"> <span class="dot"></span>' + cat.text + '</span>');
        return $cat;
    };
    NioApp.Select2('.select-calendar-theme', {
        templateResult: customCalSelect
    });

})(NioApp, jQuery);
