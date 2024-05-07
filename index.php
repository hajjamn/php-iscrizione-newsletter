<?php

$userEmail = $_POST['userEmail'] ?? '';

function emailControl($email)
{
  if
  (
    (str_contains($email, '@') === true) && (str_contains($email, '.') === true)
  ){
    echo 
    '
      <div class="alert alert-success text-center" role="alert">
       Controllo superato
      </div>
    ';
  }
  else
  {
    echo 
    '
      <div class="alert alert-danger text-center" role="alert">
       Controllo fallito
      </div>
    ';
  }
};

if ($userEmail != '') {
  emailControl($userEmail);
};

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <main>
    <section>
      <div class="container mt-5">
        <div class="card w-50 m-auto">
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

var_dump($userEmail);
echo '<br><br>';

?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>