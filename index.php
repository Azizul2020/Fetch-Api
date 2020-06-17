<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Ajax with Fetch Api</title>
</head>
<body>
	<form action="" id="form">
		<input type="text" name="a" id="" />
		<input type="password" name="pwd" id="" />
		<input type="submit" value="Submit" />
	</form>
	<script type="text/javascript">
	
	// THIS IS POST REQUEST
		// var form=document.getElementById("form");
		// form.addEventListener('submit',function(e){
			// e.preventDefault();
			// var data=new FormData(form);
			// fetch('a.php',{
				// method:'POST',
				// body:data
			// }).then(function(a){
				// return a.text();
			// }).then(function(c){
				// console.log(c);
			// })
		// });
		
		// //THIS IS GET REQUEST
		
		// var form=document.getElementById("form");
		// form.addEventListener('submit',function(e){
			// e.preventDefault();
			// var val=form.name.value();
			// var pwd=form.pwd.value();
			// var data=new formData(form);
			// fetch('a.php?name='+val+'&pwd='+pwd).then(function(a){
				// return a.text();
			// }).then(function(c){
				// console.log(c);
			// })
		// });
		
		
		
		
		
		var form=document.getElementById("form");
		form.addEventListener('submit',function(e){
			e.preventDefault();
			var data=new FormData(form);
			data.append('val',"ccc");
			data.append('valc',"cccd");
			fetch('a.php',{
				method:'POST',
				body:data
			}).then(function(a){
				return a.text();
			}).then(function(c){
				console.log(c);
			})
		});
		
	</script>
</body>
</html>