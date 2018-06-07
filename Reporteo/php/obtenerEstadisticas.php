<?php
include('conexion2.php');
class  Estadisticas extends Conexion{
    static public $lMedicoCirujano;
    static public $lTerapiaFisica;
    static public $iBiomedica;
    static public $iBiotecnologia;
    static public $iFinanciera;
    static public $iMecanicaAutomotriz;
    static public $iMecatronica;
    static public $iSoftware;
    static public $iTelematica;
    static public $eBiotecnologiaAmbiental;
    static public $eMecatronica;
    static public $eSeguridadInformatica;
    static public $mBiotecnologia;
    static public $mEnsenanzaCiencias;
    static public $mMecatronica;
    static public $mTics;
    static public $dBiotecnologia;
    static public $Administrativos;
    static public $tablas;
    static public $iTelecomunicaciones;
    static public $dCienciasaplicadas;
    static public $Catedraticos;
    static public $Externos;

    static function traerdatos(){
        if(isset($_SESSION['periodo'])){
        if($_SESSION['periodo']=='mensual'){
            self::conectar();
            $resultado = self::$con->query("call library.estadisticas('".$_SESSION['Anio']."', '".$_SESSION['Mes']."');");
            $fila = mysqli_fetch_row($resultado);
            self::$lMedicoCirujano=[$fila[7]];
            self::$lTerapiaFisica=[$fila[8]];
            self::$iBiomedica=[$fila[0]];
            self::$iBiotecnologia=[$fila[1]];
            self::$iFinanciera=[$fila[4]];
            self::$iMecanicaAutomotriz=[$fila[5]];
            self::$iMecatronica=[$fila[6]];
            self::$iSoftware=[$fila[2]];
            self::$iTelematica=[$fila[3]];
            self::$eBiotecnologiaAmbiental=[$fila[14]];
            self::$eMecatronica=[$fila[15]];
            self::$eSeguridadInformatica=[$fila[16]];
            self::$mBiotecnologia=[$fila[9]];
            self::$mEnsenanzaCiencias=[$fila[10]];
            self::$mMecatronica=[$fila[11]];
            self::$mTics=[$fila[12]];
            self::$dBiotecnologia=[$fila[13]];
            self::$Administrativos=[$fila[17]];
            self::$Catedraticos=[$fila[18]];
            self::$iTelecomunicaciones=[$fila[19]];
            self::$dCienciasaplicadas=[$fila[20]];
            self::$Externos=[$fila[21]];

        }
        if($_SESSION['periodo']=='trimestral'){
            if(isset($_SESSION['Mes'])){
                //if($_SESSION['Mes']=='01'){
                $mes=$_SESSION['Mes']+0;
                $mes2 ="0".($_SESSION['Mes']+1);
                $mes3 ="0".($_SESSION['Mes']+2);
                if($mes>=8){
                    $mes3 =$_SESSION['Mes']+2;
                }
                if($mes>=9){
                    $mes2 =$_SESSION['Mes']+1;
                }
                    self::conectar();
                    $resultado = self::$con->query("call library.estadisticas('".$_SESSION['Anio']."', '".$_SESSION['Mes']."');");
                    self::conectar();
                    $fila = mysqli_fetch_row($resultado);
                    self::conectar();
                    $resultado2 = self::$con->query("call library.estadisticas('".$_SESSION['Anio']."', '".$mes2."');");
                    $fila2 = mysqli_fetch_row($resultado2);
                    self::conectar();
                    $resultado3 = self::$con->query("call library.estadisticas('".$_SESSION['Anio']."', '".$mes3."');");
                    $fila3 = mysqli_fetch_row($resultado3);
                //}

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
                self::$Catedraticos=[$fila[18],$fila2[18],$fila3[18]];
                self::$iTelecomunicaciones=[$fila[19],$fila2[19],$fila3[19]];
                self::$dCienciasaplicadas=[$fila[20],$fila2[20],$fila3[20]];
                self::$Externos=[$fila[21],$fila2[21],$fila3[21]];
            }
        }

       if($_SESSION['periodo']=='cuatrimestral'){
        if(isset($_SESSION['Mes'])){
           // if($_SESSION['Mes']=='01'){
             $mes=$_SESSION['Mes']+0;
                $mes2 ="0".($_SESSION['Mes']+1);
                $mes3 ="0".($_SESSION['Mes']+2);
                $mes4="0".($_SESSION['Mes']+3);
                if($mes>=7){
                    $mes4 =$_SESSION['Mes']+3;
                }
                if($mes>=8){
                    $mes3 =$_SESSION['Mes']+2;
                }
                if($mes>=9){
                    $mes2 =$_SESSION['Mes']+1;
                }
                self::conectar();
                $resultado = self::$con->query("call library.estadisticas('".$_SESSION['Anio']."', '".$_SESSION['Mes']."');");
                self::conectar();
                $fila = mysqli_fetch_row($resultado);
                self::conectar();
                $resultado2 = self::$con->query("call library.estadisticas('".$_SESSION['Anio']."', '".$mes2."');");
                $fila2 = mysqli_fetch_row($resultado2);
                self::conectar();
                $resultado3 = self::$con->query("call library.estadisticas('".$_SESSION['Anio']."', '".$mes3."');");
                $fila3 = mysqli_fetch_row($resultado3);
                self::conectar();
                $resultado4 = self::$con->query("call library.estadisticas('".$_SESSION['Anio']."', '".$mes4."');");
                $fila4 = mysqli_fetch_row($resultado4);
           // }

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
            self::$Catedraticos=[$fila[18],$fila2[18],$fila3[18],$fila4[18]];
            self::$iTelecomunicaciones=[$fila[19],$fila2[19],$fila3[19],$fila4[19]];
            self::$dCienciasaplicadas=[$fila[20],$fila2[20],$fila3[20],$fila4[20]];
            self::$Externos=[$fila[21],$fila2[21],$fila3[21],$fila4[21]];
        }
        }
        if($_SESSION['periodo']=='anual'){
            self::conectar();
                $resultado = self::$con->query("call library.estadisticas('".$_SESSION['Anio']."', '01');");
                self::conectar();
                $fila = mysqli_fetch_row($resultado);
                self::conectar();
                $resultado2 = self::$con->query("call library.estadisticas('".$_SESSION['Anio']."', '02');");
                $fila2 = mysqli_fetch_row($resultado2);
                self::conectar();
                $resultado3 = self::$con->query("call library.estadisticas('".$_SESSION['Anio']."', '03');");
                $fila3 = mysqli_fetch_row($resultado3);
                self::conectar();
                $resultado4 = self::$con->query("call library.estadisticas('".$_SESSION['Anio']."', '04');");
                $fila4 = mysqli_fetch_row($resultado4);
                self::conectar();
                $resultado5 = self::$con->query("call library.estadisticas('".$_SESSION['Anio']."', '05');");
                $fila5 = mysqli_fetch_row($resultado5);
                self::conectar();
                $resultado6 = self::$con->query("call library.estadisticas('".$_SESSION['Anio']."', '06');");
                $fila6 = mysqli_fetch_row($resultado6);
                self::conectar();
                $resultado7 = self::$con->query("call library.estadisticas('".$_SESSION['Anio']."', '07');");
                $fila7 = mysqli_fetch_row($resultado7);
                self::conectar();
                $resultado8 = self::$con->query("call library.estadisticas('".$_SESSION['Anio']."', '08');");
                $fila8 = mysqli_fetch_row($resultado8);
                self::conectar();
                $resultado9 = self::$con->query("call library.estadisticas('".$_SESSION['Anio']."', '09');");
                $fila9 = mysqli_fetch_row($resultado9);
                self::conectar();
                $resultado10 = self::$con->query("call library.estadisticas('".$_SESSION['Anio']."', '10');");
                $fila10 = mysqli_fetch_row($resultado10);
                self::conectar();
                $resultado11 = self::$con->query("call library.estadisticas('".$_SESSION['Anio']."', '11');");
                $fila11 = mysqli_fetch_row($resultado11);
                self::conectar();
                $resultado12 = self::$con->query("call library.estadisticas('".$_SESSION['Anio']."', '12');");
                $fila12 = mysqli_fetch_row($resultado12);
                self::$lMedicoCirujano=[$fila[7],$fila2[7],$fila3[7],$fila4[7],$fila5[7],$fila6[7],$fila7[7],$fila8[7],$fila9[7],$fila10[7],$fila11[7],$fila12[7]];
            self::$lTerapiaFisica=[$fila[8],$fila2[8],$fila3[8],$fila4[8],$fila5[8],$fila6[8],$fila7[8],$fila8[8],$fila9[8],$fila10[8],$fila11[8],$fila12[8]];
            self::$iBiomedica=[$fila[0],$fila2[0],$fila3[0],$fila4[0],$fila5[0],$fila6[0],$fila7[0],$fila8[0],$fila9[0],$fila10[0],$fila11[0],$fila12[0]];
            self::$iBiotecnologia=[$fila[1],$fila2[1],$fila3[1],$fila4[1],$fila5[1],$fila6[1],$fila7[1],$fila8[1],$fila9[1],$fila10[1],$fila11[1],$fila12[1]];
            self::$iFinanciera=[$fila[4],$fila2[4],$fila3[4],$fila4[4],$fila5[4],$fila6[4],$fila7[4],$fila8[4],$fila9[4],$fila10[4],$fila11[4],$fila12[4]];
            self::$iMecanicaAutomotriz=[$fila[5],$fila2[5],$fila3[5],$fila4[5],$fila5[5],$fila6[5],$fila7[5],$fila8[5],$fila9[5],$fila10[5],$fila11[5],$fila12[5]];
            self::$iMecatronica=[$fila[6],$fila2[6],$fila3[6],$fila4[6],$fila5[6],$fila6[6],$fila7[6],$fila8[6],$fila9[6],$fila10[6],$fila11[6],$fila12[6]];
            self::$iSoftware=[$fila[2],$fila2[2],$fila3[2],$fila4[2],$fila5[2],$fila6[2],$fila7[2],$fila8[2],$fila9[2],$fila10[2],$fila11[2],$fila12[2]];
            self::$iTelematica=[$fila[3],$fila2[3],$fila3[3],$fila4[3],$fila5[3],$fila6[3],$fila7[3],$fila8[3],$fila9[3],$fila10[3],$fila11[3],$fila12[3]];
            self::$eBiotecnologiaAmbiental=[$fila[14],$fila2[14],$fila3[14],$fila4[14],$fila5[14],$fila6[14],$fila7[14],$fila8[14],$fila9[14],$fila10[14],$fila11[14],$fila12[14]];
            self::$eMecatronica=[$fila[15],$fila2[15],$fila3[15],$fila4[15],$fila5[15],$fila6[15],$fila7[15],$fila8[15],$fila9[15],$fila10[15],$fila11[15],$fila12[15]];
            self::$eSeguridadInformatica=[$fila[16],$fila2[16],$fila3[16],$fila4[16],$fila5[16],$fila6[16],$fila7[16],$fila8[16],$fila9[16],$fila10[16],$fila11[16],$fila12[16]];
            self::$mBiotecnologia=[$fila[9],$fila2[9],$fila3[9],$fila4[9],$fila5[9],$fila6[9],$fila7[9],$fila8[9],$fila9[9],$fila10[9],$fila11[9],$fila12[9]];
            self::$mEnsenanzaCiencias=[$fila[10],$fila2[10],$fila3[10],$fila4[10],$fila5[10],$fila6[10],$fila7[10],$fila8[10],$fila9[10],$fila10[10],$fila11[10],$fila12[10]];
            self::$mMecatronica=[$fila[11],$fila2[11],$fila3[11],$fila4[11],$fila5[11],$fila6[11],$fila7[11],$fila8[11],$fila9[11],$fila10[11],$fila11[11],$fila12[11]];
            self::$mTics=[$fila[12],$fila2[12],$fila3[12],$fila4[12],$fila5[12],$fila6[12],$fila7[12],$fila8[12],$fila9[12],$fila10[12],$fila11[12],$fila12[12]];
            self::$dBiotecnologia=[$fila[13],$fila2[13],$fila3[13],$fila4[13],$fila5[13],$fila6[13],$fila7[13],$fila8[13],$fila9[13],$fila10[13],$fila11[13],$fila12[13]];
            self::$Administrativos=[$fila[17],$fila2[17],$fila3[17],$fila4[17],$fila5[17],$fila6[17],$fila7[17],$fila8[17],$fila9[17],$fila10[17],$fila11[17],$fila12[17]];
            self::$Catedraticos=[$fila[18],$fila2[18],$fila3[18],$fila4[18],$fila5[18],$fila6[18],$fila7[18],$fila8[18],$fila9[18],$fila10[18],$fila11[18],$fila12[18]];
            self::$iTelecomunicaciones=[$fila[19],$fila2[19],$fila3[19],$fila4[19],$fila5[19],$fila6[19],$fila7[19],$fila8[19],$fila9[19],$fila10[19],$fila11[19],$fila12[19]];
            self::$dCienciasaplicadas=[$fila[20],$fila2[20],$fila3[20],$fila4[20],$fila5[20],$fila6[20],$fila7[20],$fila8[20],$fila9[20],$fila10[20],$fila11[20],$fila12[20]];
            self::$Externos=[$fila[21],$fila2[21],$fila3[21],$fila4[21],$fila5[21],$fila6[21],$fila7[21],$fila8[21],$fila9[21],$fila10[21],$fila11[21],$fila12[21]];
        }
    }
    }
}
?>
