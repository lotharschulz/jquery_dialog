<!DOCTYPE html> 
<html> 
	<head> 
		<title>my page</title> 
	
<?php

function check_mobile() {
  $agents = array(
	'iPhone', 'iPod',
    'Windows CE', 'Pocket', 'Mobile',
    'Portable', 'Smartphone', 'SDA',
    'PDA', 'Handheld', 'Symbian',
    'WAP', 'Palm', 'Avantgo',
    'cHTML', 'BlackBerry', 'Opera Mini',
    'Nokia', 'android', 'iemobile'
  );

  for ($i=0; $i<count($agents); $i++) {
    if(isset($_SERVER["HTTP_USER_AGENT"]) && stripos($_SERVER["HTTP_USER_AGENT"], $agents[$i]) !== false)
      return true;
  }
  return false;
}

if(check_mobile()){

?>
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" href="css/themes/dialogsampletheme.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" rel="stylesheet" type="text/css" />
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script type="text/javascript"><!--
			var cartDialogTimeoutActive;
		--></script>
	</head> 
<body> 

<div data-role="page" id="mypage">

	<div data-role="header">
		<h1>my title</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<p>my text</p>
		<p><a href="#thedialog" data-rel="dialog" id="lnkDialog">dialog open</a></p>
	</div><!-- /content -->

</div><!-- /page -->

<div data-role="dialog" id="thedialog">
	<div data-role="header">
		<h1>dialog header</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<p>dialog message</p>		
		<a href="#mypage" data-role="button" data-rel="back" id="closeBtn">close</a>  
	</div><!-- /content -->
</div>

	<script type="text/javascript"><!--
		$(document).bind("pageinit", function(){
			$("#lnkDialog").click();
		});		

		$('#closeBtn').click(function() {
			clearTimeout(cartDialogTimeoutActive);
		});

	--></script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
	<script type="text/javascript"><!--
		cartDialogTimeoutActive = setTimeout(function(){$("#closeBtn").click();},6000);
	--></script>


<?php
} // if 
else{
?>

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


<?php
} // else
?>

</body>
</html>