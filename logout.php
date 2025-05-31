<?php
session_start();
session_destroy();
header("Location: login.php");
exit;
?>
<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->execute([$email]);
  $user = $stmt->fetch();

  if ($user && password_verify($password, $user['password'])) {
    $_SESSION["user_id"] = $user["id"];
    $_SESSION["username"] = $user["username"];
    header("Location: dashboard.php");
    exit;
  } else {
    echo "Invalid email or password.";
  }
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
  <body>
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
      <!-- Add more stickers as needed -->
    </div>

    <header>
      <?php include 'navbar.php'; ?>
    </header>

    <section class="login-section container">
        <h1 class="text-center">You Have Been Signed Out</h1>
        <h3 class="text-center">
          Come back soon!
        </h3>
    </section>

    <!-- Bootstrap JS (CDN) and its dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  </body>
</html>
