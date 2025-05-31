<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <!-- Bootstrap CSS (CDN) -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
     <link rel="stylesheet" href="../navbar.css" />
    <link rel="stylesheet" href="wordle.css" />
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
    <title>Wordle</title>
  </head>
  <body>
    <?php include '../../navbar.php'; ?>

    <center>
      <h1>Wordle</h1>
      <table>
        <tr>
          <th class="target">X</th>
          <th class="target">X</th>
          <th class="target">X</th>
          <th class="target">X</th>
          <th class="target">X</th>
        </tr>
        <tr>
          <th class="guess">X</th>
          <th class="guess">X</th>
          <th class="guess">X</th>
          <th class="guess">X</th>
          <th class="guess">X</th>
        </tr>
      </table>
      <br />
      <br />
      <table id="topRow">
        <tr>
          <th class="key">Q</th>
          <th class="key">W</th>
          <th class="key">E</th>
          <th class="key">R</th>
          <th class="key">T</th>
          <th class="key">Y</th>
          <th class="key">U</th>
          <th class="key">I</th>
          <th class="key">O</th>
          <th class="key">P</th>
        </tr>
      </table>
      <table id="midRow">
        <tr>
          <th class="key">A</th>
          <th class="key">S</th>
          <th class="key">D</th>
          <th class="key">F</th>
          <th class="key">G</th>
          <th class="key">H</th>
          <th class="key">J</th>
          <th class="key">K</th>
          <th class="key">L</th>
        </tr>
      </table>
      <table id="botRow">
        <tr>
          <th class="key">ENTER</th>
          <th class="key">Z</th>
          <th class="key">X</th>
          <th class="key">C</th>
          <th class="key">V</th>
          <th class="key">B</th>
          <th class="key">N</th>
          <th class="key">M</th>
          <th class="key">&#x232B;</th>
        </tr>
      </table>
      <button id="guessBtn">Guess</button> <button id="resetBtn">Reset</button>
    </center>
    <script src="wordle.js"></script>
    <!-- Bootstrap JS (CDN) and its dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  </body>
</html>