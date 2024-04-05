"use strict";

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

!function (NioApp, $) {
  "use strict"; // Variable

  var $win = $(window),
      $body = $('body'),
      breaks = NioApp.Break,
      url = 'http://consultorioodontologico.test/citasAjax';

  NioApp.Calendar = function () {
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();
    var tomorrow = new Date(today);
    tomorrow.setDate(today.getDate() + 1);
    var t_dd = String(tomorrow.getDate()).padStart(2, '0');
    var t_mm = String(tomorrow.getMonth() + 1).padStart(2, '0');
    var t_yyyy = tomorrow.getFullYear();
    var yesterday = new Date(today);
    yesterday.setDate(today.getDate() - 1);
    var y_dd = String(yesterday.getDate()).padStart(2, '0');
    var y_mm = String(yesterday.getMonth() + 1).padStart(2, '0');
    var y_yyyy = yesterday.getFullYear();
    var YM = yyyy + '-' + mm;
    var YESTERDAY = y_yyyy + '-' + y_mm + '-' + y_dd;
    var TODAY = yyyy + '-' + mm + '-' + dd;
    var TOMORROW = t_yyyy + '-' + t_mm + '-' + t_dd;
    var month = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    var calendarEl = document.getElementById('calendar');
    var eventsEl = document.getElementById('externalEvents');
    var removeEvent = document.getElementById('removeEvent');
    var addEventBtn = $('#addEvent');
    var addEventForm = $('#addEventForm');
    var addEventPopup = $('#addEventPopup');
    var previewEventPopup = $('#previewEventPopup');
    var deleteEventBtn = $('#deleteEvent');
    var createHistory = $('#CreateHistory');
    var mobileView = NioApp.Win.width < NioApp.Break.md ? true : false;


    var calendar = new FullCalendar.Calendar(calendarEl, {
        locale: 'es',
        timeZone: 'America/Mexico_City',
        initialView: mobileView ? 'listWeek' : 'dayGridMonth',
        themeSystem: 'bootstrap',
        headerToolbar: {
            left: 'title prev,next',
            center: null,
            right: 'today dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
        height: 800,
        contentHeight: 780,
        aspectRatio: 3,
        editable: true,
        droppable: true,
        views: {
            dayGridMonth: {
                dayMaxEventRows: 2
            }
        },
        direction: NioApp.State.isRTL ? "rtl" : "ltr",
        nowIndicator: true,
        eventDragStart: function eventDragStart(info) {
            $('.popover').popover('hide');
        },
        eventMouseEnter: function eventMouseEnter(info) {
            $(info.el).popover({
                template: '<div class="popover"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
                title: info.event._def.title,
                html: true, // Aquí indicamos que el contenido tiene formato HTML
                content: info.event._def.extendedProps.description,
                placement: 'top'
            });
            info.event._def.extendedProps.description ? $(info.el).popover('show') : $(info.el).popover('hide');
        },
        eventMouseLeave: function eventMouseLeave(info) {
            $(info.el).popover('hide');
        },
        eventClick: function eventClick(info) {
            // Get data
            var title = info.event._def.title;
            var description = info.event._def.extendedProps.description;
            var start = info.event._instance.range.start;
            var startDate = start.getFullYear() + '-' + String(start.getMonth() + 1).padStart(2, '0') + '-' + String(start.getDate()).padStart(2, '0');
            var startTime = start.toUTCString().split(' ');
            startTime = startTime[startTime.length - 2];
            startTime = startTime == '00:00:00' ? '' : startTime;
            var end = info.event._instance.range.end;
            var endDate = end.getFullYear() + '-' + String(end.getMonth() + 1).padStart(2, '0') + '-' + String(end.getDate()).padStart(2, '0');
            var endTime = end.toUTCString().split(' ');
            endTime = endTime[endTime.length - 2];
            endTime = endTime == '00:00:00' ? '' : endTime;

            var className = info.event._def.ui.classNames[0].slice(3);

            var eventId = info.event._def.publicId; //Set data in eidt form

            $('#edit-event-title').val(title);
            $('#edit-event-start-date').val(startDate).datepicker('update');
            $('#edit-event-end-date').val(endDate).datepicker('update');
            $('#edit-event-start-time').val(startTime);
            $('#edit-event-end-time').val(endTime);
            $('#edit-event-description').val(description);
            $('#edit-event-theme').val(className);
            $('#edit-event-theme').trigger('change.select2');
            deleteEventBtn.attr('data-id', eventId); // Set data in preview

            var previewStart = String(start.getDate()).padStart(2, '0') + ' ' + month[start.getMonth()] + ' ' + start.getFullYear() + (startTime ? ' - ' + to12(startTime) : '');
            var previewEnd = String(end.getDate()).padStart(2, '0') + ' ' + month[end.getMonth()] + ' ' + end.getFullYear() + (endTime ? ' - ' + to12(endTime) : '');
            $('#preview-event-title').text(title);
            $('#preview-event-header').addClass('fc-' + className);
            $('#preview-event-start').text(previewStart);
            $('#preview-event-end').text(previewEnd);
            $('#preview-event-description').html(description);
            !description ? $('#preview-event-description-check').css('display', 'none') : null;
            previewEventPopup.modal('show');
            $('.popover').popover('hide');
        },
        events: url,
    });
    calendar.render(); //Add event

    // Añadir evento al calendario
    addEventBtn.on("click", function (e) {
      e.preventDefault();
        // tomamos los datos del formulario
        var eventTheme = desfragmentarMotivo($('#event-theme').val());
        // id del paciente y del doctor
        var patientId = $('#patient_id').val();
        var doctorId = $('#doctor_id').val();
        // fecha de inicio y fin del evento
        var eventStartDate = $('#event-start-date').val();
        // hora de inicio y fin de cita
        var eventStartTime = $('#event-start-time').val();
        var eventEndTime = desfragmentarSumarHora(eventStartTime);
        var eventStartTimeCheck = eventStartTime ? 'T' + eventStartTime + 'Z' : '';
        var eventEndTimeCheck = eventEndTime ? 'T' + eventEndTime + 'Z' : '';

        var start = eventStartDate + eventStartTimeCheck;
        var end = eventStartDate + eventEndTimeCheck;

        $.ajax({
            url: 'http://consultorioodontologico.test/citas/agendar-cita',
            type: 'POST',
            data: {
                title: eventTheme,
                start: start,
                end: end,
                patient_id: patientId,
                doctor_id: doctorId,
            },
            success: function (data) {
                Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Cita Agendada Correctamente',
                    showConfirmButton: false,
                    timer: 2500
                });
                location.reload();
            }
        });

      addEventPopup.modal('hide');
    });
    deleteEventBtn.on("click", function (e) {
      e.preventDefault();
      var dataId = deleteEventBtn.attr('data-id');
      var deleteUrl = 'http://consultorioodontologico.test/citas/'+dataId+'/eliminar-cita'
      $.ajax({
        url: deleteUrl,
        type: 'POST',
        data: {},
        success: function (data) {
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Cita Eliminada Correctamente',
                showConfirmButton: false,
                timer: 4500
            });


            location.reload();
        }
    });
    });

    function desfragmentarSumarHora(horaString) {
        // Desfragmentar la hora en un array
        let horaArray = horaString.split(':');
        // Sumar 1 a la hora
        horaArray[0] = parseInt(horaArray[0]) + 1;
        // Formatear la hora como string
        let nuevaHoraString = horaArray.join(':');
        // Retornar la nueva hora
        return nuevaHoraString;
    }

    function desfragmentarMotivo(motivo) {
        // Desfragmentar la oracion en un array
        let motivoArray = motivo.split(' ');
        // Sumar 1 a la hora
        let titulo = motivoArray[1];
        // retornar el titulo
        return titulo;
    }

    function to12(time) {
      time = time.toString().match(/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [time];

      if (time.length > 1) {
        time = time.slice(1);
        time.pop();
        time[5] = +time[0] < 12 ? ' AM' : ' PM'; // Set AM/PM

        time[0] = +time[0] % 12 || 12;
      }

      time = time.join('');
      return time;
    }

    function customCalSelect(cat) {
      if (!cat.id) {
        return cat.text;
      }

      var $cat = $('<span class="fc-' + cat.element.value + '"> <span class="dot"></span>' + cat.text + '</span>');
      return $cat;
    }

    ;
    NioApp.Select2('.select-calendar-theme', {
      templateResult: customCalSelect
    });
    addEventPopup.on('hidden.bs.modal', function (e) {
      setTimeout(function () {
        $('#patient_id').trigger('change.select2');
        $('#doctor_id').trigger('change.select2');
        $('#event-start-date').val('');
        $('#event-start-time').val('');

        $('#event-theme').val('event-primary');
        $('#event-theme').trigger('change.select2');
      }, 1000);
    });
    previewEventPopup.on('hidden.bs.modal', function (e) {
      $('#preview-event-header').removeClass().addClass('modal-header');
    });
  };

  NioApp.coms.docReady.push(NioApp.Calendar);
}(NioApp, jQuery);
