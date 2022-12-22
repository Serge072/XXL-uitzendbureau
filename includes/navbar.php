<!-- Navbar -->
<nav class="navbar navbar-expand-sm bg-light">
  <nav class="navbar navbar-expand-lg navbar-light bg-light"></a>
    <a class="navbar-brand" href="#"></a>
    <a href="index.php"><i class="fas fa-camera fa-7x"></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <!-- link to homepage -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Startpagina<span class="sr-only"></span></a>
        </li>
        <!-- Link to "prikbord" -->
        <li class="nav-item active">
          <a class="nav-link" href="bulletin.php">Prikbord<span class="sr-only"></span></a>
        </li>
        <!-- Link to "Vacatures" -->
        <li class="nav-item">
          <a class="nav-link" href="createvacture.php">Nieuw vacature maken</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- if logged in show profile / logout -->
  <?php if (isset($_SESSION["username"])): ?>
  <li class="navbar-nav ms-auto">
    <a class="nav-link" href="profiel.php">Profiel</a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="logout.php">Loguit</a>
  </li>
  <!-- else show login / register -->
  <?php else: ?>
  <li class="navbar-nav ms-auto">
    <a class="nav-link" href="login.php">Login</a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="register.php">Registreren</a>
  </li>
  <?php endif; ?>

</nav>
</div>