	</main>
	<footer id="footer">
	<div class="container">
	<p>Les Traqueurs Nantais | <?php echo date("Y") ?></p>

	<div class="alert alert-secondary">
	<?php echo (isset($_SESSION['user']) ? 
	"Vous êtes connecté en tant que ". $_SESSION['user']->username : 
	"vous n'êtes pas connecté"); ?>
	</div>
	</div>

	</footer>
	</body>
	</html>
