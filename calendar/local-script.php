
<link rel="stylesheet" href="../css/fullcalendar-3-4.css" />


<script src="../js/jquery-3-2.js"></script>
<script src="../js/jqueryui-1-12.js"></script>
<script src="../js/moment-2-18.js"></script>
<script src="../js/fullcalendar-3-4.js"></script>



<script src="../js/bootstrap-4-5.js"></script>


<!--
<link  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" >
-->



<style>
   
    .fc-content {
       background-color:#F9F4A9;
       padding:10px;
    }

    .fc-event{
        border: 1px solid #F9F4A9;
    }

    .fc-toolbar{
    background-color: #345587;
    padding: 10px;
    width:100%;
}
.fc-header-toolbar{
    color: #EFE20A;
    padding-left: 10px;
    font-size: 20px;
    text-transform: uppercase ; 
}
.fc-day-header{
    background-color: #98D6F3;
    margin: 10px
}

    
</style>

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
     
/*
      eventClick:  function(event, jsEvent, view)
       {
              endtime = $.fullCalendar.moment(event.end).format('h:mm');
              starttime = $.fullCalendar.moment(event.start).format('dddd, MMMM Do YYYY , h:mm');
              var mywhen = starttime + ' - ' + endtime;
              var myadd = (event.address) + ' ' + (event.city) + ' ' +(event.barangay) ;
              var mysp = (event.sp_first_name) + ' ' + (event.sp_middle_name) + ' ' +(event.sp_last_name) ;
            
              $('#modalTitle').html(event.title);
              $('#modalvenue').html(event.venue);
              $('#modalWhen').text(mywhen);
              $('#modaladd').html(myadd);
              $('#modalsp').html(mysp);
              $('#eventID').val(event.sno);
              $('#calendarmodal').modal();
          },

          */
      
  });
});


 
</script>


<div id="calendarmodal" class="modal fade">
<div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">

                    <h4 id="modalTitle" class="modal-title" style="text-transform:uppercase;"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
          
      </div>

      <div id="modalBody" class="modal-body">

              
                <h6  class="modal-title mt-2" style="color:#345587;">DATE</h6>
                <div id="modalWhen" style="margin-top:5px;"></div>

                <h6  class="modal-title mt-2" style="color:#345587;">VENUE</h6>
                <div id="modalvenue" style="margin-top:5px;"></div>

                <h6  class="modal-title mt-2" style="color:#345587;">ADDRESS</h6>
                <div id="modaladd" style="margin-top:5px;"></div>

                <h6  class="modal-title mt-2" style="color:#345587;">SPEAKER</h6>
                <div id="modalsp" style="margin-top:5px;"></div>

      </div>

      <input type="hidden" id="eventID"/>

      <div class="modal-footer">
          <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">BACK</button>
         
      </div>

  </div>
</div>
</div>



<!--Modal-->



<!---
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
-->