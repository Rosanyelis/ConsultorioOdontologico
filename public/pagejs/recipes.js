    'use strict';

    var datosMedicamentos = [];
    $('#aggMedicine').click(function() {
        let medicine = $('#medicine').val();
        let dose = $('#dose').val();
        let instructions = $('#instructions').val();
        $("#Medicamentos tbody").append(
            `<tr>
                <td>`+medicine+`</td>
                <td>`+dose+`</td>
                <td>`+instructions+`</td>
            </tr>`);

        let datosFila = {};
        datosFila.medicine = medicine;
        datosFila.dose = dose;
        datosFila.instructions = instructions;
        datosMedicamentos.push(datosFila);

        $('#medicine').val('');
        $('#dose').val('');
        $('#instructions').val('');
    });

    $('#guardar').click(function() {

        // validar que haya medicamentos en la tabla
        if (datosMedicamentos.length == 0) {
            Swal.fire('Error', 'No se han agregado medicamentos.', 'error', 2500);
            return false;
        }

        $('#datosMedicamentos').val(JSON.stringify(datosMedicamentos));
        $('#form').submit();
        $('#guardar').attr('disabled', true);
        $('#guardar').html(
            '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span> Por favor, espere... </span>'
            );
    });
