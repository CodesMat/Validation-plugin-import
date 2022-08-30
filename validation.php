//nezapomen nastavit id formuláře

// importy
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

</head>
//




<script type="text/javascript">
		$(document).ready(function(){
$("#pridatZaznam").validate({
	rules:{
		
		textTyp: {
			 maxlength: 255,
			required:true,
		},
		
		
		
		
		
		
		
		
		
	}
});
		});
	</script>
