
    $('#dateBirthday').on('change', function(){
        let dateBirthday = $('#dateBirthday').val();
        // Extraer el año usando la función getFullYear()
        let year = new Date(dateBirthday).getFullYear();
        // Obtener la fecha actual
        let fechaActual = new Date();
        // Obtener el año actual
        let anioActual = fechaActual.getFullYear();
        // edad
        let edad = anioActual - year;
        // añadir edad en input
        $('#age').val(edad);
    });

    $('#dni').on('change', function(){
        let dni = $('#dni').val();
        // Extraer el año usando la función getFullYear()
        let url = "/api/search-dni/:dni";
        url = url.replace(':dni', dni);
        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#firstname').val(data.nombres);
                if (data.apellidoPaterno == null) {
                    $('#lastname').val(data.apellidoMaterno);
                } else {
                    $('#lastname').val(data.apellidoPaterno);
                    $('#second_surname').val(data.apellidoMaterno);
                }

                if (data.message == "not found") {
                    Swal.fire({
                        position: 'top-center',
                        icon: 'error',
                        title: 'DNI no encontrado, por favor verifique',
                        showConfirmButton: false,
                        timer: 2500
                    });
                    $('#dni').val('');
                }
            }
        });
    });


    $('.table-record tbody').on('click', '.show-image', function(){
        let image = $(this).data('image');
        $('#img_record_dental').attr('src', image);
        $('#modalShowImage').modal('show');
    });

    $('.delete-note').on('click', function(){
        let dataid = $(this).data('id');
        let formDelete = $('#formNoteDelete-'+dataid);
        Swal.fire({
            title: '¿Está Seguro de Eliminar la Nota?',
            text: "La informaciòn no podra ser recuperada!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Si, estoy seguro!'
        }).then((result) => {
            if (result.value) {
                $(formDelete).submit();
            }
        });
    });
