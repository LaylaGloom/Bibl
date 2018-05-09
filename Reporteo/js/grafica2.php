<?php
include('../php/obtenerEstadisticas.php');
session_start();
$Meses= $_SESSION['meses'];
#echo Estadisticas::tablas();
#$jsonArray = array("meses"=>$Meses); 
echo Estadisticas::traerdatos();
?>
var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: <?php echo json_encode($Meses,JSON_PRETTY_PRINT); ?>,
        datasets: [{
            label:  "Licenciaturas Médico Cirujano",
            backgroundColor: "#716DF9",
            borderColor: "#716DF9",
            data: <?php   echo json_encode( Estadisticas::$lMedicoCirujano); ?>,
            fill: false
        },{
            label: "Licenciaturas Terapia Física",
            backgroundColor: "#4931A8",
            borderColor: "#4931A8",
            data:<?php   echo json_encode( Estadisticas::$lTerapiaFisica); ?>,
            fill: false
        },{
            label:  "Ingenierías Biomédica",
            backgroundColor: "#807EFB",
            borderColor: "#807EFB",
            data:<?php   echo json_encode( Estadisticas::$iBiomedica); ?>,
            fill: false
        },{
            label:"Ingenierías Biotecnología",
            backgroundColor: "#75E2E4",
            borderColor: "#75E2E4",
            data: <?php   echo json_encode( Estadisticas::$iBiotecnologia); ?>,
            fill: false
        },{
            label: "Ingenierías Financiera",
            backgroundColor: "#48CDD2",
            borderColor: "#48CDD2",
            data: <?php   echo json_encode( Estadisticas::$iFinanciera); ?>,
            fill: false
        },{
            label: "Ingenierías Mecánica Automotriz",
            backgroundColor: "#3B444B",
            borderColor: "#3B444B",
            data: <?php   echo json_encode( Estadisticas::$iMecanicaAutomotriz); ?>,
            fill: false
        },{
            label: "Ingenierías Mecatrónica",
            backgroundColor: "#0095B6",
            borderColor: "#0095B6",
            data: <?php   echo json_encode( Estadisticas::$iMecatronica); ?>,
            fill: false
        },{
            label: "Ingenierías Software",
            backgroundColor: "#00FF00",
            borderColor: "#00FF00",
            data: <?php   echo json_encode( Estadisticas::$iSoftware); ?>,
            fill: false
        },{
            label: "Ingenierías Telemática",
            backgroundColor:"#0047AB",
            borderColor:"#0047AB",
            data: <?php   echo json_encode( Estadisticas::$iTelematica); ?>,
            fill: false
        },{
            label: "Especialidades Biotecnología Ambiental",
            backgroundColor:"#003153",
            borderColor: "#003153",
            data: <?php   echo json_encode( Estadisticas::$eBiotecnologiaAmbiental); ?>,
            fill: false
        },{
            label: "Especialidades Mecatrónica",
            backgroundColor: "#73C2FB",
            borderColor: "#73C2FB",
            data: <?php   echo json_encode( Estadisticas::$eMecatronica); ?>,
            fill: false
        },{
            label: "Especialidades Seguridad Informática",
            backgroundColor: "#002366",
            borderColor: "#002366",
            data: <?php   echo json_encode( Estadisticas::$eSeguridadInformatica); ?>,
            fill: false
        },{
            label: "Maestrías Biotecnología",
            backgroundColor: "#007FFF",
            borderColor: "#007FFF",
            data: <?php   echo json_encode( Estadisticas::$mBiotecnologia); ?>,
            fill: false
        },{
            label: "Maestrías Enseñanza de la Ciencias",
            backgroundColor: "#000641",
            borderColor:"#000641",
            data: <?php   echo json_encode( Estadisticas::$mEnsenanzaCiencias); ?>,
            fill: false
        },{
            label: "Maestrías Mecatrónica",
            backgroundColor:"#990066",
            borderColor: "#990066",
            data: <?php   echo json_encode( Estadisticas::$mMecatronica); ?>,
            fill: false
        },{
            label: "Maestrías TICs",
            backgroundColor: "#800020",
            borderColor: "#800020",
            data: <?php   echo json_encode( Estadisticas::$mTics); ?>,
            fill: false
        },{
            label: "Doctorado Biotecnología",
            backgroundColor: "#87CEFF",
            borderColor: "#87CEFF",
            data: <?php   echo json_encode( Estadisticas::$dBiotecnologia); ?>,
            fill: false
        },{
            label: "Administrativos",
            backgroundColor: "#000000",
            borderColor: "#000000",
            data: <?php   echo json_encode( Estadisticas::$Administrativos); ?>,
            fill: false
        }]
    },

    // Configuration options go here
    options: {
        responsive: true,
        title: {
            display: true,
            // text: 'Chart.js Line Chart'
        },
        tooltips: {
            position:'nearest',
            mode: 'index',
            intersect: true,
        },               
    }
});
<?php 

?>