<link rel="stylesheet" href="assets/css/login.css">
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
<div class="login-page">
  <button class="button1" type="button" name="button1"><a href="cliente.php">Regresar</a></button>
  <div class="form">
    <form action="acceso.php" method="post" class="login-form">
      <h4>Inicie sesión como administrador</h4><br>
      <img src="img/admin.png" width="150px" align="center" alt="">
      <input required name="user" type="text" placeholder="Usuario"/>
      <input required name="pass" type="password" placeholder="Contraseña"/>
      <button>login</button>

    </form>
  </div>
  <?php
      if(isset($_GET['errorinicio'])){
  ?>
  <script>
      alertify.error('¡Las credenciales son incorrectas!');
  </script>
  <?php
      }
  ?>
  <style>
  a{
    color: black;
    text-decoration: none;
  }
  .button1 {

      background-color: #88CAB2;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  }
</div>
