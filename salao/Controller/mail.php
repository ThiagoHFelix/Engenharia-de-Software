<!DOCTYPE html>
<html>
<head>
	<title>Teste de momente.js</title>
	<script src='http://momentjs.com/downloads/moment.min.js'></script>
	<script type="text/javascript">
	function function_name() {
		var a = "1999";
      var b = moment().format("-MM-DD");
      var c = a.concat(b);
		alert(c);
	}
	function ver(){
		alert(document.getElementById('teste').value);
	}		
	</script>
	
</head>
<body>
  <p onclick="ver()">Aperte</p>
  <input type="date" name="teste" id="teste" value="2017-12-12">
</body>
</html>