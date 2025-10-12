<?php include 'includes/header.php'; ?>
<?php include 'includes/db.php'; ?>

<!DOCTYPE html>
<html lang="sr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usluge - ALU & PVC Stolarija Petrović</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

    <!-- HERO SEKCIJA -->
    <section class="usluge-hero fade-in">
        <div class="usluge-hero-overlay">
            <img src="slike/uslugehero.jpg">
        </div>
        <div class="usluge-hero-text">
            <h1>Naše usluge</h1>
            <p>Kvalitetna ALU i PVC stolarija, montaža i servis širom Srbije</p>
        </div>
    </section>

    <!-- SEKCIJA KAKO FUNKCIONIŠEMO -->
    <section class="usluge-process fade-in">
        <div class="container">
            <h2>Kako funkcionišemo</h2>
            <p>Naš proces je jednostavan, brz i transparentan. Od prvog kontakta do završene montaže, pružamo vrhunski
                kvalitet i profesionalnu uslugu. Pogledajte kako izgleda saradnja sa nama:</p>

            <div class="process-timeline">
                <div class="step fade-in">
                    <div class="step-number">1</div>
                    <div class="step-text">
                        <h3>Pošaljite upit</h3>
                        <p>Kontaktirajte nas putem forme ili telefona i recite nam šta Vam je potrebno.</p>
                    </div>
                </div>

                <div class="step fade-in">
                    <div class="step-number">2</div>
                    <div class="step-text">
                        <h3>Stručnjaci dolaze na lice mesta</h3>
                        <p>Naši stručnjaci dolaze na Vaš objekat, pregledaju prostor, uzimaju precizne mere i daju
                            stručnu procenu.</p>
                    </div>
                </div>

                <div class="step fade-in">
                    <div class="step-number">3</div>
                    <div class="step-text">
                        <h3>Pristupamo ponudi</h3>
                        <p>Na osnovu izmerenih podataka pripremamo jasnu i preciznu ponudu.</p>
                    </div>
                </div>

                <div class="step fade-in">
                    <div class="step-number">4</div>
                    <div class="step-text">
                        <h3>Dogovaramo termin</h3>
                        <p>U dogovoru sa Vama biramo idealan datum montaže i dostave proizvoda.</p>
                    </div>
                </div>

                <div class="step fade-in">
                    <div class="step-number">5</div>
                    <div class="step-text">
                        <h3>Montaža i završetak</h3>
                        <p>Naši stručnjaci dolaze, izvršavaju montažu i proveravaju kvalitet.</p>
                    </div>
                </div>
            </div>


            <a href="kontakt.php" class="btn-primary">Kontaktirajte nas</a>
        </div>
    </section>

    <!-- GLAVNA SEKCIJA USLUGA -->
    <section class="usluge-glavno fade-in">
        <h2>Šta nudimo</h2>
        <div class="usluge-grid">
            <div class="usluga-card">
                <i class="fa-solid fa-window-maximize fa-3x"></i>
                <h3>Postavka ALU i PVC prozora</h3>
                <p>Profesionalna montaža prozora i vrata, precizno i u dogovorenom roku.</p>
            </div>
            <div class="usluga-card">
                <i class="fa-solid fa-tools fa-3x"></i>
                <h3>Popravke prozora</h3>
                <p>Brza i kvalitetna zamena stakla, dihtunga i delova PVC i ALU prozora.</p>
            </div>
            <div class="usluga-card">
                <i class="fa-solid fa-house-chimney fa-3x"></i>
                <h3>Fasadni sistemi</h3>
                <p>Izrada i montaža fasadnih PVC i ALU sistema po meri.</p>
            </div>
            <div class="usluga-card">
                <i class="fa-solid fa-palette fa-3x"></i>
                <h3>Izbor boja i dekora</h3>
                <p>Pomoć pri odabiru RAL boja i RENOLIT folija za savršen izgled.</p>
            </div>
            <div class="usluga-card">
                <i class="fa-solid fa-truck fa-3x"></i>
                <h3>Brza dostava i montaža</h3>
                <p>Naša logistika obezbeđuje da Vaši proizvodi stignu na vreme i budu pravilno postavljeni.</p>
            </div>
        </div>
    </section>

    <script src="js/script.js"></script>
    <?php include 'includes/footer.php'; ?>

</body>

</html>