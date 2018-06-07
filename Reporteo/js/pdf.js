
    function pruebaDivAPdf() {
        var pdf = new jsPDF('p', 'pt', 'letter');
        source = window.document.getElementsByTagName("body")[0];

        specialElementHandlers = {
            '#bypassme': function (element, renderer) {
                return true
            }
        };
        margins = {
            top: 80,
            bottom: 60,
            left: 40,
            width: 522
        };

        pdf.fromHTML(
            source, 
            margins.left, // x coord
            margins.top, { // y coord
                'width': margins.width, 
                'elementHandlers': specialElementHandlers
            },

            function (dispose) {
                pdf.save('Prueba.pdf');
            }, margins
        );
    }
    function savePDF(){
        var canvas = document.getElementById('myChart'),
            ctx = canvas.getContext('2d');
         try {
            canvas.getContext('2d');
            var imgData = canvas.toDataURL("image/png", 1.0);
            var pdf = new jsPDF('h', 'mm', [297, 210]);
            pdf.addImage(imgData, 'PNG', 2, 5);
            var namefile = "Estadisticas";//prompt("Ingrese el nombre del");
            pdf.save(namefile + ".pdf");
         } catch(e) {
             alert("Error description: " + e.message);
         }
         
    }