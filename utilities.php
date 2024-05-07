<?php

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

?>