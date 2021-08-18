/**
* Theme: Frogetor - Responsive Bootstrap 4 Admin Dashboard
* Author: Mannatthemes
* Component: Full-Calendar
*/


$(document).ready(function() {
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();

    /*  className colors

     className: default(transparent), important(red), chill(pink), success(green), info(blue)

     */


    /* initialize the external events
     -----------------------------------------------------------------*/

    $('#external-events div.external-event').each(function() {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
            title: $.trim($(this).text()) // use the element's text as the event title
        };

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject);

        // make the event draggable using jQuery UI
        $(this).draggable({
            zIndex: 999,
            revert: true,      // will cause the event to go back to its
            revertDuration: 0  //  original position after the drag
        });

    });


    /* initialize the calendar
     -----------------------------------------------------------------*/

    var calendar =  $('#calendar').fullCalendar({
        header: {
            left: 'title',
            center: 'agendaDay,agendaWeek,month',
            right: 'prev,next today'
        },
       
        editable: true,
        firstDay: 1, //  1(Monday) this can be changed to 0(Sunday) for the USA system
        selectable: true,
        defaultView: 'month',

        axisFormat: 'h:mm',
        
        views: {
            agenda: {
                columnFormat: {
                slotLabelFormat: 'ddd',
                month: 'dddd',    // Monday, Wednesday, etc
                week: 'dddd, MMM dS', // Monday 9/7
                day: 'dddd, MMM dS'  // Monday 9/7
            }
                // options apply to agendaWeek and agendaDay views
            }
        },
        week:{ titleFormat: "DD MMMM YYYY" },
        allDaySlot: false,
        selectHelper: true,
        select: function(start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
                calendar.fullCalendar('renderEvent',
                    {
                        title: title,
                        start: start,
                        end: end,
                        allDay: allDay,
                        className: 'bg-soft-primary'
                    },
                    true // make the event "stick"
                );
            }
            calendar.fullCalendar('unselect');
        },
        droppable: true, // this allows things to be dropped onto the calendar !!!
        drop: function(date, allDay) { // this function is called when something is dropped

            // retrieve the dropped element's stored Event Object
            var originalEventObject = $(this).data('eventObject');

            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);

            // assign it the date that was reported
            copiedEventObject.start = date;
            copiedEventObject.allDay = allDay;

            // render the event on the calendar
            // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
            $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                $(this).remove();
            }

        },

        events: [
            {
                title: 'All Day Event',
                start: new Date(y, m, 1),
                className: 'bg-soft-primary',
            },
            {
                id: 997,
                title: 'Repeating Event',
                start: new Date(y, m, d-5, 18, 0),
                allDay: false,
                className: 'bg-soft-pink',
            },
            {
                id: 998,
                title: 'Meeting',
                start: new Date(y, m, d-3, 16, 0),
                allDay: false,
                className: 'bg-soft-purple'
            },
            {
                id: 999,
                title: 'Meeting',
                start: new Date(y, m, d+4, 16, 0),
                allDay: false,
                className: 'bg-soft-warning'
            },
            {
                title: 'Meeting',
                start: new Date(y, m, d, 10, 30),
                allDay: false,
                className: 'bg-soft-danger'
            },
            {
                title: 'Lunch',
                start: new Date(y, m, d, 12, 0),
                end: new Date(y, m, d, 14, 0),
                allDay: false,
                className: 'bg-soft-success'
            },
            {
                title: 'Birthday Party',
                start: new Date(y, m, d+1, 19, 0),
                end: new Date(y, m, d+1, 22, 30),
                allDay: false,
                className: 'bg-soft-info'
            },
            {
                title: 'Click for Google',
                start: new Date(y, m, 28),
                end: new Date(y, m, 29),
                url: 'http://google.com/',
                className: 'bg-soft-pink'
            },
        ],
    });


});


