<?php
session_start();
require 'db.php';
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = trim($_POST["username"]);
  $email = trim($_POST["email"]);
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

  // 1. Check if email or username already exists
  $checkStmt = $pdo->prepare("SELECT * FROM users WHERE email = ? OR username = ?");
  $checkStmt->execute([$email, $username]);
  $existingUser = $checkStmt->fetch();

  if ($existingUser) {
    if ($existingUser['email'] === $email) {
      echo "That email is already registered. Please use another.";
    } elseif ($existingUser['username'] === $username) {
      echo "That username is already taken. Try a different one.";
    }
    exit; // Stop script if duplicate
  }

  // 2. Continue with registration if unique
  $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");

  try {
    $stmt->execute([$username, $email, $password]);

    $_SESSION["user_id"] = $pdo->lastInsertId();
    $_SESSION["username"] = $username;

    // Sending welcome email
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8'; 
    try {
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'charitybeholmes@gmail.com';
      $mail->Password = 'uvtaqvdqacbnyvrs';
      $mail->SMTPSecure = 'tls';
      $mail->Port = 587;

      $mail->setFrom('charitybeholmes@gmail.com', 'Charity Holmes');
      $mail->addAddress($email, $username);

      $mail->isHTML(true);
      $mail->Subject = 'Welcome to the Charity Holmes Gaming Site!';
      $mail->Body = "
        <h2>Hi $username!</h2>
        <p>Thanks for signing up at <strong>the Charity Holmes Gaming site</strong>.</p>
        <p>You can now explore games, track your scores, and earn achievements!</p>
        <p><a href='https://charityholmes.com/dashboard.php'>Visit your dashboard</a> to get started!</p>
        <p>– The Charity Holmes Team 🌸</p>
      ";

      $mail->send();
    } catch (Exception $e) {
      error_log("PHPMailer error: {$mail->ErrorInfo}");
    }

    header("Location: dashboard.php");
    exit;

  } catch (PDOException $e) {
    echo "Registration failed. Please try again later.";
    error_log($e->getMessage());
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
        <h1 class="text-center">Registration</h1>
        <h3 class="text-center">
          Hi, it's nice to meet you!
        </h3>
      <div class="d-flex justify-content-center">
        <div class="form-box">
          <form action="register.php" method="POST">
            <label for="username">Username:</label>
            <input class="form-control mb-3" type="username" id="username" name="username" required />
            <br /><br />

            <form action="register.php" method="POST">
            <label for="email">Email:</label>
            <input class="form-control mb-3" type="email" id="email" name="email" required />
            <br /><br />

            <label for="password">Password:</label>
            <input class="form-control mb-4" type="password" id="password" name="password" required />
            <br /><br />

            <button type="submit" class="submit-button">Register</button>
          </form>
        </div>
      </div>
    </section>

    <!-- Bootstrap JS (CDN) and its dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  </body>
</html>

