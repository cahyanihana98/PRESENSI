<!DOCTYPE html>
<html>
<head>

	<title> Index API </title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$.get("http://127.0.0.1/presensi/service.php", function(data, status){
				console.log(data);
				var toDoItems = JSON.parse(data);
				for (var i = 0; i < toDoItems.length; i++){
					var item = "pin: " + toDoItems[i].pin + 
					           "nama: " + toDoItems[i].nama;

					item = "<li>" + item + "</li>";
					$("#myitems").append(item);
				}
			});

				$("#save").click(function(){
					var name = $("#name").val();
					var pin  = $("#pin").val();

					var item = {
						nama : name,
						pin : pin

					};

					$.post("http://127.0.0.1/presensi/service.php)", item, function(data){
						console.log(data);

					});

				});

		});
	</script>

</head>
<body>
	<div>
		<h1> Usertable </h1>
		<ol id = "myitems">
			
		</ol>
	</div>

	<div>
		<h2> Tambah ke usertable </h2></br>
	
		<label> Nama : </label>
		<input type="text" name="name"></br>
		<label> PIN : </label>
		<input type="password" name="pin">
	</br>
		<input type="button" id="save" value="Save">

		
	</div>

</body>
</html>