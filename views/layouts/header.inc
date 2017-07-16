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
	  <div class= "toggle-button" id="toggle-button"><i class="fa fa-bars" aria-hidden="true"></i>Centro que pulsa</div>
	  <div class="toggle-menu" id="toggle-menu">
	    <ul>
	      <li><a href="">Home</a></li>
	      <li><a href="">About</a></li>
	      <li><a href="">Login</a></li>
	      <li><a href="">Sign In</a></li>
	    </ul>
	  </div>
	</div>
</nav>