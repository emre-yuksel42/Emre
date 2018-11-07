<?php
session_start();
$title = 'Acceuil';
$description = '' ;
 ?>

<?php include_once('layouts/header.php') ?>
    
	<div class="container">
	    <?php include_once('php/getevents.php') ?>
	    
	    <?php foreach($events as $event){ ?>
	    	<div>
	    		<p><?php echo $event->name; ?></p>

	    	</div>
	    <?php }
	    ?>
	</div>

<?php include_once('layouts/footer.php') ?>