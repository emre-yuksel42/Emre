  <head>
    <?php include_once('layouts/head.php') ?>

  </head>
  <body>
    <header>
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="images/eye.png" alt="Logo" width="50">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

          <li class="nav-item active">
            <a class="nav-link" href="./">Acceuil</a>
          </li>
            <?php if(empty($_SESSION['user'])){
            ?>
          <li class="nav-item">
            <a class="nav-link" href="register.php">S'inscrire</a>
          </li> 
            
            
          <li class="nav-item">
            <a class="nav-link" href="login.php">Se connecter</a>
          </li> 
          <?php } else{ ?>  

            
          <li class="nav-item">
            <a class="nav-link" href="profile.php">Mon profil</a>
          </li> 
            

          <li class="nav-item">
            <a class="nav-link" href="logout.php">Se deconnecter</a>
          </li> 
            <?php } ?>


        </ul>
      </div>
    </nav>
    </header>
    <main id="content" class="mt-4">

