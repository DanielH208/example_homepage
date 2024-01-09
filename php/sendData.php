<?php
    
    function sendData($name, $email, $company, $phone, $message, $marketing) {
      
      include 'dbConnection.php';

      try {
          $pdoStatement = $conn->prepare('
          INSERT INTO enquiries (name, email, company, phone, message, marketing)
          VALUES (:name, :email, :company, :phone, :message, :marketing)
          ');
  
          $pdoStatement->bindValue(':name', $name, PDO::PARAM_STR);
          $pdoStatement->bindValue(':email', $email, PDO::PARAM_STR);
          $pdoStatement->bindValue(':company', $company , PDO::PARAM_STR);
          $pdoStatement->bindValue(':phone', $phone, PDO::PARAM_STR_CHAR);
          $pdoStatement->bindValue(':message', $message, PDO::PARAM_STR);
          $pdoStatement->bindValue(':marketing', $marketing, PDO::PARAM_STR);

          $pdoStatement->execute();
          return true;
      } catch (Exception $e) {
          echo "Database query failed no data sent: " . $e->getMessage();
          exit;
      }
    }

?>