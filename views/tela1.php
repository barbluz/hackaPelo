<!DOCTYPE html>
<html>
<body>

	<img src="../assets/images/zumbi.jpg" alt="zumbi" style="width: 100%;">

	<div id="result"></div>
	<script>
		// Check browser support
		if (typeof(Storage) !== "undefined") {

		    // Store
		    if (localStorage.getItem("pontos") === "") {
		    	localStorage.setItem("pontos", "1");
		    } else {
		    	localStorage.setItem("pontos", Number(localStorage.getItem("pontos"))+1);
		    }
		    

		    // Retrieve
		    console.log(localStorage.getItem("pontos"));
		}

		else {
			document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
		}
</script>

</body>
</html>

