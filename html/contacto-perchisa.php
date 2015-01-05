<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Contacto PERCHISA - Expertos en perforación de pozos profundos en Chihuahua</title>

    <meta  name="description" content="Somos una empresa con más de 60 años de experiencia en el mercado, líderes en el ramo en perforación de pozos de extracción de agua y perforación para minería.">
    <meta  name="keywords" content="perforación de pozos, extracción de agua, pozos, perforación de circulación inversa, perforación de circulación inversa inundada, perforación con circulación normal con martillo neumático, perforación convencional">


    <?php include('modules/head.php'); ?>

  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <?php include('modules/menu.php'); ?>
   <!-- Carousel
    ================================================== -->

    <div class="jumbotron-2">
      <div class="row">
        <div class="banner">
          <img src="img/banner/contacto.jpg" class="img-responsive" alt="">
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="icon-b"><img src="img/icon-b.png" class="img-responsive" alt=""></div>
              <span style="text-align:center;"><h2><strong>CONTACTO</strong></h2></span>
              <hr>
              <div class="col-lg-4">
                <h2>Datos</h2>
                <p>
                  Teléfono: <br>
                +52 (614) 436 1059<br><br>

                Email: <br>
                ventas@perchisa.com <br><br>

                Dirección: <br>
                Carretera Aldama Kilómetro 5<br>
                Colonia Concordia CP 31380<br>
                Chihuahua, México.</p> <br>
                
                <p>Contactos: <br> 
                <table class="table">
                    <tr>
                      <td>Gerente General</td>
                      <td>oromero@perchisa.com</td>
                    </tr>
                    <tr>
                      <td>Gerente de Ventas</td>
                      <td>jgomez@perchisa.com</td>
                    </tr>
                    <tr>
                      <td>Jefe de R.H.</td>
                      <td>cganem@perchisa.com</td>
                    </tr>
                    <tr>
                      <td>Compras</td>
                      <td>ereyes@perchisa.com</td>
                    </tr>
                  </table>
                  </p>
              </div>
              <div class="col-lg-8">
              <form class="form-horizontal" role="form" action="enviar.php">
                <div class="form-group">
                  <label for="inputEmail1" class="col-lg-2 control-label">Nombre</label>
                  <div class="col-lg-10">
                    <input name="name" type="" class="form-control" id="inputEmail1" placeholder="Nombre">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword1" class="col-lg-2 control-label">Email</label>
                  <div class="col-lg-10">
                    <input name="email" type="" class="form-control" id="inputPassword1" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword1" class="col-lg-2 control-label">Teléfono</label>
                  <div class="col-lg-10">
                    <input name="phone" type="" class="form-control" id="inputPassword1" placeholder="Teléfono">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword1" class="col-lg-2 control-label">Servicios</label>
                  <div class="col-lg-10">
                    <select name="service" id="service" name="service" class="form-control">
                      <option selected >Seleccionar una opción</option>
                      <option value="Dudas">Dudas</option>
                      <option value="Ventas">Ventas</option>
                      <option value="Maquinaria en Venta">Venta de Maquinaría</option>
                      <option value="Otros">Otros</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword1" class="col-lg-2 control-label">Mensaje</label>
                  <div class="col-lg-10">
                    <textarea name="message" type="" class="form-control" rows="10" id="inputPassword1" placeholder=""></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-default">Enviar</button>
                  </div>
                </div>
              </form>
              </div>
            </div>
          </div>
      </div>
      <hr>
    </div>


      <!-- FOOTER -->
      <?php include('modules/footer.php'); ?>
  </body>
</html>
