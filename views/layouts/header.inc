<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
 $(document).ready(function(){
    $("#toggle-button").click(function(){
        $("#toggle-menu").toggle();
    });
});
</script>

<nav>
	<div class="toggle-wrapper">
	  <div class= "toggle-button" id="toggle-button"><i class="fa fa-bars" aria-hidden="true"></i>onde é que tá</div>
	  <div class="toggle-menu" id="toggle-menu">
	    <ul>
	      <li><a href="../views/home.php">Home</a></li>
	      <li><a href="../views/login.php">Login</a></li>
	      <li><a href="../views/perfil.php">Perfil</a></li>
	      <li><a href="../views/tela1.php">Charada 1</a></li>
	      <li><a href="../views/tela2.php">Charada 2</a></li>
	    </ul>
	  </div>
	</div>
</nav>