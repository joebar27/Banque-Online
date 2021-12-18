  <!-- #################################################### NAV ##################################################################### -->

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="statistique.php">Statistiques</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Opérations
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="createCB.php">Création de CB</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Vos CB</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">F.A.Q</a></li>
            </ul>
          </li>
        </ul>
        
        <?php 
        if (isset($_SESSION['user_id'])){
          echo '<a class="btn btn-outline-danger me-2" name="logout" href="logout.php" method="post">Déconnection</a>';
        }else {
          echo '<a class="btn btn-outline-success me-2" name="login" href="login.php" method="post">Connection</a>';
        }
        ?>
        <!-- <form class="d-flex mb-0">
          <input class="form-control me-2" type="search" placeholder="Votre recherche" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Recherche</button>
        </form> -->
      </div>
    </div>
  </nav>

  <!-- ################################################### MAIN ##################################################################### -->

  <main class="container-fluid flex-wrap justify-content-center p-0">