<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='{{asset('assets/fullcalendar/packages/core/main.css')}}' rel='stylesheet' />
<link href='{{asset('assets/fullcalendar/packages/daygrid/main.css')}}' rel='stylesheet' />
<link href='{{asset('assets/fullcalendar/packages/timegrid/main.css')}}' rel='stylesheet' />
<link href='{{asset('assets/fullcalendar/packages/list/main.css')}}' rel='stylesheet' />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
<link href='{{ asset('assets/fullcalendar/css/style.css') }}' rel='stylesheet' />


<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>

  @include('fullcalendar.modal-calendar')

  <div id='wrap'>

    <div id='external-events'>
      <h4>Draggable Events</h4>

      <div id='external-events-list'>
        <div class='fc-event' data-event='{"id":"99","title":"Income","color":"#FF9B09","start":"07:00:00","end":"07:30:00"}'>Income</div>
        <div class='fc-event'data-event='{"id":"98","title":"Expense","color":"#1C415B","start":"07:00:00","end":"07:30:00"}'>Expense</div>
        <div class='fc-event'>Other</div>
      </div>

      <p>
        <input type='checkbox' id='drop-remove' />
        <label for='drop-remove'>remove after drop</label>
      </p>
    </div>

    <div 
      id="calendar"
      data-route-load-events="{{ route('routeLoadEvents') }}"
      data-route-event-update="{{ route('routeEventUpdate') }}"
      data-route-event-store="{{ route('routeEventStore') }}"
      data-route-event-delete="{{ route('routeEventDelete') }}"
    ></div>

    <div style='clear:both'></div>



  </div>
  <script src='{{asset('assets/fullcalendar/packages/core/main.js')}}'></script>
  <script src='{{asset('assets/fullcalendar/packages/interaction/main.js')}}'></script>
  <script src='{{asset('assets/fullcalendar/packages/daygrid/main.js')}}'></script>
  <script src='{{asset('assets/fullcalendar/packages/timegrid/main.js')}}'></script>
  <script src='{{asset('assets/fullcalendar/packages/list/main.js')}}'></script>

  <script src='{{ asset('assets/fullcalendar/packages/core/locales-all.js') }}'></script>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>

  <script src='{{ asset('assets/fullcalendar/js/script.js') }}'></script>

  <script src='{{ asset('assets/fullcalendar/js/calendar.js') }}'></script>

</body>
</html>
