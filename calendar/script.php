
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>


<link  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" >

<script>

$(document).ready(function () {
  var calendar = $('#calendar').fullCalendar({
      header: {
          left: 'title',
          center: '',
          right: 'prev,next today'
      },
      navLinks: true,
      eventLimit: true,
      events: "load_event.php",
      displayEventTime: false,
      selectable: true,
      selectHelper: true,
     

      eventClick:  function(event, jsEvent, view) {
              endtime = $.fullCalendar.moment(event.end).format('dddd, MMMM Do YYYY, h:mm');
              starttime = $.fullCalendar.moment(event.start).format('dddd, MMMM Do YYYY, h:mm');
              var mywhen = starttime + ' - ' + endtime;
              $('#modalTitle').html(event.title);
              $('#modalWhen').text(mywhen);
              $('#eventID').val(event.id);
              $('#calendarModal').modal();
          },
      
  });
});


 
</script>


<div id="calendarModal" class="modal fade">
<div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">

          <h3 class="modal-title">EVENT DETAILS</h3>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
          
      </div>
      <div id="modalBody" class="modal-body">
      <h4 id="modalTitle" class="modal-title"></h4>
      <div id="modalWhen" style="margin-top:5px;"></div>
      </div>
      <input type="hidden" id="eventID"/>
      <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
          <button type="submit" class="btn btn-danger" id="deleteButton">Delete</button>
      </div>
  </div>
</div>
</div>
<!--Modal-->