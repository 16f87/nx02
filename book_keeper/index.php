<!DOCTYPE html>
<html>
<title>Fruit Shop Data</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href=css/w3.css>
<body>

<div class="w3-container">
  <h2>Libros </h2>
  <p>Mi biblioteca</p>
  <table class="w3-table-all w3-card">
          <tr>
      <th></th>
      <th>Titulo</th>
      <th>Autor</th>
      <th>Lector</th>
      <th>L</th>
    </tr>
<?php

include_once 'php/data_class.php';
include_once 'php/source/conexion.php';
$iconos_data_array = DATA_CLASS::GET_ALL_ICONOS(Conexion::getInstancia());

if (count($iconos_data_array) > 0) {
    foreach ($iconos_data_array as $item) {
       
                $icono_id = $item['id'];
        $icono_nombre = $item['nombre'];
        $icono_valor = $item['valor'];
        $icono_ticket = $item['tickets'];


  echo '<tr>
    <td><img src="assets/images/iconos/icono'.$icono_id.'.png"   alt="icono0"></td>
      <td>'.$icono_nombre.'</td>
      <td>'.$icono_valor.'</td>
      <td>'.$icono_ticket.'</td>
    </tr>';
        
    }
} else {
        
echo "howrwerwerla";
    return "e-1";
}
Conexion::cerrar();
?>

  </table>

  


</div>

</body>
</html>
