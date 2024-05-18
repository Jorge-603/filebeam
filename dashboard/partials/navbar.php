<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand font-weight-bold" href=".">
    FileBeam Dashboard
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="d-flex justify-content-between w-100">
        <ul class="navbar-nav">
          <?php if (isset($_SESSION["user"])): ?>
            <li class="nav-item">
              <a class="nav-link" href="logs.php">Logs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cron.php">Cron Job</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Cerrar sesión</a>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          <?php endif ?>
        </ul>
        <?php if (isset($_SESSION["user"])): ?>
          <div class="p-2">
            <?= $_SESSION["user"]["username"] ?>
          </div>
        <?php endif ?>
      </div>
    </div>
  </div>
</nav>