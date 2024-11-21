const basepath = document.querySelector('html').getAttribute('base-path');
var btnTeeth, inputTeeth, IDteeth;
var data = [];


    // dientes de adultos
    $('#teeth18').prop('src', basepath + 'images/diente/18.png');
    $('#teeth17').prop('src', basepath + 'images/diente/17.png');
    $('#teeth16').prop('src', basepath + 'images/diente/16.png');
    $('#teeth15').prop('src', basepath + 'images/diente/15.png');
    $('#teeth14').prop('src', basepath + 'images/diente/14.png');
    $('#teeth13').prop('src', basepath + 'images/diente/13.png');
    $('#teeth12').prop('src', basepath + 'images/diente/12.png');
    $('#teeth11').prop('src', basepath + 'images/diente/11.png');
    $('#teeth21').prop('src', basepath + 'images/diente/21.png');
    $('#teeth22').prop('src', basepath + 'images/diente/22.png');
    $('#teeth23').prop('src', basepath + 'images/diente/23.png');
    $('#teeth24').prop('src', basepath + 'images/diente/24.png');
    $('#teeth25').prop('src', basepath + 'images/diente/25.png');
    $('#teeth26').prop('src', basepath + 'images/diente/26.png');
    $('#teeth27').prop('src', basepath + 'images/diente/27.png');
    $('#teeth28').prop('src', basepath + 'images/diente/28.png');

    $('#teeth48').prop('src', basepath + 'images/diente/48.png');
    $('#teeth47').prop('src', basepath + 'images/diente/47.png');
    $('#teeth46').prop('src', basepath + 'images/diente/46.png');
    $('#teeth45').prop('src', basepath + 'images/diente/45.png');
    $('#teeth44').prop('src', basepath + 'images/diente/44.png');
    $('#teeth43').prop('src', basepath + 'images/diente/43.png');
    $('#teeth42').prop('src', basepath + 'images/diente/42.png');
    $('#teeth41').prop('src', basepath + 'images/diente/41.png');
    $('#teeth31').prop('src', basepath + 'images/diente/31.png');
    $('#teeth32').prop('src', basepath + 'images/diente/32.png');
    $('#teeth33').prop('src', basepath + 'images/diente/33.png');
    $('#teeth34').prop('src', basepath + 'images/diente/34.png');
    $('#teeth35').prop('src', basepath + 'images/diente/35.png');
    $('#teeth36').prop('src', basepath + 'images/diente/36.png');
    $('#teeth37').prop('src', basepath + 'images/diente/37.png');
    $('#teeth38').prop('src', basepath + 'images/diente/38.png');

    $('#saveTeeth').on('click', function(){
        let type = $('input[name="typeTreat"]:checked').val();

        if ($('input[name="typeTreat"]:checked').length == 0) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Debes seleccionar un tratamiento',
                showConfirmButton: false,
                timer: 2500
            });
            return false;
        }
        const existingTreatment = data.find(item => item.code_teeth === btnTeeth);

        if (existingTreatment && existingTreatment.typeTreat === type) {
            Swal.fire({
                icon: 'warning',
                title: 'Atención!',
                text: `El diente ${btnTeeth} ya tiene asignado el tratamiento '${type}'. Elige un tratamiento diferente o verifica si deseas modificar el existente.`,
                showConfirmButton: true,
                showConfirmButton: false,
                timer: 5000
            });
            return false;
        }

        let datosFila = {};
        datosFila.code_teeth = btnTeeth;
        datosFila.typeTreat = type;
        data.push(datosFila);
        $('#treatments tbody').append('<tr id="tr'+btnTeeth+'"><td>'+btnTeeth+'</td><td>'+type+'</td><td><button type="button" class="btn p-0 text-danger" onclick="deleteTeeth('+btnTeeth+')">x</button></td></tr>');

        $('input[type="radio"][name="typeTreat"]').prop('checked', false);
        $('#teeth').html('');
        $('#modalTeeth').modal('hide');
    });

    $('#closeTeeth').on('click', function(){
        $('input[type="radio"][name="typeTreat"]').prop('checked', false);
        $('#teeth').html('');
        $('#modalTeeth').modal('hide');
    });
    $('.close').on('click', function(){
        $('input[type="radio"][name="typeTreat"]').prop('checked', false);
        $('#teeth').html('');
        $('#modalTeeth').modal('hide');
    });

    $('#guardar').click(function() {
        $('#teethData').val(JSON.stringify(data));
        $('#form').submit();
        $('#guardar').attr('disabled', true);
        $('#guardar').html(
            '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span> Por favor, espere... </span>'
            );
    });

function treatmentTeeth(teeth, teethId)
{
    $('#teeth').html(teeth);
    $('#modalTeeth').modal('show');
    btnTeeth = teeth;
    IDteeth = teethId;
}

function deleteTeeth(teeth){
    data.forEach(function (element, index) {
        if(element.code_teeth == teeth){
            data.splice(index, 1);
        }
    });
    $('#tr'+teeth).remove();
}
