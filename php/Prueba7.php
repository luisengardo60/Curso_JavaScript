<!DOCTYPE html>
<html>
<body>
	<h2>JavaScript Objects</h2>
	<p>JavaScript uses names to acces object properties.</p>
	<p id="demo"></p>
	<script>
		 var person = {firstName:"Jhon", lastName:"Doe", age:46};
		 document.getElementById("demo").innerHTML = person["firstName"];
	</script>

</body>
</html>