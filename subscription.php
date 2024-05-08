<?php
use LDAP\Result;

session_start();
?>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Subscription</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php
  include __DIR__ . '/partials/header.php';
  ?>


  <div class="container py-5">
    <div class="row">
      <div class="col-12 text-center">
        <div>
          <?php
          if (($_SESSION['result'] === true)):
            ?>
            <div class="alert alert-success text-center" role="alert">
              Controllo superato
            </div>
            <?php
          endif
          ?>
          <?php
          if ($_SESSION['result'] === false):
            ?>
            <div class="alert alert-danger text-center" role="alert">
              Controllo fallito
            </div>
            <?php
          endif
          ?>
        </div>
        <div>
          <a href="index.php"><button class="btn btn-secondary">Torna Indietro</button></a>
        </div>
      </div>
    </div>
  </div>


  <?php
  include __DIR__ . '/partials/footer.php';
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>