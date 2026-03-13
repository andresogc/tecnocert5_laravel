<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitud de Cotización - TECNOCERT</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
        }

        .header {
            background-color: #1056a8;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }

        .content {
            padding: 25px;
        }

        .section {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .field {
            margin-bottom: 12px;
        }

        .label {
            font-weight: bold;
            color: #333;
            display: inline-block;
            width: 150px;
        }

        .value {
            color: #555;
            display: inline-block;
        }

        .message-box {
            background-color: #f9f9f9;
            padding: 15px;
            border-left: 4px solid #1056a8;
            margin: 15px 0;
            border-radius: 3px;
        }

        .footer {
            margin-top: 25px;
            padding-top: 15px;
            border-top: 1px solid #ddd;
            color: #777;
            font-size: 12px;
        }
    </style>

</head>

<body>
    <div class='container'>
        <div class='header'>
            <h2>SOLICITUD DE COTIZACIÓN</h2>
            <p>TECNOCERT - Certificación de Sistemas de Gestión</p>
        </div>
        <div class='content'>
            <p>Se ha recibido una nueva solicitud de cotización:</p>

            <div class='section'>
                <h3>INFORMACIÓN DEL CLIENTE</h3>
                <div class='field'>
                    <div class='label'>Nombre Completo:</div>
                    <div class='value'>{{$name}}</div>
                </div>
                <div class='field'>
                    <div class='label'>Correo Electrónico:</div>
                    <div class='value'>{{$email}}</div>
                </div>
                <div class='field'>
                    <div class='label'>Teléfono:</div>
                    <div class='value'>{{$phone}}</div>
                </div>
            </div>

            <div class='section'>
                <h3>DETALLES DE LA SOLICITUD</h3>
                <div class='message-box'>
                    <div class='label'>Mensaje:</div>
                    <div class='value' style='width:100%; margin-top:10px;'> {{ nl2br($message) }}</div>
                </div>
            </div>

            <div class="footer">

                <p>
                    <strong>Fecha y Hora de Solicitud:</strong>
                    {{ now()->format('d/m/Y H:i:s') }}
                </p>

                <p>
                    <strong>IP del Solicitante:</strong>
                    {{ request()->ip() }}
                </p>

                <p>
                    <strong>Modo de Envío:</strong>
                    WEB
                </p>

                <p>
                    <em>Este mensaje fue enviado desde el sitio web de TECNOCERT</em>
                </p>

            </div>
        </div>
    </div>
</body>

</html>