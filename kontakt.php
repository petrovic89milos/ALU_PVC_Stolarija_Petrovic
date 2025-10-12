<?php include 'includes/header.php'; ?>
<?php include 'includes/db.php'; ?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = htmlspecialchars($_POST['ime']);
    $email = htmlspecialchars($_POST['email']);
    $telefon = htmlspecialchars($_POST['telefon']);
    $poruka = htmlspecialchars($_POST['poruka']);

    if (!empty($ime) && !empty($email) && !empty($poruka)) {
        // Unos u bazu
        $stmt = $conn->prepare("INSERT INTO kontakt_poruke (ime, email, telefon, poruka) VALUES (?, ?, ?, ?)");
        if ($stmt->execute([$ime, $email, $telefon, $poruka])) {
            // Slanje mejla preko Gmail-a
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'milos.petrovic9034@gmail.com'; // tvoj Gmail
                $mail->Password = 'rtwk eadf igwa eysi';    // App Password iz Gmail-a
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                // Primaoci
                $mail->setFrom('milos.petrovic9034@gmail.com', 'ALU & PVC Stolarija Petrović');
                $mail->addAddress('milos.petrovic9034@gmail.com'); // ili neka druga adresa primaoca


                // Sadržaj mejla
                $mail->isHTML(true);
                $mail->Subject = "Nova poruka sa kontakt forme";
                $mail->Body = "
                    <b>Ime:</b> $ime<br>
                    <b>Email:</b> $email<br>
                    <b>Telefon:</b> $telefon<br>
                    <b>Poruka:</b> $poruka
                ";

                $mail->send();
                $success = "Poruka je uspešno poslata!";
            } catch (Exception $e) {
                $error = "Poruka nije poslata. Greška: {$mail->ErrorInfo}";
            }
        } else {
            $error = "Došlo je do greške prilikom čuvanja poruke. Pokušajte ponovo.";
        }
    } else {
        $error = "Molimo popunite obavezna polja: ime, email i poruka.";
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALU & PVC Stolarija Petrović</title>
    <meta name="description" content="Kvalitetni ALU i PVC prozori i vrata u Rumi. Profesionalna montaža i servis.">
    <meta name="keywords" content="PVC prozori, ALU prozori, stolarija, Ruma">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<main>
    <section class="kontakt">
        <h2>Kontaktirajte nas</h2>
        <p>Pošaljite nam poruku i odgovorićemo vam što pre.</p>

        <?php if ($success): ?>
            <div class="success"><?= $success; ?></div>
        <?php endif; ?>

        <?php if ($error): ?>
            <div class="error"><?= $error; ?></div>
        <?php endif; ?>

        <form action="" method="post" class="kontakt-form">
            <input type="text" name="ime" placeholder="Vaše ime" required>
            <input type="email" name="email" placeholder="Vaš email" required>
            <input type="text" name="telefon" placeholder="Vaš telefon (opciono)">
            <textarea name="poruka" rows="5" placeholder="Vaša poruka" required></textarea>
            <button type="submit">Pošalji</button>
        </form>
    </section>
</main>

<!-- Google mapa -->
<div class="map-container">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2906.6625733528883!2d20.517123!3d45.000456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475b0e03e27b92f9%3A0x8f5b2e5f2e7e7e0b!2sMladen%20Stojanovi%C4%87%2030%2C%20Ruma!5e0!3m2!1ssr!2srs!4v1696764131234!5m2!1ssr!2srs"
        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

<?php include 'includes/footer.php'; ?>
<script src="js/script.js"></script>