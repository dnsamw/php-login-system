<?php
require "header.php";
?>

<main>
<div class="jumbotron">
<h1>Signup</h1>
	
	<form action="includes/signup.inc.php" method="post">
<div class="form-group">
	<input class="form-control" type="text" name="uid" placeholder="Username">
</div>
<div class="form-group">
	<input class="form-control" type="text" name="mail" placeholder="E-mail">
</div>
<div class="form-group">
	<input class="form-control" type="password" name="pwd" placeholder="Password">
	<input class="form-control" type="password" name="pwd-repeat" placeholder="Repeat Password">
</div>
<div class="form-group">
	<button class="btn btn-primary" type="submit" name="signup-submit">Signup</button>
</div>




</form>



</div>
</main>

<?php
require "footer.php";
?>