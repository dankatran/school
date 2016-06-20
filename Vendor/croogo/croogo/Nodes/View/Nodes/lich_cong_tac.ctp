<?php
	echo $this->Html->css(array('fullcalendar','popup'));
	echo $this->Html->script(array('moment.min','jquery.min','fullcalendar.min','popup'));
?>
<script>
	$(document).ready(function() {
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			//defaultDate: '2016-05-12',
			editable: true,
			businessHours: true,
			eventLimit: true, // allow "more" link when too many events
			events: {
				url: '<?php echo Router::url(array('plugin'=>'nodes','controller'=>'nodes', 'action'=>'congtac', '1.json'), true); ?>',
				error: function() {
					$('#script-warning').show();
				}
			},
			loading: function(bool) {
				$('#loading').toggle(bool);
			},
			//Bắt đầu hover
			eventMouseover: function( event, jsEvent, view ) { 
                var item = $(this);
                if(item.find('.nube').length == 0){
                    var info = '<span class="nube"><span style="color:#ff4">Thời gian kết thúc:</span> '+event.stop_+'</span>';
                    item.append(info);
                }
                if(parseInt(item.css('top')) <= 200){
                    item.find('.nube').css({'bottom':'auto','z-index':'1'});
                    item.parent().find('.fc-event').addClass('z0');
                }
                item.find('.nube').stop(true,true).fadeIn();
            },
            eventMouseout: function( event, jsEvent, view ) { 
                var item = $(this);
                item.find('.nube').stop(true,true).fadeOut(0);
            },
            //Kết thúc hover
            // Popup calendar
		    eventRender: function(event, element, view) {   
			    element.attr('href', 'javascript:void(0);'); //disable the event href
			        element.click(function() {
			            //set the values and open the modal
			            $("#eventInfo").html(event.des);
						$("#eventCreated").html(event.created);
						$("#eventStart").html(event.bd);
						$("#eventEnd").html(event.stop_);
						$("#eventXacnhan").html(event.xacnhan);
			            $("#eventLink").attr('href', event.url);
			            $("#myModal").dialog({ modal: true, title: event.title });
			        });
				if (event.allDay === 'true') {
			     event.allDay = false;
			    } else {
			     event.allDay = false;
			    }
   			},
		   //End popup
		});
	});
</script>
	<div id='loading'><?php echo $this->Html->image('712.gif'); ?></div>
	<div id='calendar'></div>
	<!--Popup event detail-->
	<div id="myModal" title="Event Details" class="modal fade in">
		<div id="eventInfo">
			
		</div>	
		<div id="eventCreated" title="Created time">
			
		</div>
		<div id="eventStart">
		
		</div>
		<div id="eventEnd">
		
		</div>
		<p><strong><a id="eventLink" target="_blank">Chi tiết</a></strong></p>
	</div>