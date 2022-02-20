<link rel="stylesheet" href="css/login.css">
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="login-page">
  <div class="form">
    <form action="Administracion/acceso.php" method="post" class="login-form">
      <h4>Inicie sesión como administrador</h4><br>
      <img src="img/adm.png" width="150px" align="center" alt=""><br><br>
      <input required name="user" type="text" placeholder="Usuario"/>
      <input required name="pass" type="password" placeholder="Contraseña"/>
      <button>login</button>
      <div class="row py-3">
        <a href="Administracion/cliente.php"  class="btn btn-danger">Regresar a vista cliente</a>
      </div>

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
</div>
