
<?php
include_once("cabecalho.php");
?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-calendar"></i> Calendário</h1>
            <p>Gerenciar agendamentos</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Calendar</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card row">
              <div class="col-md-3">
                <div id="external-events">
                  <h4 class="mb-20">Agendar</h4>
                  <div class="fc-event">Agendar</div>
                  <div class="fc-event">Agendar</div>
                  <div class="fc-event">Agendar</div>
                  <p class="animated-checkbox mt-20">
                    <label>
                      <input id="drop-remove" type="checkbox"><span class="label-text">Remover após colocar</span>
                    </label>
                  </p>
                </div>
              </div>
              <div class="col-md-9">
                <div id="calendar"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
  </body>
</html>