<?php

function emailControl($email)
{
  if
  (
    (str_contains($email, '@') === true) && (str_contains($email, '.') === true)
  ) {
    return true;
  } else {
    return false;
  }
}
;

?>