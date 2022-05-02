<!DOCTYPE html>
<html>
<title>NX 02</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href=css/w3.css>

<body>

  <div class="w3-container">
    <h2>Libros </h2>
    <p>Mi biblioteca</p>
    <table class="w3-table-all w3-card">
      <tr>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Lector</th>
        <th>Borrowed Date</th>
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
    </tr>';
        }
      } else {

        echo "howrwerwerla";
        return "e-1";
      }
      Conexion::closeDbConection();
      ?>

    </table>


  </div>

</body>

</html>