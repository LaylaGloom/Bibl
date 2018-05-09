<?php
	$num="01";
	echo $num ;
?>


if($_SESSION['periodo']=='trimestral'){            
            if(isset($_SESSION['Mes'])){
                if($_SESSION['Mes']=='01'){
                    self::conectar();                   
                    $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                    self::conectar();
                    $fila = mysqli_fetch_row($resultado);
                    self::conectar();
                    $resultado2 = self::$con->query("call library.estadisticas('2018', '02');");
                    $fila2 = mysqli_fetch_row($resultado2);
                    self::conectar();                    
                    $resultado3 = self::$con->query("call library.estadisticas('2018', '03');");
                    $fila3 = mysqli_fetch_row($resultado3);
                }
                if($_SESSION['Mes']=='02'){
                    self::conectar();                   
                    $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                    self::conectar();
                    $fila = mysqli_fetch_row($resultado);
                    self::conectar();
                    $resultado2 = self::$con->query("call library.estadisticas('2018', '03');");
                    $fila2 = mysqli_fetch_row($resultado2);
                    self::conectar();                    
                    $resultado3 = self::$con->query("call library.estadisticas('2018', '04');");
                    $fila3 = mysqli_fetch_row($resultado3);
                }
                if($_SESSION['Mes']=='03'){
                    self::conectar();                   
                    $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                    self::conectar();
                    $fila = mysqli_fetch_row($resultado);
                    self::conectar();
                    $resultado2 = self::$con->query("call library.estadisticas('2018', '04');");
                    $fila2 = mysqli_fetch_row($resultado2);
                    self::conectar();                    
                    $resultado3 = self::$con->query("call library.estadisticas('2018', '05');");
                    $fila3 = mysqli_fetch_row($resultado3);
                }
                if($_SESSION['Mes']=='04'){
                    self::conectar();                   
                    $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                    self::conectar();
                    $fila = mysqli_fetch_row($resultado);
                    self::conectar();
                    $resultado2 = self::$con->query("call library.estadisticas('2018', '05');");
                    $fila2 = mysqli_fetch_row($resultado2);
                    self::conectar();                    
                    $resultado3 = self::$con->query("call library.estadisticas('2018', '06');");
                    $fila3 = mysqli_fetch_row($resultado3);
                }
                if($_SESSION['Mes']=='05'){
                    self::conectar();                   
                    $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                    self::conectar();
                    $fila = mysqli_fetch_row($resultado);
                    self::conectar();
                    $resultado2 = self::$con->query("call library.estadisticas('2018', '06');");
                    $fila2 = mysqli_fetch_row($resultado2);
                    self::conectar();                    
                    $resultado3 = self::$con->query("call library.estadisticas('2018', '07');");
                    $fila3 = mysqli_fetch_row($resultado3);
                }
                if($_SESSION['Mes']=='06'){
                    self::conectar();                   
                    $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                    self::conectar();
                    $fila = mysqli_fetch_row($resultado);
                    self::conectar();
                    $resultado2 = self::$con->query("call library.estadisticas('2018', '07');");
                    $fila2 = mysqli_fetch_row($resultado2);
                    self::conectar();                    
                    $resultado3 = self::$con->query("call library.estadisticas('2018', '08');");
                    $fila3 = mysqli_fetch_row($resultado3);
                }
                if($_SESSION['Mes']=='07'){
                    self::conectar();                   
                    $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                    self::conectar();
                    $fila = mysqli_fetch_row($resultado);
                    self::conectar();
                    $resultado2 = self::$con->query("call library.estadisticas('2018', '08');");
                    $fila2 = mysqli_fetch_row($resultado2);
                    self::conectar();                    
                    $resultado3 = self::$con->query("call library.estadisticas('2018', '09');");
                    $fila3 = mysqli_fetch_row($resultado3);
                }
                if($_SESSION['Mes']=='08'){
                    self::conectar();                   
                    $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                    self::conectar();
                    $fila = mysqli_fetch_row($resultado);
                    self::conectar();
                    $resultado2 = self::$con->query("call library.estadisticas('2018', '09');");
                    $fila2 = mysqli_fetch_row($resultado2);
                    self::conectar();                    
                    $resultado3 = self::$con->query("call library.estadisticas('2018', '10');");
                    $fila3 = mysqli_fetch_row($resultado3);
                }
                if($_SESSION['Mes']=='09'){
                    self::conectar();                   
                    $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                    self::conectar();
                    $fila = mysqli_fetch_row($resultado);
                    self::conectar();
                    $resultado2 = self::$con->query("call library.estadisticas('2018', '10');");
                    $fila2 = mysqli_fetch_row($resultado2);
                    self::conectar();                    
                    $resultado3 = self::$con->query("call library.estadisticas('2018', '11');");
                    $fila3 = mysqli_fetch_row($resultado3);
                }
                if($_SESSION['Mes']=='10'){
                    self::conectar();                   
                    $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                    self::conectar();
                    $fila = mysqli_fetch_row($resultado);
                    self::conectar();
                    $resultado2 = self::$con->query("call library.estadisticas('2018', '11');");
                    $fila2 = mysqli_fetch_row($resultado2);
                    self::conectar();                    
                    $resultado3 = self::$con->query("call library.estadisticas('2018', '12');");
                    $fila3 = mysqli_fetch_row($resultado3);
                }
                if($_SESSION['Mes']=='11'){
                    self::conectar();                   
                    $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                    self::conectar();
                    $fila = mysqli_fetch_row($resultado);
                    self::conectar();
                    $resultado2 = self::$con->query("call library.estadisticas('2018', '12');");
                    $fila2 = mysqli_fetch_row($resultado2);
                    self::conectar();                    
                    $resultado3 = self::$con->query("call library.estadisticas('2019', '01');");
                    $fila3 = mysqli_fetch_row($resultado3);
                }
                if($_SESSION['Mes']=='12'){
                    self::conectar();                   
                    $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                    self::conectar();
                    $fila = mysqli_fetch_row($resultado);
                    self::conectar();
                    $resultado2 = self::$con->query("call library.estadisticas('2019', '01');");
                    $fila2 = mysqli_fetch_row($resultado2);
                    self::conectar();                    
                    $resultado3 = self::$con->query("call library.estadisticas('2019', '02');");
                    $fila3 = mysqli_fetch_row($resultado3);
                }
                self::$lMedicoCirujano=[$fila[7],$fila2[7],$fila3[7]];
                self::$lTerapiaFisica=[$fila[8],$fila2[8],$fila3[8]];
                self::$iBiomedica=[$fila[0],$fila2[0],$fila3[0]];
                self::$iBiotecnologia=[$fila[1],$fila2[1],$fila3[1]];
                self::$iFinanciera=[$fila[4],$fila2[4],$fila3[4]];
                self::$iMecanicaAutomotriz=[$fila[5],$fila2[5],$fila3[5]];
                self::$iMecatronica=[$fila[6],$fila2[6],$fila3[6]];
                self::$iSoftware=[$fila[2],$fila2[2],$fila3[2]];
                self::$iTelematica=[$fila[3],$fila2[3],$fila3[3]];
                self::$eBiotecnologiaAmbiental=[$fila[14],$fila2[14],$fila3[14]];
                self::$eMecatronica=[$fila[15],$fila2[15],$fila3[15]];
                self::$eSeguridadInformatica=[$fila[16],$fila2[16],$fila3[16]];
                self::$mBiotecnologia=[$fila[9],$fila2[9],$fila3[9]];
                self::$mEnsenanzaCiencias=[$fila[10],$fila2[10],$fila3[10]];
                self::$mMecatronica=[$fila[11],$fila2[11],$fila3[11]];
                self::$mTics=[$fila[12],$fila2[12],$fila3[12]];
                self::$dBiotecnologia=[$fila[13],$fila2[13],$fila3[13]];
                self::$Administrativos=[$fila[17],$fila2[17],$fila3[17]];
            }
        }


        if($_SESSION['periodo']=='cuatrimestral'){
        if(isset($_SESSION['Mes'])){
            if($_SESSION['Mes']=='01'){
                self::conectar();                   
                $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                self::conectar();
                $fila = mysqli_fetch_row($resultado);
                self::conectar();
                $resultado2 = self::$con->query("call library.estadisticas('2018', '02');");
                $fila2 = mysqli_fetch_row($resultado2);
                self::conectar();                    
                $resultado3 = self::$con->query("call library.estadisticas('2018', '03');");
                $fila3 = mysqli_fetch_row($resultado3);
                self::conectar();
                $resultado4 = self::$con->query("call library.estadisticas('2018', '04');");
                $fila4 = mysqli_fetch_row($resultado4);
            }
            if($_SESSION['Mes']=='02'){
                self::conectar();                   
                $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                self::conectar();
                $fila = mysqli_fetch_row($resultado);
                self::conectar();
                $resultado2 = self::$con->query("call library.estadisticas('2018', '03');");
                $fila2 = mysqli_fetch_row($resultado2);
                self::conectar();                    
                $resultado3 = self::$con->query("call library.estadisticas('2018', '04');");
                $fila3 = mysqli_fetch_row($resultado3);
                self::conectar();
                $resultado4 = self::$con->query("call library.estadisticas('2018', '05');");
                $fila4 = mysqli_fetch_row($resultado4);
            }
            if($_SESSION['Mes']=='03'){
                self::conectar();                   
                $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                self::conectar();
                $fila = mysqli_fetch_row($resultado);
                self::conectar();
                $resultado2 = self::$con->query("call library.estadisticas('2018', '04');");
                $fila2 = mysqli_fetch_row($resultado2);
                self::conectar();                    
                $resultado3 = self::$con->query("call library.estadisticas('2018', '05');");
                $fila3 = mysqli_fetch_row($resultado3);
                self::conectar();
                $resultado4 = self::$con->query("call library.estadisticas('2018', '06');");
                $fila4 = mysqli_fetch_row($resultado4);
            }
            if($_SESSION['Mes']=='04'){
                self::conectar();                   
                $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                self::conectar();
                $fila = mysqli_fetch_row($resultado);
                self::conectar();
                $resultado2 = self::$con->query("call library.estadisticas('2018', '05');");
                $fila2 = mysqli_fetch_row($resultado2);
                self::conectar();                    
                $resultado3 = self::$con->query("call library.estadisticas('2018', '06');");
                $fila3 = mysqli_fetch_row($resultado3);
                self::conectar();
                $resultado4 = self::$con->query("call library.estadisticas('2018', '07');");
                $fila4 = mysqli_fetch_row($resultado4);
            }
            if($_SESSION['Mes']=='05'){
                self::conectar();                   
                $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                self::conectar();
                $fila = mysqli_fetch_row($resultado);
                self::conectar();
                $resultado2 = self::$con->query("call library.estadisticas('2018', '06');");
                $fila2 = mysqli_fetch_row($resultado2);
                self::conectar();                    
                $resultado3 = self::$con->query("call library.estadisticas('2018', '07');");
                $fila3 = mysqli_fetch_row($resultado3);
                self::conectar();
                $resultado4 = self::$con->query("call library.estadisticas('2018', '08');");
                $fila4 = mysqli_fetch_row($resultado4);
            }
            if($_SESSION['Mes']=='06'){
                self::conectar();                   
                $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                self::conectar();
                $fila = mysqli_fetch_row($resultado);
                self::conectar();
                $resultado2 = self::$con->query("call library.estadisticas('2018', '07');");
                $fila2 = mysqli_fetch_row($resultado2);
                self::conectar();                    
                $resultado3 = self::$con->query("call library.estadisticas('2018', '08');");
                $fila3 = mysqli_fetch_row($resultado3);
                self::conectar();
                $resultado4 = self::$con->query("call library.estadisticas('2018', '09');");
                $fila4 = mysqli_fetch_row($resultado4);
            }
            if($_SESSION['Mes']=='07'){
                self::conectar();                   
                $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                self::conectar();
                $fila = mysqli_fetch_row($resultado);
                self::conectar();
                $resultado2 = self::$con->query("call library.estadisticas('2018', '08');");
                $fila2 = mysqli_fetch_row($resultado2);
                self::conectar();                    
                $resultado3 = self::$con->query("call library.estadisticas('2018', '09');");
                $fila3 = mysqli_fetch_row($resultado3);
                self::conectar();
                $resultado4 = self::$con->query("call library.estadisticas('2018', '10');");
                $fila4 = mysqli_fetch_row($resultado4);
            }
            if($_SESSION['Mes']=='08'){
                self::conectar();                   
                $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                self::conectar();
                $fila = mysqli_fetch_row($resultado);
                self::conectar();
                $resultado2 = self::$con->query("call library.estadisticas('2018', '09');");
                $fila2 = mysqli_fetch_row($resultado2);
                self::conectar();                    
                $resultado3 = self::$con->query("call library.estadisticas('2018', '10');");
                $fila3 = mysqli_fetch_row($resultado3);
                self::conectar();
                $resultado4 = self::$con->query("call library.estadisticas('2018', '11');");
                $fila4 = mysqli_fetch_row($resultado4);
            }
            if($_SESSION['Mes']=='09'){
                self::conectar();                   
                $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                self::conectar();
                $fila = mysqli_fetch_row($resultado);
                self::conectar();
                $resultado2 = self::$con->query("call library.estadisticas('2018', '10');");
                $fila2 = mysqli_fetch_row($resultado2);
                self::conectar();                    
                $resultado3 = self::$con->query("call library.estadisticas('2018', '11');");
                $fila3 = mysqli_fetch_row($resultado3);
                self::conectar();
                $resultado4 = self::$con->query("call library.estadisticas('2018', '12');");
                $fila4 = mysqli_fetch_row($resultado4);
            }
            if($_SESSION['Mes']=='10'){
                self::conectar();                   
                $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                self::conectar();
                $fila = mysqli_fetch_row($resultado);
                self::conectar();
                $resultado2 = self::$con->query("call library.estadisticas('2018', '11');");
                $fila2 = mysqli_fetch_row($resultado2);
                self::conectar();                    
                $resultado3 = self::$con->query("call library.estadisticas('2018', '12');");
                $fila3 = mysqli_fetch_row($resultado3);
                self::conectar();
                $resultado4 = self::$con->query("call library.estadisticas('2018', '01');");
                $fila4 = mysqli_fetch_row($resultado4);
            }
            if($_SESSION['Mes']=='11'){
                self::conectar();                   
                $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                self::conectar();
                $fila = mysqli_fetch_row($resultado);
                self::conectar();
                $resultado2 = self::$con->query("call library.estadisticas('2018', '12');");
                $fila2 = mysqli_fetch_row($resultado2);
                self::conectar();                    
                $resultado3 = self::$con->query("call library.estadisticas('2019', '01');");
                $fila3 = mysqli_fetch_row($resultado3);
                self::conectar();
                $resultado4 = self::$con->query("call library.estadisticas('2019', '02');");
                $fila4 = mysqli_fetch_row($resultado4);
            }
            if($_SESSION['Mes']=='12'){
                self::conectar();                   
                $resultado = self::$con->query("call library.estadisticas('2018', '".$_SESSION['Mes']."');");
                self::conectar();
                $fila = mysqli_fetch_row($resultado);
                self::conectar();
                $resultado2 = self::$con->query("call library.estadisticas('2019', '01');");
                $fila2 = mysqli_fetch_row($resultado2);
                self::conectar();                    
                $resultado3 = self::$con->query("call library.estadisticas('2019', '02');");
                $fila3 = mysqli_fetch_row($resultado3);
                self::conectar();
                $resultado4 = self::$con->query("call library.estadisticas('2019', '03');");
                $fila4 = mysqli_fetch_row($resultado4);
            }
            self::$lMedicoCirujano=[$fila[7],$fila2[7],$fila3[7],$fila4[7]];
            self::$lTerapiaFisica=[$fila[8],$fila2[8],$fila3[8],$fila4[8]];
            self::$iBiomedica=[$fila[0],$fila2[0],$fila3[0],$fila4[0]];
            self::$iBiotecnologia=[$fila[1],$fila2[1],$fila3[1],$fila4[1]];
            self::$iFinanciera=[$fila[4],$fila2[4],$fila3[4],$fila4[4]];
            self::$iMecanicaAutomotriz=[$fila[5],$fila2[5],$fila3[5],$fila4[5]];
            self::$iMecatronica=[$fila[6],$fila2[6],$fila3[6],$fila4[6]];
            self::$iSoftware=[$fila[2],$fila2[2],$fila3[2],$fila4[2]];
            self::$iTelematica=[$fila[3],$fila2[3],$fila3[3],$fila4[3]];
            self::$eBiotecnologiaAmbiental=[$fila[14],$fila2[14],$fila3[14],$fila4[14]];
            self::$eMecatronica=[$fila[15],$fila2[15],$fila3[15],$fila4[15]];
            self::$eSeguridadInformatica=[$fila[16],$fila2[16],$fila3[16],$fila4[16]];
            self::$mBiotecnologia=[$fila[9],$fila2[9],$fila3[9],$fila4[9]];
            self::$mEnsenanzaCiencias=[$fila[10],$fila2[10],$fila3[10],$fila4[10]];
            self::$mMecatronica=[$fila[11],$fila2[11],$fila3[11],$fila4[11]];
            self::$mTics=[$fila[12],$fila2[12],$fila3[12],$fila4[12]];
            self::$dBiotecnologia=[$fila[13],$fila2[13],$fila3[13],$fila4[13]];
            self::$Administrativos=[$fila[17],$fila2[17],$fila3[17],$fila4[17]];
        }
        }