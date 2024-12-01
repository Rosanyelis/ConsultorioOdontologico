
    'use strict';

    var total = 0;
    var dataCotizacion = [];
    var totalQuote = 0;
    var typeId = 0;

    $('#total').html('0');

    $('#btnQuoteF').hide();

    $('#add').on('click', function(){
        // obtener los datos de los campos
        let type = $('#type').val();
        let qty = parseInt($('#qty').val());
        let price = parseFloat($('#price').val()).toFixed(2);
        let subtotal = qty * price;

        typeId++;

        // revisar si ese tratamiento ya se encuentra en el array
        if (dataCotizacion.some((item) => item.type === type)) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'El tratamiento ya se encuentra en la cotización',
                showConfirmButton: false,
                timer: 2500
            });

            // reseteamos los campos luego de haber agregado los datos a la tabla
            $("#type").val($("#type").data('placeholder')).trigger('change');
            $('#qty').val('');
            $('#price').val('');

            return false;
        }
        // agregamos los datos a la variable dataCotizacion
        let datosFila = {};
        datosFila.id = typeId;
        datosFila.type = type;
        datosFila.qty = qty;
        datosFila.price = price;
        datosFila.subtotal = subtotal;
        dataCotizacion.push(datosFila);

        // agregar fila en la tabla
        $("#servicio tbody").append(
            `<tr id="tr-${typeId}" data-type-id="${typeId}">
                <td>${type}</td>
                <td>${qty}</td>
                <td class="price">${price}</td>
                <td class="subtotal">${subtotal}</td>
                <td>
                    <button type="button" class="btn btn-sm btn-danger" data-type-id="${typeId}"
                        onclick="removeRow(event)">
                        <em class="icon ni ni-trash"></em>
                    </button>
                </td>
            </tr>`
        );



        // reseteamos los campos luego de haber agregado los datos a la tabla
        $("#type").val($("#type").data('placeholder')).trigger('change');
        $('#qty').val('');
        $('#price').val('');

        // se suma los montos al realizar click al agregar data en la tabla
        total = total + parseInt(subtotal);

        totalQuote = total;
        // lo mostramos en la tabla donde indica el total
        $('#total').html(total);

    });

    $('#btnQuote').on('click', function(){
        // verificar que la cotización tenga al menos un tratamiento
        if (dataCotizacion.length == 0) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'La cotización debe tener al menos un tratamiento',
                showConfirmButton: false,
                timer: 2500
            });
            return false;
        }

        // verificarmos que la cotizacion tenga un paciente seleccionados y una fecha
        if ($('#paciente').val() == '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'La cotización debe tener un paciente',
                showConfirmButton: false,
                timer: 2500
            });
            return false;
        }

        if ($('#fecha').val() == '') {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'La cotización debe tener una fecha',
                showConfirmButton: false,
                timer: 2500
            });
            return false;
        }
        // colocamos el boton de guardado en disabled y le indicamos que espere mientras se procesa la informacion
        $('#btnQuote').attr('disabled', true);
        $('#btnQuote').html(
            '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span> Por favor, espere... </span>'
            );

        $('#dataQuote').val(JSON.stringify(dataCotizacion));
        $('#dataTotal').val($('#total').html());
        $('#formQuote').submit();
    });

    function removeRow(event) {
        let _typeid = $(event.target).closest('tr').data('type-id');
        $('#tr-'+_typeid).remove();
        let total = 0;
        let id = _typeid;

        // eliminar del array el dato eliminado de la tabla
        dataCotizacion = dataCotizacion.filter((item) => item.id != _typeid);

        // se suma los montos al realizar click al agregar data en la tabla
        dataCotizacion.forEach((item) => {
            total = total + parseInt(item.price);
        });

        totalQuote = total;
        $('#total').html(total);

    }

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
