<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index.php">
      <i class="logo fa-solid fa-heart fa-2xl"></i>
      <span class="logo-name">Charity Holmes</span>
    </a>

    <!-- Hamburger button for mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible navbar links -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link" href="/index.php">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/portfolio.php">Portfolio</a>
        </li>

        <!-- Dropdown for Games -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="gamesDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Games
          </a>
          <ul class="dropdown-menu" aria-labelledby="gamesDropdown">
            <li><a class="dropdown-item" href="/games.php">All Games</a></li>
            <li><a class="dropdown-item" href="/leaderboard.php">Leaderboard</a></li>

            <?php if (isset($_SESSION['user_id'])): ?>
              <li><a class="dropdown-item" href="/dashboard.php">Dashboard</a></li>
              <li><a class="dropdown-item" href="/account-settings.php">Account Settings</a></li>
              <li><a class="dropdown-item" href="/logout.php">Logout</a></li>
            <?php else: ?>
              <li><a class="dropdown-item" href="/login.php">Login</a></li>
              <li><a class="dropdown-item" href="/register.php">Register</a></li>
            <?php endif; ?>
          </ul>
        </li>

        <!-- Optional Contact Page -->
        <li class="nav-item">
          <a class="nav-link" href="/contact-page.php">Contact</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
