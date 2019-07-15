<?php 
 include '../../includes/dbh-inic.php';
 $id=$_POST['id'];
 header("Content-type: application/json; charset=UTF-8");
 
        $select = "SELECT * FROM hotels as h LEFT JOIN services as s on h.id=s.hotel_id where h.user_id = '$id' LIMIT 1";
 
      $res = $pdo->prepare($select);
      $res->execute();
       $result= $res->fetchAll(PDO::FETCH_ASSOC);
      $myJson = json_encode($result);

      echo "{\"data\":". $myJson."}";



?>