<?php 
session_start();
$_SESSION['User']='Admin';
if (isset($_POST['Anio'])) {
  $_SESSION['Anio']=$_POST['Anio'];
}
if(isset($_POST['reportes'])){
    $Meses="";
    $reportes=$_POST['reportes'];
if($reportes=="anual"){
 $_SESSION['meses'] =["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"]; ;
 
}
if($reportes=="mensual"){
    if(isset($_POST['Mes'])){
        if($_POST['Mes']=="01"){
            $_SESSION['meses']=["Enero"];
           }
           if($_POST['Mes']=="02"){
            $_SESSION['meses']=["Febrero"];
           }
           if($_POST['Mes']=="03"){
            $_SESSION['meses']=["Marzo"];
           }
           if($_POST['Mes']=="04"){
            $_SESSION['meses']=["Abril"];
           }
           if($_POST['Mes']=="05"){
            $_SESSION['meses']=["Mayo"];
           }
           if($_POST['Mes']=="06"){
            $_SESSION['meses']=["Junio"];
           }
           if($_POST['Mes']=="07"){
            $_SESSION['meses']=["Julio"];
           }
           if($_POST['Mes']=="08"){
            $_SESSION['meses']=["Agosto"];
           }
           if($_POST['Mes']=="09"){
            $_SESSION['meses']=["Septiembre"];
           }
           if($_POST['Mes']=="10"){
            $_SESSION['meses']=["Octubre"];
           }
           if($_POST['Mes']=="11"){
            $_SESSION['meses']=["Noviembre"];
           }
           if($_POST['Mes']=="12"){
            $_SESSION['meses']=["Diciembre"];
           }
           $_SESSION['Mes']=$_POST['Mes'];
    }
}
if($reportes=="trimestral"){
   if(isset($_POST['Mes'])){
    if($_POST['Mes']=="01"){
        $_SESSION['meses']=["Enero", "Febrero", "Marzo"];
       }
       if($_POST['Mes']=="02"){
        $_SESSION['meses']=["Febrero", "Marzo", "Abril"];
       }
       if($_POST['Mes']=="03"){
        $_SESSION['meses']=["Marzo", "Abril", "Mayo"];
       }
       if($_POST['Mes']=="04"){
        $_SESSION['meses']=["Abril", "Mayo", "Junio"];
       }
       if($_POST['Mes']=="05"){
        $_SESSION['meses']=["Mayo", "Junio", "Julio"];
       }
       if($_POST['Mes']=="06"){
        $_SESSION['meses']=["Junio", "Julio","Agosto"];
       }
       if($_POST['Mes']=="07"){
        $_SESSION['meses']=["Julio","Agosto","Septiembre"];
       }
       if($_POST['Mes']=="08"){
        $_SESSION['meses']=["Agosto","Septiembre","Octubre"];
       }
       if($_POST['Mes']=="09"){
        $_SESSION['meses']=["Septiembre","Octubre","Noviembre"];
       }
       if($_POST['Mes']=="10"){
        $_SESSION['meses']=["Octubre","Noviembre","Diciembre"];
       }
       if($_POST['Mes']=="11"){
        $_SESSION['meses']=["Noviembre","Diciembre","Enero"];
       }
       if($_POST['Mes']=="12"){
        $_SESSION['meses']=["Diciembre","Enero","Febrero"];
       }
       $_SESSION['Mes']=$_POST['Mes'];
   }
}
if($reportes=="cuatrimestral"){
    if(isset($_POST['Mes'])){
        if($_POST['Mes']=="01"){
         $_SESSION['meses']=["Enero", "Febrero", "Marzo","Abril"];
        }
        if($_POST['Mes']=="02"){
         $_SESSION['meses']=["Febrero", "Marzo", "Abril","Mayo"];
        }
        if($_POST['Mes']=="03"){
         $_SESSION['meses']=["Marzo", "Abril", "Mayo","Junio"];
        }
        if($_POST['Mes']=="04"){
         $_SESSION['meses']=["Abril", "Mayo", "Junio","Julio"];
        }
        if($_POST['Mes']=="05"){
         $_SESSION['meses']=["Mayo", "Junio", "Julio","Agosto"];
        }
        if($_POST['Mes']=="06"){
         $_SESSION['meses']=["Junio", "Julio","Agosto","Septiembre"];
        }
        if($_POST['Mes']=="07"){
         $_SESSION['meses']=["Julio","Agosto","Septiembre","Octubre"];
        }
        if($_POST['Mes']=="08"){
         $_SESSION['meses']=["Agosto","Septiembre","Octubre","Noviembre"];
        }
        if($_POST['Mes']=="09"){
         $_SESSION['meses']=["Septiembre","Octubre","Noviembre","Diciembre"];
        }
        if($_POST['Mes']=="10"){
         $_SESSION['meses']=["Octubre","Noviembre","Diciembre","Enero"];
        }
        if($_POST['Mes']=="11"){
         $_SESSION['meses']=["Noviembre","Diciembre","Enero","Febrero"];
        }
        if($_POST['Mes']=="12"){
         $_SESSION['meses']=["Diciembre","Enero","Febrero", "Marzo"];
        }
        $_SESSION['Mes']=$_POST['Mes'];
    }
}
$_SESSION['periodo']=$reportes;
$jsonArray = array("meses"=>$Meses);
}

?>