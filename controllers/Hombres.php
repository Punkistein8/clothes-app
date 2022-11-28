
  <?php
  require_once 'database/database-connection.php';
  function fetchBDHombres()
  {
    try {
      $connection = connection();
      $sqlQuery = "SELECT * from `prenda-hombre`"; // Consulta SQL
      $statement = $connection->prepare($sqlQuery); // Preparar la consulta
      $statement->execute(); // Ejecutar la consulta
      $result = $statement->fetchAll(PDO::FETCH_ASSOC); // Obtener los resultados de la consulta
      return $result;
    } catch (PDOException $e) {
      echo "No se pudo obtener los datos -> " . $e;
    }
  }
  ?>