<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require 'db.php';

// Make sure user is logged in
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit;
}

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_account'])) {
    // Delete user record from database
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    $stmt->execute([$user_id]);

    // Log user out after deletion
    session_destroy();

    // Redirect to home 
    header("Location: About.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap CSS (CDN) -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/bf37eaf948.js"
      crossorigin="anonymous"
    ></script>
    <title>Charity's Website</title>
  </head>
  <body class="game-page-body">
    <div class="background-layer">
      <img
        src="images/yellowflower-bg.png"
        class="sticker sticker1"
        alt="Sticker 1"
      />
      <img
        src="images/purpleflower-bg.png"
        class="sticker sticker2"
        alt="Sticker 2"
      />
      <img
        src="images/pinkflower-bg.png"
        class="sticker sticker3"
        alt="Sticker 3"
      />
      <img
        src="images/pinkflower-bg.png"
        class="sticker sticker4"
        alt="Sticker 4"
      />
      <!-- Add more stickers as needed -->
    </div>

    <header>
      <?php include 'navbar.php'; ?>
    </header>

    <h1>Account Settings</h1>

    <h1>Welcome, <?= htmlspecialchars($_SESSION["username"]) ?>!</h1>

    <form method="POST" onsubmit="return confirm('Are you sure you want to delete your account? This action is irreversible.');">
    <button type="submit" name="delete_account">Delete My Account</button>
  </form>

     <footer></footer>

    <!-- Bootstrap JS (CDN) and its dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  </body>
</html>

