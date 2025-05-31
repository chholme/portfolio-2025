<?php session_start(); ?>
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
    <!-- Section 3: Portfolio Gallery -->
    <section class="section3 container-fluid">
      <h1 class="text-center">Games</h1>
      <div class="row">
        <!-- Game Item 1 -->
        <div class="col-md-4">
          <div class="card">
            <a href="games/wordle/index.php">
              <img
                src="images/project4-wordle.png"
                alt="Project 4"
                class="img-fluid"
              />
            </a>
            <div class="card-body">
              <h5 class="card-title">Wordle</h5>
              <p class="card-text">Description about Project 4.</p>
            </div>
          </div>
        </div>
        <!-- Game Item 2 -->
        <div class="col-md-4">
          <div class="card">
            <a href="games/bingo/index.php">
              <img
                src="images/project5-bingo.png"
                alt="Project 5"
                class="img-fluid"
              />
            </a>
            <div class="card-body">
              <h5 class="card-title">Bingo</h5>
              <p class="card-text">Description about Project 5.</p>
            </div>
          </div>
        </div>
        <!-- Game Item 3 -->
        <div class="col-md-4">
          <div class="card">
            <a href="games/number-guess/index.php">
              <img
                src="images/project6-numberguess1.png"
                alt="Project 6"
                class="img-fluid"
              />
            </a>
            <div class="card-body">
              <h5 class="card-title">Number Guessing Game</h5>
              <p class="card-text">Description about Project 6.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer></footer>

    <!-- Bootstrap JS (CDN) and its dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  </body>
</html>
