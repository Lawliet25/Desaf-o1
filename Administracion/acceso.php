<?php
if(!empty($_POST['user'])&&!empty($_POST['pass'])){
  $user= $_POST['user'];
  $pass= $_POST['pass'];
  if ($user=="admin" && $pass=="12345") {
    header ("Location:vadmin.php?bueninicio=1");
  }
  else {
    header('Location:index.php?errorinicio=1');
  }
}
 ?>
