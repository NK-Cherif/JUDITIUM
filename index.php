<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUDITIUM | Excellence & Suprématie Juridique</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="JD.css">
</head>
<body class="antialiased">
    <?php include 'menu.php'; ?>
    <main class="pt-24">

        <?php include 'accueil.php'; ?>

        <?php include 'lettre.php'; ?>

        <?php include 'rdv.php'; ?>

        <?php include 'questions.php'; ?>

        <?php include 'compte.php'; ?>

    </main>

    
    <footer class="bg-blue-950 text-white pt-40 pb-20 relative overflow-hidden">
        <div class="absolute right-0 bottom-0 opacity-5 w-1/3">
            <img src="LOGO.png" alt="Logo BG" class="w-full">
        </div>
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-4 gap-20 mb-32">
                <div class="col-span-2">
                    <div class="flex items-center gap-6 mb-12">
                        <img src="LOGO.png" alt="Footer Logo" class="h-16 brightness-0 invert">
                        <span class="text-4xl font-black tracking-tighter">JUDITIUM</span>
                    </div>
                    <p class="text-white/40 max-w-sm text-lg font-light leading-relaxed font-serif italic">Le prestige du droit, la force de l'innovation.</p>
                    <p class="text-white text-xs mt-1 tracking-wide">
                        © 2026 JUDITIUM.Tout droit réserver à <br>
                    <strong> NIKIEMA CHERIF  <br>
                    SAWADOGO FRANCK CLOVIS <br>
                    OUEDRAOGO ISSA  <br>
                    OUEDRAOGO SAIDOU <br>
                    OUEDRAOGO ALASSANE <br>
                    OUEDRAOGO MARIELLE <br>
                    SONDO MOUBARAKATOU <br>
                    SAM ARNAUD <br>
                    TARNAGDA HAMZA <br>
                    YAMEOGO NASSER <br>
                    ZARE MOUNIR <br>
                    BAMOGO LIONEL <br>
                    </strong></p>
                </div>
                <div>
                    <h4 class="text-[#D4AF37] text-[10px] font-black uppercase tracking-widest mb-10">Expertises</h4>
                    <ul class="space-y-6 text-xs font-bold text-white/60 uppercase tracking-widest">
                        <li>Foncier & Immobilier</li>
                        <li>Droit OHADA</li>
                        <li>Conseil Pénal</li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-[#D4AF37] text-[10px] font-black uppercase tracking-widest mb-10">Burkina Faso</h4>
                    <div class="text-white/60 text-xs font-bold uppercase leading-relaxed tracking-widest">
                        <p>PROJET ZACA, Secteur 01</p>
                        <p>Ouagadougou</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function showPage(pageId) {
            document.querySelectorAll('.page-section').forEach(s => s.classList.remove('active'));
            const target = document.getElementById(pageId);
            if(target) target.classList.add('active');
            document.querySelectorAll('.nav-link').forEach(l => {
                l.classList.remove('active');
                if(l.id === 'nav-' + pageId) l.classList.add('active');
            });
            window.scrollTo({top: 0, behavior: 'smooth'});
        }

        function toggleFaq(btn) {
            const content = btn.nextElementSibling;
            const span = btn.querySelector('span:last-child');
            if(content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                span.innerText = '−';
            } else {
                content.classList.add('hidden');
                span.innerText = '+';
            }
        }

        function selectDate(el) {
            document.querySelectorAll('.calendar-slot').forEach(s => s.classList.remove('selected'));
            el.classList.add('selected');
        }
    </script>
</body>
</html>