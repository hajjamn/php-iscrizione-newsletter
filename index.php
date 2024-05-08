<?php

require_once __DIR__ . '/utilities.php';

$userEmail = $_POST['userEmail'] ?? '';
$isEmailValidated = null;

if ($userEmail != '') {
  $isEmailValidated = emailControl($userEmail);
}
;


?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Newsletter</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php
  include __DIR__ . '/partials/header.php';
  ?>
  <main>
    <section>
      <div class="container">
        <?php
        if (($isEmailValidated) && ($isEmailValidated === true)):
          ?>
          <div class="alert alert-success text-center" role="alert">
            Controllo superato
          </div>
          <?php
        endif
        ?>
        <?php
        if ($isEmailValidated === false):
          ?>
          <div class="alert alert-danger text-center" role="alert">
            Controllo fallito
          </div>
          <?php
        endif
        ?>
      </div>
    </section>
    <section>
      <div class="container mt-5">
        <div class="card w-50 m-auto text-center">
          <div class="card-header">
            <h2>Iscriviti alla Newsletter</h2>
          </div>
          <div class="card-body">
            <form action="" method="POST">
              <label for="user-email-input">Indirizzo Email</label>
              <input type="email" placeholder="nome@esempio.it" id="user-email-input" name="userEmail">
              <button type="submit" id="user-email-submit" name="userSubmit">Invia</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php
  include __DIR__ . '/partials/footer.php';
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>