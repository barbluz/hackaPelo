 <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include 'layouts/head.inc'; ?>
    <title>Charada 2</title>
</head>
<body>
    <div id="tela2">
    <img src="../assets/images/5-telas3.png" style="width: 100%">
    	<script type="text/javascript">
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
    </div>
 </body>
 </html>