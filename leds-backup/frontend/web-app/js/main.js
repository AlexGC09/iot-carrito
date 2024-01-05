
    function enviarDatos(value) {
        const timestamp = new Date().getTime();
        
        axios({ 
            method: 'get',
            url: `http://127.0.0.1/leds-backup/backend/setLed.php?setstatus=${value}&timestamp=${timestamp}`,
            headers: { 'Content-Type': 'application/json;charset=utf-8' }
        })
        .then(response => {
            console.log('Datos enviados con éxito:', response.data);
        })
        .catch(error => {
            console.error('Error al enviar datos:', error);
        });
    }

    document.getElementById('encenderBtn').addEventListener('click', function() { enviarDatos('1'); });
    document.getElementById('apagarBtn').addEventListener('click', function() { enviarDatos('0'); });





