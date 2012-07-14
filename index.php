<!DOCTYPE html> 
<html> 
	<head> 
		<title>my page</title> 
	
		<link href="css/ui-lightness/jquery-ui-1.8.20.custom.css" rel="stylesheet" type="text/css"/>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.cookie.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.20.custom.min.js"></script>
		<script type="text/javascript"><!--
			var mydialog;
			var cartDialogTimeoutActive;
			$(document).ready(function() {

				mydialog = $('<div></div>')
				.html('dialog message')
				.dialog({
					autoOpen: true,
					title: 'dialog title',
					draggable: true,
					resizable: true,
					show: 'slide', /* 'fade', */
					hide: 'explode',
					height:260,
					width:400,
					modal: true,
					buttons: {
						"OK": function() {
							clearTimeout(cartDialogTimeoutActive);
							$( this ).dialog( "close" );
						}
					}
				});
			
			});
			
			cartDialogTimeoutActive = setTimeout(function(){mydialog.dialog("close")},6000);
			
		--></script>
	</head>
<body>
Auto open and auto close jquery dialog sample.
</body>
</html>