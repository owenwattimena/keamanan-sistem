<?php

class Functions
{
  public function alert($pesan, $tipe)
  {
    $alert = "<div class='alert {$tipe} alert-dismissible fade show' role='alert'>
        {$pesan}
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
        </div>";
    return $alert;
  }

  public function logged()
  {
    if (isset($_SESSION['logged']) and $_SESSION['logged'] == true) {
      header('location:../sistem/index.php');
    }
  }
  public function not_logged()
  {
    session_start();
    if (!isset($_SESSION['logged']) or $_SESSION['logged'] != true) {
      header('location:../autentikasi/logout.php');
    }
  }
}
