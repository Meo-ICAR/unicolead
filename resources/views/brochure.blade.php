<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UnicoCompliance - Brochure Personalizzata</title>
    <!-- Google Fonts: Inter & Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-gradient-start: #0f172a;
            --bg-gradient-end: #020617;
            --primary: #3b82f6;
            --primary-hover: #2563eb;
            --accent: #a855f7;
            --text-main: #f8fafc;
            --text-muted: #94a3b8;
            --glass-bg: rgba(30, 41, 59, 0.4);
            --glass-border: rgba(255, 255, 255, 0.08);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: radial-gradient(circle at top left, #1e1b4b, transparent 40%),
                        radial-gradient(circle at bottom right, #311042, transparent 40%),
                        var(--bg-gradient-end);
            background-color: var(--bg-gradient-end);
            color: var(--text-main);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            overflow-x: hidden;
        }

        /* Subtle Fade In Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .brochure-container {
            max-width: 900px;
            width: 100%;
            background: var(--glass-bg);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            padding: 48px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            animation: fadeIn 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            position: relative;
        }

        .glow-effect {
            position: absolute;
            top: -10%;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            height: 150px;
            background: linear-gradient(90deg, var(--primary), var(--accent));
            filter: blur(80px);
            opacity: 0.15;
            pointer-events: none;
            z-index: 0;
        }

        .header {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            padding-bottom: 24px;
        }

        .logo {
            font-family: 'Outfit', sans-serif;
            font-size: 28px;
            font-weight: 800;
            background: linear-gradient(135deg, #60a5fa, #c084fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .tagline {
            font-size: 14px;
            color: var(--text-muted);
            letter-spacing: 0.05em;
            text-transform: uppercase;
            font-weight: 600;
        }

        .welcome-section {
            margin-bottom: 48px;
            position: relative;
            z-index: 1;
        }

        .welcome-title {
            font-family: 'Outfit', sans-serif;
            font-size: 40px;
            line-height: 1.2;
            font-weight: 700;
            margin-bottom: 16px;
        }

        .welcome-title span {
            color: #60a5fa;
            background: linear-gradient(to right, #60a5fa, #a78bfa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .welcome-desc {
            font-size: 18px;
            color: var(--text-muted);
            line-height: 1.6;
            max-width: 700px;
            font-weight: 300;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 24px;
            margin-bottom: 48px;
            position: relative;
            z-index: 1;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 16px;
            padding: 24px;
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.06);
            border-color: rgba(255, 255, 255, 0.1);
            box-shadow: 0 10px 20px -10px rgba(0, 0, 0, 0.3);
        }

        .feature-icon {
            width: 48px;
            height: 48px;
            background: rgba(59, 130, 246, 0.1);
            border-radius: 12px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--primary);
            font-size: 20px;
            margin-bottom: 16px;
            transition: all 0.3s ease;
        }

        .feature-card:hover .feature-icon {
            background: var(--primary);
            color: #ffffff;
            box-shadow: 0 0 12px var(--primary);
        }

        .feature-title {
            font-family: 'Outfit', sans-serif;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .feature-desc {
            font-size: 14px;
            color: var(--text-muted);
            line-height: 1.5;
        }

        .cta-section {
            text-align: center;
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(168, 85, 247, 0.1));
            border: 1px solid rgba(59, 130, 246, 0.2);
            border-radius: 20px;
            padding: 32px;
            position: relative;
            z-index: 1;
        }

        .cta-title {
            font-family: 'Outfit', sans-serif;
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .cta-desc {
            font-size: 15px;
            color: var(--text-muted);
            margin-bottom: 24px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-group {
            display: flex;
            justify-content: center;
            gap: 16px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 28px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 15px;
            text-decoration: none;
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            color: #ffffff;
            border: none;
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
        }

        .btn-primary:hover {
            transform: scale(1.02);
            box-shadow: 0 6px 20px rgba(59, 130, 246, 0.5);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.05);
            color: var(--text-main);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.2);
        }

        .footer {
            margin-top: 32px;
            text-align: center;
            font-size: 13px;
            color: rgba(255, 255, 255, 0.3);
        }

        @media (max-width: 768px) {
            .brochure-container {
                padding: 24px;
            }
            .welcome-title {
                font-size: 30px;
            }
            .header {
                flex-direction: column;
                gap: 12px;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="brochure-container">
        <div class="glow-effect"></div>
        
        <!-- Header -->
        <header class="header">
            <div class="logo">UnicoCompliance</div>
            <div class="tagline">Compliance Integrata & Digitale</div>
        </header>

        <!-- Welcome Section -->
        <section class="welcome-section">
            <h1 class="welcome-title">Brochure Riservata per<br><span>{{ $lead->name }}</span></h1>
            @if($lead->studio)
                <h2 style="font-size: 20px; font-weight: 500; color: #a78bfa; margin-top: -8px; margin-bottom: 16px;">{{ $lead->studio }}</h2>
            @endif
            <p class="welcome-desc">
                Benvenuto nel tuo spazio personalizzato. Abbiamo studiato le esigenze e i requisiti normativi per i tuoi processi aziendali. UnicoCompliance unifica tutti gli adempimenti normativi in un'unica piattaforma sicura, automatizzata e sempre aggiornata.
            </p>
        </section>

        <!-- Features Grid -->
        <section class="features-grid">
            <!-- Feature 1 -->
            <div class="feature-card">
                <div class="feature-icon">🛡️</div>
                <h3 class="feature-title">Modello D.Lgs. 231</h3>
                <p class="feature-desc">Analisi dei rischi, predisposizione del modello organizzativo e monitoraggio costante per l'Organismo di Vigilanza.</p>
            </div>
            <!-- Feature 2 -->
            <div class="feature-card">
                <div class="feature-icon">🔒</div>
                <h3 class="feature-title">GDPR & Privacy</h3>
                <p class="feature-desc">Registro dei trattamenti, assessment d'impatto (DPIA) e gestione del data breach integrati in una dashboard intuitiva.</p>
            </div>
            <!-- Feature 3 -->
            <div class="feature-card">
                <div class="feature-icon">📈</div>
                <h3 class="feature-title">Antiriciclaggio</h3>
                <p class="feature-desc">Adeguata verifica automatizzata dei clienti, calcolo del profilo di rischio e archiviazione digitale delle pratiche.</p>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="cta-section">
            <h2 class="cta-title">Siamo pronti ad affiancarti</h2>
            <p class="cta-desc">I nostri consulenti dedicati hanno elaborato una proposta d'integrazione personalizzata. Clicca qui sotto per scaricare la brochure in formato PDF o per prenotare un incontro di approfondimento gratuito.</p>
            <div class="btn-group">
                <a href="#" class="btn btn-primary" onclick="alert('Demo: Download brochure avviato!'); return false;">📥 Scarica Proposta PDF</a>
                <a href="mailto:info@unicocompliance.it?subject=Richiesta%20Consulenza%20-%20{{ urlencode($lead->name) }}" class="btn btn-secondary">📞 Richiedi Contatto</a>
            </div>
        </section>
    </div>

    <div class="footer">
        &copy; {{ date('Y') }} UnicoCompliance S.r.l. - Tutti i diritti riservati.
    </div>
</body>
</html>
