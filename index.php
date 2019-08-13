<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
		<title>Detalmita</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="manager.js"></script>
		<meta charset="UTF-8">		
	</head>
	<body>
		
	<div class="body">
		<div class="sideNav">
			<div class="menuOption" id="searchLink" onclick="navSelect(event, 'searchContent')">Search</div>
			<div class="menuOption" id="contantsLink" onclick="navSelect(event, 'contactsContent')">Contacts</div>
			
		</div>

		<div class="topNav">
		</div>


		
		<div class="contentBox">

			<div class="contentBoxContent" id="searchContent">
				<?php 
					include('core/init.inc.php'); 
				?>
				<script>
					$(document).ready(function(){
						$(".selectMarke").change(function(){
							var kintamasis = this.value;
							$('.selectModelis').attr('style',"display:none");
							$('[modelis="'+kintamasis+'"]').attr("style", "display: block");	
						});							
					});
				</script>
			</div>

			<div class="contentBoxContent" id="contactsContent">
				<p> pisk nx </p>
			</div>

		</div>

		<div class="footer">
			<p> Copyright Detalmita </p>
		</div>
		
	</div>

	</body>
	<script src="select_display.js"></script>
	</html>


