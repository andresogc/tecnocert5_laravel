<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitud de suscripción - TECNOCERT</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background-color: #1056a8;
            color: white;
            padding: 15px;
            text-align: center;
        }

        .content {
            padding: 20px;
            border: 1px solid #ddd;
        }

        .field {
            margin-bottom: 15px;
        }

        .label {
            font-weight: bold;
            color: #333;
        }

        .value {
            color: #555;
        }
    </style>
</head>

<body>
    <div class='container'>
        <div class='header'>
            <h2>SOLICITUD DE SUSCRIPCIÓN</h2>
        </div>
        <div class='content'>
            <p>Se ha recibido una nueva solicitud de suscripción:</p>
            <div class='field'>
                <div class='label'>Correo Electrónico:</div>
                <div class='value'>{{$correo}}</div>
            </div>

            
            <hr>
            <p><strong>Fecha y Hora de Solicitud:</strong>  {{ now()->format('d/m/Y H:i:s') }}</p>
            <p><strong>IP del Solicitante:</strong> {{ request()->ip() }}</p>
            <p><strong>Modo de Envío:</strong> WEB</p>
            <p><em>Este mensaje fue enviado desde el sitio web de TECNOCERT</em></p>
        </div>
    </div>
</body>

</html>
</body>

</html>