<!DOCTYPE html>
<html lang="de">
    <head>
        <meta name="robots" content="noindex">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>kilzer.dev</title>
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 1024px)" href="css/small.css">
        <link rel="stylesheet" type="text/css" media="screen and (min-width: 1025px)" href="css/large.css">
        <link rel="stylesheet" type="text/css" media="print" href="css/print.css">
        <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    </head>
    <body>
        <div class="container">
            <div class="wrap">
            </div>
            <div class="inhalt">
                <header>
                    <img src="img/c0dn.png" id="top" 
                    alt="Man sieht mich von schräg hinten links, wie ich gerade mitten in einem Programmierprojekt sitze. Ich schaue über die Schulter in die Kamera." 
                    title="Mitten in einem Programmierprojekt: Ein Blick über die Schulter">
                </header>
                <nav>
                    <input type="checkbox" id="menuToggle">
                    <label for="menuToggle">
                        <img src="img/menu.png" alt="Menü">
                    </label>
                    <ul id="menuList">
                        <li><a href="https://www.kilzer.dev">Home</a></li>
                        <li><a href="#about">Über Mich</a></li>
                        <li><a href="#experience">Werdegang</a></li>
                        <li><a href="#projects">Anwendungsentwicklung</a></li>
                        <li><a href="#contact">Kontakt</a></li>
                    </ul>
                </nav>
                <!-- JavaScript zum Schließen des Menüs bei Klick auf einen Link -->
                <script>
                    document.querySelectorAll('#menuList a').forEach(link => {
                        link.addEventListener('click', () => {
                            document.getElementById('menuToggle').checked = false;
                        });
                    });
                </script>
                <br><br>
                <p>Herzlich willkommen auf meiner Bewerbungswebseite!</p>

                <p>Ich freue mich, dass Sie den Weg zu meiner Webseite gefunden haben. Mein Name ist Manuel Kilzer und auf dieser Seite möchte ich Ihnen 
                    einen umfassenden Einblick in meine berufliche Laufbahn, meine Qualifikationen und meine bisherigen Projekte geben.</p>

                <p>Derzeit suche ich nach einer herausfordernden Praktikumsstelle, um meine Kenntnisse zu vertiefen und praktische Erfahrungen zu sammeln. 
                    Wenn Sie auf der Suche nach einem motivierten und engagierten Mitarbeiter sind, der sowohl technisches Verständnis als auch kreative 
                    Lösungsansätze mitbringt, dann freue ich mich darauf, von Ihnen zu hören.</p>

                <p>Vielen Dank für Ihr Interesse und viel Spaß beim Durchstöbern meiner Webseite!</p>
                <br><br>
                <section id="about" class="anchor">
                    <h3>&lt; Über Mich /&gt;</h3>
                    <img src="img/pc.png" alt="Auf diesem Bild bin ich zu sehen, wie ich gerade die alte Flüssigkeit der Wasserkühlung meiner Workstation ablasse." title="Wartung meiner Workstation: Ablassen der alten Kühlflüssigkeit aus dem Wasserkühlungssystem">
                    <p>Schon seit meiner Kindheit faszinieren mich Technik und Computer. Diese Begeisterung führte dazu, 
                    dass ich meine Workstations selbst plane und erstelle. Im Jahr 2016 begann ich mit meinem ersten Raspberry Pi, 
                    sammelte erste Erfahrungen mit Raspbian Linux und entdeckte meine Leidenschaft für das Programmieren. 
                    Seitdem hat sich das Programmieren zu einem großen Hobby entwickelt, das mich dazu brachte, einen umfassenden 
                    Python Bootcamp Kurs auf Udemy zu absolvieren.</p>

                    <p>Besonders begeistert mich die Automatisierung von Abläufen auf Webseiten mithilfe von Selenium. 
                    Im Rahmen meiner privaten Projekte habe ich unter anderem verschiedene Bots, einen Passwortmanager und einen Kalender entwickelt.</p>

                    <p>Derzeit absolviere ich eine Umschulung zum Anwendungsentwickler, die ich voraussichtlich im Februar 2026 abschließen werde. 
                    Mit meinen Python-Kenntnissen, meiner Leidenschaft für Technik und meiner Kreativität freue ich mich darauf, meine Fähigkeiten 
                    in der IT-Branche weiter auszubauen und spannende Projekte zu realisieren.</p>
                    <br><br>
                    <a href="#top" class="back-to-top">^^</a>
                    <br>
                </section>
                <section id="experience" class="anchor">
                    <h3>&lt; Werdegang /&gt;</h3>
                    <ul>
                        <li>
                            <p class="list-title">Umschulung</p>
                            <ul>
                                <li><p class="topic-title">Fachinformatiker Anwendungsentwicklung</p></li>
                                <li class="detail-container">
                                    <p class="topic-detail">GFN GmbH</p>
                                    <p class="topic-detail">Stuttgart Mitte</p>
                                    <p class="topic-detail">Seit Oktober 2023</p>
                                </li>
                                <li><p>- Fundamente der Informatik und theoretische Konzepte</p></li>
                                <li><p>- Unterricht im Online- und Homeoffice-Format</p></li>
                            </ul>
                        </li>
                        <li>
                            <p class="list-title">Berufserfahrung</p>
                            <ul>
                                <li><p class="topic-title">Mobilitätsassistent</p></li>
                                <li class="detail-container">
                                    <p class="topic-detail">SAG Stuttgart Airport Ground Handling GmbH</p>
                                    <p class="topic-detail">Flughafen Stuttgart</p>
                                    <p class="topic-detail">April 2016 - September 2023</p>
                                </li>
                                <li><p>- Betreuung beeinträchtigter Passagiere</p></li>
                                <li><p>- Begleitung von alleinreisenden Kindern</p></li>
                            </ul>
                            <ul>
                                <li><p class="topic-title">Montageanlagenbediener</p></li>                            
                                <li class="detail-container">
                                    <p class="topic-detail">Robert Bosch GmbH</p>
                                    <p class="topic-detail">Stuttgart Feuerbach</p>
                                    <p class="topic-detail">September 2013 - Februar 2015</p>
                                </li>
                                <li><p>- Bedienung und Überwachung von Montageanlagen</p></li>
                                <li><p>- Wartung und Störungsbeseitigung</p></li>
                                <li><p>- Qualitätsprüfung und Fehlerdokumentation</p></li>
                            </ul>
                        </li>
                        <li>
                            <p class="list-title">Berufsausbildung</p>
                            <ul>
                                <li><p class="topic-title">Mediengestalter Digital und Print</p></li>
                                <li class="detail-container">
                                    <p class="topic-detail">tab indivisuell Werbeagentur GmbH</p>
                                    <p class="topic-detail">Stuttgart Vaihingen</p>                                
                                    <p class="topic-detail">September 2010 - August 2013</p>
                                </li>
                                <li><p>- Entwicklung von Logos und Gestaltung von Anzeigen sowie Magazinseiten</p></li>
                                <li><p>- Umsetzung von Buchprojekten speziell für den Kinder- und Jugendbereich</p></li>
                                <li><p>- Vertiefte Kenntnisse und Anwendung der Adobe Creative Suite</p></li>
                            </ul>
                        </li>
                        <li>
                            <p class="list-title">Schulische Ausbildung</p>
                            <ul>
                                <li><p class="topic-title">Zweijährige Berufsfachschule</p></li>
                                <li class="detail-container">
                                    <p class="topic-detail">Robert Mayer Schule</p>
                                    <p class="topic-detail">Stuttgart Mitte</p>
                                    <p class="topic-detail">September 2007 - Juli 2009</p>
                                </li>
                                <li><p>- Fachschulreife</p></li>
                                <li><p>- Erweiterte Kenntnisse in metalltechnischen Verarbeitungsverfahren</p></li>
                            </ul>
                        </li>
                        <li>
                            <p class="list-title">Sonstige Tätigkeiten</p>
                            <ul>
                                <li><p class="topic-title">Grundwehrdienst Bundeswehr</p></li>
                                <li class="detail-container">
                                    <p class="topic-detail">Luftwaffenausbildungsregiment 3</p>
                                    <p class="topic-detail">Fliegerhorst Mengen</p>
                                    <p class="topic-detail">Oktober 2006 - Dezember 2006</p>
                                </li>
                                <li class="detail-container">
                                    <p class="topic-detail">Jagdbombergeschwader 32</p>
                                    <p class="topic-detail">Fliegerhorst Lechfeld</p>
                                    <p class="topic-detail">Januar 2007 - Juni 2007</p>
                                </li>
                                <li><p>- Ausbildung in militärischen Grundlagen</p></li>
                                <li><p>- Materialbeschaffung und -verwaltung</p></li>
                                <li><p>- Einplanung von Ausrüstung für Auslandseinsätze</p></li>
                            </ul>
                        </li>
                    </ul>
                    <br><br>
                    <a href="#top" class="back-to-top">^^</a>
                    <br>
                </section>
                <section id="projects" class="anchor">
                    <h3>&lt; Anwendungsentwicklung /&gt;</h3>
                    <ul>
                        <li>
                            <p class="list-title">Automatisierungen</p>
                            <ul>
                                <li><p class="topic-title">Bots zur Interaktion auf sozialen Medien</p></li>
                                <li class="detail-container">
                                    <p class="topic-detail py">Python</p>
                                    <p class="topic-detail random">Selenium</p>
                                </li>
                                <li>
                                    <p class="textabsatz">
                                        Entwicklung von Bots mit Python und Selenium zur Automatisierung von Handlungen auf Instagram und X (ehemals Twitter). 
                                        Auf Instagram liken die Bots Beiträge basierend auf Hashtags, Sprache, Alter und Followerzahl des Verfassers. Sie 
                                        durchsuchen auch die Follower-Listen themenrelevanter Accounts, um gezielt Beiträge zu liken und so den Traffic zu 
                                        steigern. Zusätzlich können sie Beiträge posten, kommentieren und Follow/Unfollow-Aktionen durchführen.
                                    </p>                                    
                                    <p>
                                        Auf X postet ein Bot automatisiert Tweets. Ein Randomisierungsalgorithmus simuliert menschliche Wartezeiten, um die 
                                        Automatisierung möglichst natürlich erscheinen zu lassen. Der umfangreiche Code der Bots wurde kontinuierlich an die 
                                        Änderungen der Webseitenstrukturen angepasst. Die Bots wurden in realen Umgebungen getestet und zielen darauf ab, die 
                                        Reichweite und Sichtbarkeit von Accounts effizient zu erhöhen.
                                    </p>
                                </li>
                            </ul>
                            <ul>
                                <li><p class="topic-title">Automatisierte Bewerbung</p></li>
                                <li class="detail-container">
                                    <p class="topic-detail py">Python</p>
                                    <p class="topic-detail random">Selenium</p>
                                    <p class="topic-detail random">OpenAI API</p>
                                    <p class="topic-detail random">SMTP</p>
                                </li>
                                <li>
                                    <p class="textabsatz">
                                        Dieses Projekt nutzt Python zur Automatisierung des Bewerbungsprozesses, indem es Jobbörsen nach definierten Kriterien durchsucht, 
                                        relevante Links extrahiert und Daten abgleicht. Mithilfe von Regex oder GPT werden Ansprechpartner identifiziert und die passende 
                                        Ansprache formuliert. Das Versenden der E-Mails geschieht automatisch über die SMTP-Schnittstelle meines Webspace.
                                    </p>
                                    <p>
                                        Dieses Projekt der automatisierten Bewerbungen ist für mich mehr als nur eine technische Demonstration. Es ist ein direkter Beweis 
                                        meiner Fähigkeiten als angehender Fachinformatiker für Anwendungsentwicklung. Die Motivation dahinter war es, mein Können zu zeigen 
                                        und mich im Bewerbungsprozess von anderen abzuheben. Automatisierung begeistert mich. Ich sehe darin die Möglichkeit, Prozesse effizienter 
                                        zu gestalten, und habe dieses Interesse mit meinem technologischen Know-how kombiniert, um den Bewerbungsprozess zu optimieren und mehr 
                                        Spaß dabei zu haben.
                                    </p>
                                    <p>
                                        <a class="down-link" href="https://github.com/tw0x88/Bewerbungs-Automatisierungs-Tool" target=_blank>GitHub</a>
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <p class="list-title">Anwendungen</p>
                            <ul>
                                <li><p class="topic-title">Passwort-Manager</p></li>
                                <li class="detail-container">
                                    <p class="topic-detail py">Python</p>
                                    <p class="topic-detail sql">SQLite</p>                                    
                                    <p class="topic-detail random">GUI</p>
                                </li>
                                <li>
                                    <p>
                                        Mein Passwort-Manager, entwickelt in Python mit einer GUI durch das Tkinter-Modul, bietet eine sichere Lösung zur Verwaltung von Passwörtern 
                                        und Accounts in einer AES-verschlüsselten Datenbank. Er ermöglicht das Generieren, Speichern, Bearbeiten und Löschen von Passwörtern mit 
                                        einfacher Handhabung. Durch einen Klick können Passwörter und andere wichtige Informationen direkt in die Zwischenablage kopiert werden, 
                                        was den Zugriff auf sensible Daten erleichtert. Besonders wichtig ist die automatische Leerung der Zwischenablage beim Schließen der Anwendung, 
                                        um die Sicherheit zu maximieren. Dieser Passwort-Manager vereint Benutzerfreundlichkeit mit robusten Sicherheitsfunktionen für eine effiziente 
                                        und sichere Passwortverwaltung.
                                    </p>
                                </li>
                            </ul>
                            <ul>
                                <li><p class="topic-title">Kalender</p></li>                            
                                <li class="detail-container">
                                    <p class="topic-detail py">Python</p>
                                    <p class="topic-detail sql">SQLite</p>                                    
                                    <p class="topic-detail random">GUI</p>
                                </li>
                                <li>
                                    <p>
                                    Ebenfalls in Python Entwickelt, ermöglicht dieser Kalender das einfache Hinzufügen, Löschen und Verwalten von Terminen. Besonders nützlich sind die Funktionen 
                                    für wiederkehrende Termine wie Geburtstage, die automatisch jedes Jahr angezeigt werden.
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <p class="list-title">Web</p>
                            <ul>
                                <li><p class="topic-title">Bewerbungswebseite</p></li>
                                <li class="detail-container">
                                    <p class="topic-detail html">HTML</p>
                                    <p class="topic-detail css">CSS</p>                               
                                    <p class="topic-detail php">PHP</p>                               
                                </li>
                                <li>
                                    <p>
                                        Diese Webseite ist ein simpler One-Pager, den ich erstellt habe, um meine HTML- und CSS-Kenntnisse aufzufrischen. Sie dient 
                                        dazu, meinen beruflichen Werdegang sowie meine Programmierfähigkeiten übersichtlich darzustellen. Durch die Nutzung moderner 
                                        Techniken und Stilelemente demonstriere ich meine Fähigkeiten in der Webentwicklung. Die Webseite bietet einen strukturierten 
                                        Überblick über meine beruflichen Erfahrungen und technischen Kompetenzen.
                                    </p>
                                </li>
                            </ul>
                            <ul>
                                <li><p class="topic-title">Schnellwahl- und Linkübersicht</p></li>
                                <li class="detail-container">
                                    <p class="topic-detail html">HTML</p>
                                    <p class="topic-detail css">CSS</p>                               
                                    <p class="topic-detail js">JavaScript</p>                                 
                                </li>
                                <li>
                                    <p>
                                        Dieses Projekt ist meine personalisierte Startseite, die Weblinks als Buttons anzeigt. Das moderne Design ist auf 
                                        meine Bedürfnisse zugeschnitten und enthält eine integrierte Uhr und Datum-Anzeige, die mit JavaScript umgesetzt wurde. Eine 
                                        Google-Suchleiste ist ebenfalls integriert.
                                    </p>
                                    <p>
                                        <a class="down-link" href="schnellwahl">Code</a><a class="down-link" href="/demos/schnellwahl/index.html" target="_blank">Demo</a>
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <p class="list-title">Weitere</p>
                            <ul>
                                <li><p>- Automatisches Backup meiner privaten Datensammlung.</p></li>
                                <li><p>- Binance.com API-Bots zum Kaufen und Verkaufen von Kryptowährungen.</p></li>
                                <li><p>- Automatisiertes Ein- und Ausstempeln in Schulungssoftware.</p></li>
                                <li><p>- ÖPNV Abfahrttafel über TRIAS API des VVS.</p></li>
                                <li><p>- uvm.</p></li>
                            </ul>
                        </li>
                    </ul>
                    <br><br>
                    <a href="#top" class="back-to-top">^^</a>
                    <br>
                </section>
                <section id="contact" class="anchor">
                    <h3>&lt; Kontakt /&gt;</h3>
                    <img src="img/dr0n3_m4p_small.png" alt="Drohnenaufnahme meines Wohnorts mit Blick nach Nord-Ost in Richtung Stuttgart." title="Drohnenaufnahme: Stuttgart Rohr Blick nach Nord-Ost auf das Industriegebiet Vaihingen Möhringen">
                    <p>Falls ich Ihr Interesse geweckt habe oder Sie Fragen haben, freue ich mich darauf, von Ihnen zu hören. Bitte zögern Sie nicht, mir eine Nachricht zu senden.</p>
                    <form action="kontakt" method="post">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                        <label for="message">Nachricht:</label>
                        <textarea id="message" name="message" required></textarea>
                        <button type="submit">Absenden</button>
                    </form>
                    <p>Email: manuel@kilzer.dev<br>
                    Telefon: 0174 / 4335483</p>
                    <p><a href="https://www.xing.com/profile/Manuel_Kilzer" target="_blank" alt="Link zu meinem Xing Profil">Xing</a></p>
                    <p><a href="https://www.get-in-it.de/profil/G1dWPYucF22ayAFFGGs0x4STQIW5mHQ1" target="_blank" alt="Link zu meinem Xing Profil">get-in-it</a></p>
                    <br><br>
                    <a href="#top" class="back-to-top">^^</a>
                    <br>
                </section>
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