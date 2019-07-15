<?php
include ('header.php');
include ('includes/dbh-inic.php');
    $stmt = $pdo->prepare("SELECT * FROM messages where id_receiver = :userid;");
    $stmt->bindParam (":userid", $_SESSION["id"], PDO::PARAM_STR);
    $stmt->execute();

    $result = $stmt->FetchAll(\PDO::FETCH_ASSOC);
?>
<a href="petsitterdashboard.php"><button class="btn btn-primary">Go back</button></a>
<table class="table table-striped">
<tbody>   
<?php
foreach ($result as $row) { 
?>                                   
							 <tr>
								    <td><?php                                          
                                         if ($row["id_transmitter"]!=="0"){
                                         $stmt = $pdo->prepare("SELECT username from users where id = :id;");
                                         $stmt->bindParam (":id", $row["id_transmitter"], PDO::PARAM_STR);
                                         $stmt->execute();
                                         $result2 = $stmt->FetchAll(\PDO::FETCH_ASSOC);
                                         echo $result2[0]["username"];
                                         }else{
                                         echo "Bookingpetz Admin.";
                                         }?></td>
								    <td><?= $row["message"] ?></td>
								    <td><p>Eye-close icon: <span class="glyphicon glyphicon-eye-close"></span></p></td>
                                     </tr>
<?php
}
?>   
        </tbody>
        </table>