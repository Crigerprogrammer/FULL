
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">GRUPO #6</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">INICIO</a>
        </li>
      </ul>

      <ul class="navbar-nav  ml-auto">
      <?php if ($userController->isUserLoggedIn()): ?>
        <li class="nav-item active">
          <a class="nav-link" href="panel-secondfactor.php">Segundo factor<span class="sr-only"></span></a>
        </li> 
      <li class="nav-item">
      <a class="nav-link" href="panel.php"><?= $_SESSION['email'] ?> <span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="api/logout.php">Cerrar sesion<span class="sr-only"></span></a>
        </li>   
        <?php else: ?>
   
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Iniciar Sesion</a>
        </li>
        <?php endif; ?>   
      </ul>
    </div>
  </div>
</nav>
