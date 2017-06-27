
      <!-- Javascripts-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/essential-plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/plugins/moment.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery-ui.custom.min.js"></script>
    <script type="text/javascript" src="js/plugins/fullcalendar.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
      
        $('#external-events .fc-event').each(function() {
      
          // store data so the calendar knows to render an event upon drop
          $(this).data('event', {
            title: $.trim($(this).text()), // use the element's text as the event title
            stick: true // maintain when user navigates (see docs on the renderEvent method)
          });
      
          // make the event draggable using jQuery UI
          $(this).draggable({
            zIndex: 999,
            revert: true,      // will cause the event to go back to its
            revertDuration: 1  //  original position after the drag
          });
      
        });
      
        $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          editable: true,
          droppable: true, // this allows things to be dropped onto the calendar
          drop: function() {
            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
              // if so, remove the element from the "Draggable Events" list
              $(this).remove();
            }
          }
        });
      
      
      });
    </script>