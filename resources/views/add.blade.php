<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8"/>	
       <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Student</title>
	
	 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

</head>
<body>
<table border="2" align="center" id="st_table">
	<th>ID</th>
	<th>Name</th>
	<th>Major</th>
	<th>Created_at</th>
	<th>Updated_at</th>
</table>

<input type="text" name="name" id="st_name">
<br><br>
<input type="text" name="major" id="major">
<br><br>
<input  type="button" name="add_student" value="Add Student" id="add_student">
</body>
<br><br>
<div id="name" style="background-color: #41A62D; width: 250px; border-radius: 6px; color: white;text-align: 
center;font-family: cursive;"></div>
</html>

<script>
	$(document).ready(function(){

		
			$('#add_student').click(function(){
				$.ajaxSetup({
  						headers: {
    					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
						  }
						});
			$.ajax({
				type:'post',
				url:'/abc',
				data:{
					name:$('#st_name').val(),
					major:$('#major').val()
				},
				success:function()
				{
					// var row = $('#st_table');
					// row.append('<tr><td>1</td><td>Anas Darabee</td><td>Enginner</td></tr>');   
					$('#name').fadeIn();
					$('#name').text('Successfully added new row').fadeOut(4000);
				}
			});
	});	
	});
</script>
