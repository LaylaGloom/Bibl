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
            label:  "Licenciatura Médico Cirujano",
            backgroundColor: "#716DF9",
            borderColor: "#716DF9",
            data: <?php   echo json_encode( Estadisticas::$lMedicoCirujano); ?>,
            fill: false
        },{
            label: "Licenciatura Terapia Física",
            backgroundColor: "#4931A8",
            borderColor: "#4931A8",
            data:<?php   echo json_encode( Estadisticas::$lTerapiaFisica); ?>,
            fill: false
        },{
            label:  "Ingeniería Biomédica",
            backgroundColor: "#807EFB",
            borderColor: "#807EFB",
            data:<?php   echo json_encode( Estadisticas::$iBiomedica); ?>,
            fill: false
        },{
            label:"Ingeniería Biotecnología",
            backgroundColor: "#75E2E4",
            borderColor: "#75E2E4",
            data: <?php   echo json_encode( Estadisticas::$iBiotecnologia); ?>,
            fill: false
        },{
            label: "Ingeniería Financiera",
            backgroundColor: "#48CDD2",
            borderColor: "#48CDD2",
            data: <?php   echo json_encode( Estadisticas::$iFinanciera); ?>,
            fill: false
        },{
            label: "Ingeniería Mecánica Automotriz",
            backgroundColor: "#3B444B",
            borderColor: "#3B444B",
            data: <?php   echo json_encode( Estadisticas::$iMecanicaAutomotriz); ?>,
            fill: false
        },{
            label: "Ingeniería Mecatrónica",
            backgroundColor: "#0095B6",
            borderColor: "#0095B6",
            data: <?php   echo json_encode( Estadisticas::$iMecatronica); ?>,
            fill: false
        },{
            label: "Ingeniería Software",
            backgroundColor: "#00FF00",
            borderColor: "#00FF00",
            data: <?php   echo json_encode( Estadisticas::$iSoftware); ?>,
            fill: false
        },{
            label: "Ingeniería Telemática",
            backgroundColor:"#0047AB",
            borderColor:"#0047AB",
            data: <?php   echo json_encode( Estadisticas::$iTelematica); ?>,
            fill: false
        },{
            label: "Ingeniería Telecomunicaciones",
            backgroundColor:"#8047A7",
            borderColor:"#8047A7",
            data: <?php   echo json_encode( Estadisticas::$iTelecomunicaciones); ?>,
            fill: false
        },{
            label: "Especialidad Biotecnología Ambiental",
            backgroundColor:"#003153",
            borderColor: "#003153",
            data: <?php   echo json_encode( Estadisticas::$eBiotecnologiaAmbiental); ?>,
            fill: false
        },{
            label: "Especialidad Mecatrónica",
            backgroundColor: "#73C2FB",
            borderColor: "#73C2FB",
            data: <?php   echo json_encode( Estadisticas::$eMecatronica); ?>,
            fill: false
        },{
            label: "Especialidad Seguridad Informática",
            backgroundColor: "#002366",
            borderColor: "#002366",
            data: <?php   echo json_encode( Estadisticas::$eSeguridadInformatica); ?>,
            fill: false
        },{
            label: "Maestría Biotecnología",
            backgroundColor: "#007FFF",
            borderColor: "#007FFF",
            data: <?php   echo json_encode( Estadisticas::$mBiotecnologia); ?>,
            fill: false
        },{
            label: "Maestría Enseñanza de la Ciencias",
            backgroundColor: "#000641",
            borderColor:"#000641",
            data: <?php   echo json_encode( Estadisticas::$mEnsenanzaCiencias); ?>,
            fill: false
        },{
            label: "Maestría Mecatrónica",
            backgroundColor:"#990066",
            borderColor: "#990066",
            data: <?php   echo json_encode( Estadisticas::$mMecatronica); ?>,
            fill: false
        },{
            label: "Maestría TICs",
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
            label: "Doctorado Ciencias Aplicadas",
            backgroundColor: "#37C3F3",
            borderColor: "#37C3F3",
            data: <?php   echo json_encode( Estadisticas::$dCienciasaplicadas); ?>,
            fill: false
        },{
            label: "Administrativos",
            backgroundColor: "#000000",
            borderColor: "#000000",
            data: <?php   echo json_encode( Estadisticas::$Administrativos); ?>,
            fill: false
        },{
            label: "Catedraticos",
            backgroundColor: "#770007",
            borderColor: "#770007",
            data: <?php   echo json_encode( Estadisticas::$Catedraticos); ?>,
            fill: false
        },{
            label: "Externos",
            backgroundColor: "#775557",
            borderColor: "#775557",
            data: <?php   echo json_encode( Estadisticas::$Externos); ?>,
            fill: false
        }]
    },

    // Configuration options go here
    options: {
    chart: {
        backgroundColor: {
            linearGradient: [0, 0, 500, 500],
            stops: [
                [0, 'rgb(255, 255, 255)'],
                [1, 'rgb(240, 240, 255)']
            ]
        },
    },
        responsive: true,
        title: {
            display: true,
            // text: 'Chart.js Line Chart'
        },
        tooltips: {
            position:'nearest',
            mode: 'point',
            intersect: true,
        },               
    }
});
chart.set
<?php 

?>