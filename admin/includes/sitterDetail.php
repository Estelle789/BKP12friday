<?php 
 include '../../includes/dbh-inic.php';
 //$type = $_POST['type'];
 $id=$_POST['id'];
 header("Content-type: application/json; charset=UTF-8");
   //if($type == '2'){
      $select = "SELECT * FROM sitter_pending  where user_id='$id' limit 1 ";
      $res = $pdo->prepare($select);
      $res->execute();
       $result= $res->fetchAll(PDO::FETCH_ASSOC);
      $myJson = json_encode($result);

      echo "{\"data\":". $myJson."}";
   //}



?>