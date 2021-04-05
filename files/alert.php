<?php
function alert($alert_type,$alert_head="Heading",$alert_message="alert message!"){
	$alert = '
		<div class="site_alert alert alert-'.$alert_type.' alert-dismissible fade " role="alert">
		  <strong>'.$alert_head.':  </strong> 
		  '.$alert_message.'
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
	';

	echo $alert;
}
?>
<script>
	$(".site_alert").css({"display":"inline-block"});
</script>