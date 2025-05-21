{{-- resources/views/emails/contact-form-submitted.blade.php --}}
    <!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demande de contact</title>

    <style>
        /* === Reset de base et typographie === */
        body, table, td, a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            font-family: "Tahoma", sans-serif;
        }
        body {
            margin: 0;
            padding: 0;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background-color: #f5f7fa;
            color: #333333;
        }
        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        .email-container {
            width: 100%;
            max-width: 1500px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
        }
        .email-header {
            border-bottom: 1px solid #1E58BEFF;
            color: #ffffff;
            padding: 2em;
            text-align: center;
        }
        .email-body {
            padding: 30px 20px;
        }
        h1 {
            font-size: 2.5em;
            font-weight: 100;
            color: #1E58BEFF;
            margin: 0;
        }
        .field-label {
            font-size: 1.15em;
            font-weight: 100;
            text-transform: uppercase;
            margin-top: 1em;
            margin-bottom: 0.25em;
            color: #676767;
        }
        .field-value {
            font-size: 1.5em;
            margin-bottom: 1em;
        }
        .footer {
            font-size: 0.85rem;
            text-align: center;
            color: #777777;
            padding: 15px 10px;
        }
    </style>
</head>
<body>
<table role="presentation" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td align="center">
            <table role="presentation" class="email-container" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="email-header">
                        <h1>Nouvelle demande de contact</h1>
                    </td>
                </tr>
                <tr>
                    <td class="email-body">
                        <div class="field-label">Expéditeur :</div>
                        <div class="field-value">{{ $data['name'] }}</div>

                        <div class="field-label">Email :</div>
                        <div class="field-value">{{ $data['email'] }}</div>

                        <div class="field-label">Téléphone :</div>
                        <div class="field-value">{{ $data['phone'] }}</div>

                        <div class="field-label">Message :</div>
                        <div class="field-value" style="padding: 1em 0">
                            {{ $data['message'] }}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="footer">
                        Vous recevez ce mail car un visiteur a rempli le formulaire de contact sur The Loyal Agency.
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
