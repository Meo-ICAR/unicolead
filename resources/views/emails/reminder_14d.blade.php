<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Brochure UnicoCompliance - Ultimo Sollecito</title>
    <style>
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f3f4f6; color: #1f2937; margin: 0; padding: 40px 0; }
        .container { max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); }
        .header { background-color: #1e3a8a; padding: 30px; text-align: center; color: white; }
        .header h1 { margin: 0; font-size: 24px; font-weight: 700; letter-spacing: -0.025em; }
        .content { padding: 40px 30px; line-height: 1.6; }
        .content p { font-size: 16px; margin-bottom: 24px; color: #4b5563; }
        .btn-wrapper { text-align: center; margin: 30px 0; }
        .btn { display: inline-block; padding: 12px 30px; background-color: #dc2626; color: #ffffff !important; text-decoration: none; border-radius: 6px; font-weight: 600; font-size: 16px; transition: background-color 0.2s; }
        .btn:hover { background-color: #b91c1c; }
        .footer { background-color: #f9fafb; padding: 20px; text-align: center; font-size: 12px; color: #9ca3af; border-top: 1px solid #e5e7eb; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>UnicoCompliance</h1>
        </div>
        <div class="content">
            <p>Gentile <strong>{{ $lead->name }}</strong>,</p>
            <p>Questo è il nostro ultimo tentativo per metterti a disposizione la brochure di UnicoCompliance contenente la pianificazione e i dettagli personalizzati per la tua attività.</p>
            <p>Il link personalizzato rimarrà attivo solo per altri pochi giorni. Ti consigliamo di visualizzarlo subito per non perdere le informazioni dedicate.</p>
            
            <div class="btn-wrapper">
                <a href="{{ $url }}" class="btn">Accedi Ora alla Brochure</a>
            </div>

            <p>Puoi accedere direttamente anche copiando il seguente link:</p>
            <p style="word-break: break-all; font-size: 14px; background: #f3f4f6; padding: 10px; border-radius: 4px; font-family: monospace;">{{ $url }}</p>
        </div>
        <div class="footer">
            Questo è un invio automatico da parte del sistema gestionale UnicoCompliance.<br>
            &copy; {{ date('Y') }} UnicoCompliance. Tutti i diritti riservati.
        </div>
    </div>
</body>
</html>
