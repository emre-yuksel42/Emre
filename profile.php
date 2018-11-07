
<?php session_start(); ?>
<?php include_once('layouts/header.php') ?>
<main>
    	<div class="container">
		      <h2>Mon Profil</h2>
		     
		   		<h3>Pseudo</h3>
		   		<?php echo($_SESSION['user']->username); ?>
		   		
		   		<h3>Email</h3>
		   		<?php echo($_SESSION['user']->email); ?>

		   		<h3>Evenements publiés</h3>
		   		
		  </div>
    </main>


<!-- Trouver qui est co et afficher Pseudo + email + evenements postés -->

<?php include_once('layouts/footer.php') ?>