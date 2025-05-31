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
  <body class="contact-page-body">
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

    <section class="section4 container">
      <div class="row">
        <h1 class="text-center">Get in Touch</h1>
        <p class="text-center">
          Interested in collaborating or learning more? Drop me a message!
        </p>

        <div class="col-md-6">
          <img src="images/contactme-icon.png" class="img-fluid" />
        </div>

        <div class="col-md-6">
          <form action="contact.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required />
            <br /><br />

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />
            <br /><br />

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <br /><br />

            <button type="submit" class="submit-button">Send a Message</button>
          </form>
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
