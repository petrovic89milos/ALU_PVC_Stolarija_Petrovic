<!DOCTYPE html>
<html lang="sr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekti | ALU & PVC Stolarija Petrović</title>
    <meta name="description" content="Galerija naših realizovanih projekata u oblasti ALU i PVC stolarije.">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

    <?php include 'includes/header.php'; ?>

    <main>
        <section class="projekti-hero">
            <img src="slike/projektihero.jpg" alt="Projekti Hero" class="projekti-hero-img">
            <div class="projekti-hero-overlay"></div>
            <div class="projekti-hero-text">
                <h1>Projekti</h1>
                <p>Pogledajte neke od naših realizovanih projekata — od stambenih objekata do komercijalnih rešenja.</p>
            </div>
        </section>


        <section class="projekti-galerija">
            <div class="projekti-filter">
                <button class="filter-btn active" data-filter="svi">Svi</button>
                <button class="filter-btn" data-filter="stambeni">Stambeni</button>
                <button class="filter-btn" data-filter="poslovni">Poslovni</button>
                <button class="filter-btn" data-filter="industrijski">Industrijski</button>
            </div>

            <div class="projekti-grid">
                <div class="projekat-card" data-category="stambeni">
                    <a href="slike/projekat1.jpg" target="_blank">
                        <img src="slike/projekat1.jpg" alt="Projekat 1">
                    </a>
                    <div class="projekat-info">
                        <h3>Kuća Novi Sad</h3>
                        <p>Ugradnja ALU prozora</p>
                    </div>
                </div>

                <div class="projekat-card" data-category="poslovni">
                    <a href="slike/projekat2.jpg" target="_blank">
                        <img src="slike/projekat2.jpg" alt="Projekat 2">
                    </a>
                    <div class="projekat-info">
                        <h3>Poslovna zgrada Beograd</h3>
                        <p>Veliki ALU paneli i ulazni sistemi</p>
                    </div>
                </div>

                <div class="projekat-card" data-category="industrijski">
                    <a href="slike/projekat3.jpg" target="_blank">
                        <img src="slike/projekat3.jpg" alt="Projekat 3">
                    </a>
                    <div class="projekat-info">
                        <h3>Fabrika Šabac</h3>
                        <p>Ugradnja PVC prozora</p>
                    </div>
                </div>

                <div class="projekat-card" data-category="stambeni">
                    <a href="slike/projekat4.jpg" target="_blank">
                        <img src="slike/projekat4.jpg" alt="Projekat 4">
                    </a>
                    <div class="projekat-info">
                        <h3>Porodična kuća Ruma</h3>
                        <p>Ugradnja ALU kliznih vrata</p>
                    </div>
                </div>

                <div class="projekat-card" data-category="poslovni">
                    <a href="slike/projekat5.jpg" target="_blank">
                        <img src="slike/projekat5.jpg" alt="Projekat 5">
                    </a>
                    <div class="projekat-info">
                        <h3>Office centar Pančevo</h3>
                        <p>Kompletna ALU stolarija sa svetlim profilima</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="projekti-poziv">
            <h2>Želite da budete deo naših referenci?</h2>
            <p>Kontaktirajte nas i prezentovaćemo idejna rešenja za vaš objekat.</p>
            <a href="kontakt.php" class="projekti-btn">Kontaktirajte nas</a>
        </section>
    </main>
    <section class="materijali">
        <div class="materijali-wrapper fade-in">
            <div class="materijali-slika">
                <img src="slike/presek.jpg" alt="Polupresek prozora ALU/PVC">
            </div>
            <div class="materijali-tekst">
                <h2>Materijali naših prozora</h2>
                <div class="materijali-grid">
                    <div class="materijal-card alu">
                        <h3>ALU prozori</h3>
                        <p>Lagani i izdržljivi aluminijumski profili sa modernim dizajnom, idealni za velike staklene
                            površine i poslovne objekte.</p>
                    </div>
                    <div class="materijal-card pvc">
                        <h3>PVC prozori</h3>
                        <p>Kvalitetni PVC profili sa višekomornim sistemom, odlična termo i zvučna izolacija, dug vek
                            trajanja i nisko održavanje.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="js/script.js"></script>
</body>

</html>