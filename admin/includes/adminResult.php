<?php 
 include '../../includes/dbh-inic.php';
 //$type = $_POST['type'];
 header("Content-type: application/json; charset=UTF-8");
   //if($type == '2'){
      $select = "SELECT u.*, h.hotel_name FROM  users as u left join hotels as h on u.id = h.user_id where  (u.type=2 or u.type=3) and h.id is not null ";
      $res = $pdo->prepare($select);
      $res->execute();
       $result= $res->fetchAll(PDO::FETCH_ASSOC);
      $myJson = json_encode($result);

      echo "{\"data\":". $myJson."}";
   //}



?>