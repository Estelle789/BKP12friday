<?php

//include ('header.php');
if ($_SESSION['type'] == '1'){
    include ('includes/dbh-inic.php');

    if (isset($_SESSION["force"])){
    $force= $_SESSION["force"];
    }else{
    $force= "false";
  }
    try {
    $stmt = $pdo->prepare("select * from pets where user_id = :userid order by id desc;");
    $stmt->bindParam (":userid", $_SESSION["id"], PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->FetchAll(PDO::FETCH_ASSOC);
    if (!(isset($result[0]["name"]))){
    ?>
<!--<div class="alert alert-warning" role="alert" style="width:50%; margin-left:25%; margin-top:10px;">
    You have no pets registered, please insert at least one!
</div>-->
<?php
    }

foreach ($result as $row) { ?>


<div class="row col-md-12 justify-content-center" style="margin-top: 50px;">
  <div class="col-md-5" style="border:2px solid green;">
    <img src="<?php
              if ($row["img"]!==null){
              echo $row["img"];
              }
              if ($row["img"]==null){
                  if ($row["animal"] == "Dog"){
                      echo "/AAbookingpetz/petpics/dogIcon2.png";
                  }
                  if ($row["animal"] == "Cat"){
                      echo "/AAbookingpetz/petpics/catIcon2.png";
                  }
              }
              ?>"
    alt="pic" style="width:150px; margin-top:5px;"><br>
    <div style="margin-left:41px; margin-bottom:5px; margin-top:5px;">
    <?php echo "<b style='color:green'>Name</b>:  " .  htmlspecialchars ($row["name"]) ."<br>" .  "<b style='color:green'>Sex:</b>  " . htmlspecialchars ($row["breed"]) . " (" .  htmlspecialchars ($row["sex"]). ")<br>" . "<b style='color:green'>Description:</b> " .htmlspecialchars ($row["description"]) . "<br>"; ?>
      <div>
        <?php
        if ($row["animal"] == "Dog"){
          ?>
          <form action="update_pet.php" method="post" enctype="multipart/form-data" style="display:inline;">
            <input type="hidden" value="<?php echo $row["id"];?>" name="pet_id">
            <input type="submit" value="Modify dog" name="submit" class="btn btn-success">
          </form>
          <?php
        }
        if ($row["animal"] == "Cat"){
          ?>
          <form action="update_pet.php" method="post" enctype="multipart/form-data" style="display:inline;">
            <input type="hidden" value="<?php echo $row["id"];?>" name="pet_id">
            <input type="submit" value="Modify cat" name="submit" class="btn btn-success" >
          </form>
          <?php
        }?>
        <?php
        if ($row["animal"] == "Dog"){
          ?>
          <form action="delete_dog.php" method="post" enctype="multipart/form-data" style="display:inline;">
            <input type="hidden" value="<?php echo $row["id"];?>" name="pet_id">
            <input type="submit" value="Delete dog" name="submit" class="btn btn-danger">
          </form>
          <?php
      }
      if ($row["animal"] == "Cat"){
          ?>
          <form action="delete_cat.php" method="post" enctype="multipart/form-data" style="display:inline;">
            <input type="hidden" value="<?php echo $row["id"];?>" name="pet_id">
            <input type="submit" value="Delete cat" name="submit" class="btn btn-danger" >
          </form>
          <?php
      }?>
      </div>
    </div>
  </div>
</div>
<?php
}
?>

<!--<div class="col-md-3 clearfix float-right m-2">
<div style="position:absolute;">-->


<?php

$stmt = null;
$conn = null;
   }
    catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

    }

else{
    echo "<script language='javascript'>window.location.href ='/'</script>";
}

?>
