<!DOCTYPE html>
<html>

<head>
  <title>W3.CSS Template</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Roboto", sans-serif
    }
  </style>
</head>

<body class="w3-light-grey">

  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">

    <!-- The Grid -->
    <div class="w3-row-padding">

      <!-- Left Column -->
      <div class="w3-third">

        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="assets/images/logo.png" style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Designer</p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>London, UK</p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>ex@mail.com</p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>1224435534</p>
            <hr>

            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
            <p>Adobe Photoshop</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
            </div>
            <p>Photography</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
                <div class="w3-center w3-text-white">80%</div>
              </div>
            </div>
            <p>Illustrator</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
            </div>
            <p>Media</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
            </div>
            <br>

            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
            <p>English</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
            </div>
            <p>Spanish</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
            </div>
            <p>German</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
            </div>
            <br>
          </div>
        </div><br>

        <!-- End Left Column -->
      </div>

      <!-- Right Column -->
      <div class="w3-twothird">

        <!------------------------ Modulo MIS LIBROS --------------------------->

        <div class="w3-container w3-card w3-white w3-margin-bottom">

          <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Mis libros</h2>

          <div class="w3-container">
            <!-- Navbar -->
            <div class="w3-bar">
              <a class="w3-margin-top w3-bar-item w3-hide-small">Buscar por</a>
              <div class="w3-dropdown-hover w3-hide-small">
                <button class="w3-margin-top w3-button" title="More">Titulo <i class="fa fa-caret-down"></i></button>
                <div class="w3-dropdown-content w3-bar-block w3-card-4">
                  <a href="#" class="w3-bar-item w3-button">Titulo</a>
                  <a href="#" class="w3-bar-item w3-button">Autor</a>
                  <a href="#" class="w3-bar-item w3-button">Genero</a>
                </div>
              </div>

              <input class="w3-input w3-border w3-round-large w3-bar-item w3-margin-top w3-margin-bottom" type="text">
              <a href="javascript:void(0)" class=" w3-bar-item w3-padding-large w3-hover-red w3-margin-top w3-margin-bottom"><i class="fa fa-search"></i></a>
              <button onclick="document.getElementById('id01').style.display='block'" class="w3-margin-top w3-round-large w3-button w3-right w3-bar-item">Nuevo libro</button>

            </div>
            <!-- END Navbar -->
            <table class="w3-table-all w3-card">
              <tr>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Lector</th>
                <th>Estado</th>
              </tr>
              <?php
              include_once 'php/books_data_class.php';
              include_once 'php/source/conexion.php';

              $books_data_array = BOOKS_DATA_CLASS::GET_ALL_BOOKS(Conexion::getinstance());

              if (count($books_data_array) > 0) {
                foreach ($books_data_array as $item) {


                  $titulo = $item['titulo'];
                  $autor = $item['autor'];
                  $lector = $item['lector'];
                  $borrowed_date = $item['borrowed_date'];
                  //<td><img src="assets/images/books/icono'.$icono_id.'.png"   alt="icono0"></td>
                  echo '<tr>
                  <td>' . $titulo . '</td>
                  <td>' . $autor . '</td>
                  <td>' . $borrowed_date . '</td>
                  <td></td>
                </tr>';
                }
              } else {

                echo "No hay datos para mostrar";
                return "e-1";
              }
              Conexion::closeDbConection();
              ?>

            </table>
            <hr>
          </div>

          <!--------------------------------------------------->
        </div>
        <!---------------------------------------- END Modulo MIS LIBROS ------------------------------------------------------------->
        <!---------------------------------------- Modulo PRESTAR LIBRO  ------------------------------------------------------------->
        <div class="w3-container w3-card w3-white">

          <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Prestar libro</h2>

          <table class="w3-table-all w3-card">
            <tr>
              <th>Amigo</th>
              <th>Titulo</th>
              <th>Tiempo</th>
              <th>Alertas</th>
            </tr>
            <?php
            include_once 'php/books_data_class.php';
            include_once 'php/source/conexion.php';

            $books_data_array = BOOKS_DATA_CLASS::GET_ALL_BOOKS(Conexion::getinstance());

            if (count($books_data_array) > 0) {
              foreach ($books_data_array as $item) {


                $titulo = $item['titulo'];
                $autor = $item['autor'];
                $lector = $item['lector'];
                $borrowed_date = $item['borrowed_date'];

                echo '<tr>
                  <td>' . $titulo . '</td>
                  <td>' . $autor . '</td>
                  <td>' . $borrowed_date . '</td>
                  <td></td>
                </tr>';
              }
            } else {

              echo "No hay datos para mostrar";
              return "e-1";
            }
            Conexion::closeDbConection();
            ?>

          </table>
          <hr>


          <div class="w3-container">
            <h5 class="w3-opacity"><b>W3Schools.com</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
            <p>Web Development! All I need to know in one place</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>London Business School</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
            <p>Master Degree</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>School of Coding</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
            <p>Bachelor Degree</p><br>
          </div>


        </div>
        <!---------------------------------------- END PRESTAR LIBRO  ------------------------------------------------------------->
        <!-- End Right Column -->
      </div>

      <!-- End Grid -->
    </div>

    <!-- End Page Container -->
  </div>

  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </footer>






 <!---------------------------------------- MODAL FORM  ------------------------------------------------------------->
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Nuevo libro</h2>
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section">
          <label><b>Titulo</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text"  required>
          <label><b>Autor</b></label>
          <input class="w3-input w3-border " type="text" required>
          <button class="w3-button w3-block w3-section w3-padding" type="submit">Guardar</button>
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
footer
    </div>

    </div>
  </div>

<!---------------------------------------- MODAL FORM  ------------------------------------------------------------->



</body>

</html>