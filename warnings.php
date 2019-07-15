<?php
  
$popup = '';
if (isset($_GET["info"])){
    $popup = $_GET["info"];
if ($popup=="register"){
    
 echo   "<script>
        $(window).load(function(){        
        $('#modreg').modal('show');
        }); 
        </script>";
    $popup = "";
}
if ($popup=="registrationerror"){
 echo   "<script>
        $(window).load(function(){        
        $('#modregerr').modal('show');
        }); 
        </script>";
    $popup = "";
}
if ($popup=="exists"){
 echo   "<script>
        $(window).load(function(){        
        $('#modregerrr').modal('show');
        }); 
        </script>";
    $popup = "";
}
if ($popup=="wrongpassword"){
 echo   "<script>
        $(window).load(function(){        
        $('#loginform').modal('show');
        }); 
        </script>";
    $popup = "";
}
if ($popup=="wronglogin"){
 echo   "<script>
        $(window).load(function(){        
        $('#loginform').modal('show');
        }); 
        </script>";
    $popup = "";
}
    if ($popup=="forbidden"){
 echo   "<script>
        $(window).load(function(){        
        $('#loginform').modal('show');
        }); 
        </script>";
        $popup = "";
 }

 if ($popup=="socials"){
    echo   "<script>
           $(window).load(function(){        
           $('#socials').modal('show');
           }); 
           </script>";
           $popup = "";
    }
}
?>