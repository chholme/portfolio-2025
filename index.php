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

    <!-- Section 1 -->
    <section class="section1 container text-center">
      <div class="row">
        <div class="col">
          <h1>Hi, I'm Charity Holmes a Web Developer & Designer</h1>
          <p>
            I create modern user-centered websites with seamless functionality
          </p>
          <a class="btn button" href="portfolio.html">View My Work</a>
        </div>
      </div>
    </section>

    <!-- Section 2 -->
    <section class="section2 container">
      <div class="row align-items-center">
        <div class="col-md-6 text-center">
          <img
            src="images/IMG_9582.jpg"
            class="img-fluid rounded-circle"
            alt="Charity"
          />
        </div>
        <div class="col-md-6">
          <div class="section2-aboutme">
            <p>
              I hold a degree in Informatics with a focus in web development and
              human centered computing
            </p>
            <a class="btn button" href="https://www.linkedin.com/in/charityholmes/"
              >LinkedIn</a
            >
          </div>
        </div>
      </div>
    </section>

    <!-- Section 3: Portfolio Gallery -->
    <section class="section3 container-fluid">
      <h1 class="text-center">Portfolio Highlights</h1>
      <div class="row">
        <!-- Gallery Item 1 -->
        <div class="col-md-4">
          <div class="card">
            <a href="https://zion.luddy.indiana.edu/info-capstone-2024/waste-warrior">
              <img
                src="images/project1-page1.png"
                alt="Project 1"
                class="img-fluid"
              />
            </a>
            <div class="card-body">
              <h5 class="card-title">Project 1</h5>
              <p class="card-text">Description about Project 1.</p>
            </div>
          </div>
        </div>
        <!-- Gallery Item 2 -->
        <div class="col-md-4">
          <div class="card">
            <a href="https://chholme.github.io/Charity-Portfolio/">
              <img
                src="images/project2-page1.png"
                alt="Project 2"
                class="img-fluid"
              />
            </a>
            <div class="card-body">
              <h5 class="card-title">Project 2</h5>
              <p class="card-text">Description about Project 2.</p>
            </div>
          </div>
        </div>
        <!-- Gallery Item 3 -->
        <div class="col-md-4">
          <div class="card">
            <a href="https://pages.github.iu.edu/National-Society-of-Black-Engineers-IUB/NSBE-Website-2023-2024/index.html">
              <img
                src="images/project3-nsbe.png"
                alt="Project 3"
                class="img-fluid"
              />
            </a>
            <div class="card-body">
              <h5 class="card-title">Project 3</h5>
              <p class="card-text">Description about Project 3.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

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
