<!DOCTYPE html>
<html lang="de">
    <head>
        <meta name="robots" content="noindex">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="30;url=https://www.kilzer.dev">
        <title>kilzer.dev Kontakt Antwort</title>
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 1024px)" href="css/small.css">
        <link rel="stylesheet" type="text/css" media="screen and (min-width: 1025px)" href="css/large.css">
        <link rel="stylesheet" type="text/css" media="print" href="/css/print.css">
        <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    </head>
    <body>
        <div class="container">
            <div class="wrap">
            </div>
            <div class="inhalt">
                <header>
                    <img src="/img/c0dn.png" alt="">
                </header>
                <nav>
                    <input type="checkbox" id="menuToggle">
                    <label for="menuToggle">
                        <img src="img/menu.png" alt="Menü">
                    </label>
                    <ul id="menuList">
                        <li><a href="https://www.kilzer.dev">Home</a></li>
                    </ul>
                </nav>
                <section id="contact_answer">
                    <h3>&lt; Kontaktanfrage /&gt;</h3>

                    <?php
                    $espBlock = ["@gmail.com", "@yahoo.com", "@outlook.com", "@hotmail.com", "@live.com", "@icloud.com", "@me.com", "@mac.com", "@aol.com", "@gmx.com", "@yandex.com", "@zoho.com", "@protonmail.com", "@mail.ru", "@web.de"];

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Formulardaten abrufen und validieren
                        $name = isset($_POST['name']) ? filter_var($_POST['name'], FILTER_SANITIZE_STRING) : '';
                        $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : '';
                        $message = isset($_POST['message']) ? filter_var($_POST['message'], FILTER_SANITIZE_STRING) : '';

                        // Überprüfen, ob alle Felder korrekt ausgefüllt sind
                        if (!empty($name) && $email && !empty($message)) {
                            // E-Mail-Adresse in Kleinbuchstaben umwandeln
                            $email = strtolower($email);

                            // Überprüfen, ob die E-Mail-Adresse gesperrt ist
                            $espFlag = false;
                            foreach ($espBlock as $esp) {
                                if (strpos($email, $esp) !== false) {
                                    echo "<p>Aufgrund von Spam-Attacken sind E-Mail-Dienstanbieter für Verbraucher oder öffentliche E-Mail-Anbieter wie zum Beispiel gmail.com oder yahoo.com gesperrt. Bitte verwenden Sie eine E-Mail-Adresse Ihrer Firma!</p>";
                                    echo "<br>";
                                    echo "<p>Due to spam attacks, consumer email service providers or public email providers such as gmail.com or yahoo.com are blocked. Please use a company email address!</p>";
                                    $espFlag = true;
                                    break;
                                }
                            }

                            if (!$espFlag) {
                                // E-Mail senden
                                $to = "manuel@kilzer.dev";
                                $subject = "Neue Kontaktanfrage von $name";
                                $from = "kontaktformular@kilzer.dev";
                                $headers = "From: $from\r\n";
                                $headers .= "Reply-To: $email\r\n";
                                $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
                                $email_body = "Name: $name\n";
                                $email_body .= "E-Mail: $email\n";
                                $email_body .= "Nachricht:\n$message\n";

                                if (mail($to, $subject, $email_body, $headers)) {
                                    echo "<p>Danke für Ihre Nachricht. Ich werde mich umgehend bei Ihnen melden.</p>";
                                } else {
                                    echo "<p>Entschuldigung, beim Senden Ihrer Nachricht ist ein Fehler aufgetreten.</p>";
                                }
                            }
                        } else {
                            echo "<p>Bitte füllen Sie alle Felder korrekt aus.</p>";
                        }
                    }
                    ?>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                <footer>
                    <p>&copy; <?php echo date("Y"); ?> Manuel Kilzer. Alle Rechte vorbehalten.</p>
                    <p><a href="impress">Impressum</a></p>
                    <p><a href="datenschutz.html">Datenschutzerklärung</a></p>
                </footer>
            </div>
            <div class="wrap">
            </div>
        </div>
    </body>
</html>