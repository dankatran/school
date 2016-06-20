<?php echo $this->element('slider'); ?>
<?php echo $this->element('news'); ?>
<?php echo $this->element('notice'); ?>
<?php echo $this->element('calendar'); ?>
<script type="text/javascript">
	$('#carousel[data-type="multi"] .item').each(function(){
          var next = $(this).next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));
          
          for (var i=0;i<0;i++) {
            next=next.next();
            if (!next.length) {
              next = $(this).siblings(':first');
            }
            
            next.children(':first-child').clone().appendTo($(this));
          }
    });
</script>