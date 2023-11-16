<?php
    
    function sendData($name, $email, $company, $phone, $message) {
      
      include 'dbConnection.php';

      try {
          $pdoStatement = $conn->prepare('
          INSERT INTO enquiries (name, email, company, phone, message)
          VALUES (:name, :email, :company, :phone, :message)
          ');
  
          $pdoStatement->bindValue(':name', $name, PDO::PARAM_STR);
          $pdoStatement->bindValue(':email', $email, PDO::PARAM_STR);
          $pdoStatement->bindValue(':company', $company , PDO::PARAM_STR);
          $pdoStatement->bindValue(':phone', $phone, PDO::PARAM_STR);
          $pdoStatement->bindValue(':message', $message, PDO::PARAM_STR);

          $pdoStatement->execute();
          return true;
      } catch (Exception $e) {
          echo "Database query failed no data sent: " . $e->getMessage();
          exit;
      }
    }

?>