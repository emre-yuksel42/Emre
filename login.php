
<?php include_once('layouts/header.php') ?>

<form action="php/login.php" method="POST" class="container mt-5" >

  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  
 	<div class="form-group">
 		<button type="submit" class="btn btn-primary">Envoyer</button>
	</div>

</form>


<?php include_once('layouts/footer.php') ?>