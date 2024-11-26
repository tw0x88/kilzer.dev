<!DOCTYPE html>
<html lang="de">
    <head>
        <meta name="robots" content="noindex">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>kilzer.dev Projekt Schnellwahl</title>
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 1024px)" href="css/small.css">
        <link rel="stylesheet" type="text/css" media="screen and (min-width: 1025px)" href="css/large.css">
        <link rel="stylesheet" type="text/css" media="print" href="/css/print.css">
        <link href="/css/prism.css" rel="stylesheet" />
        <link href="/css/prism_lines.css" rel="stylesheet" />
        <script src="/js/prism.js"></script>
        <script src="/js/prism_lines.js"></script>
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
                        <li><a href="#struktur">Ordnerstruktur</a></li>
                        <li><a href="#index">index.html</a></li>
                        <li><a href="#datum">datum.html</a></li>
                        <li><a href="#style">style.css</a></li>
                        <li><a href="#datumcss">datum.css</a></li>
                        <li><a href="/demos/schnellwahl/index.html" target="_blank">Demo</a></li>
                    </ul>
                </nav>
                <section id="projekt">
                    <br><br>
                    <p>In meiner Freizeit habe ich eine personalisierte Startseite für den Browser entwickelt, die mir hilft, 
                        effizienter und fokussierter zu arbeiten. Die Seite ermöglicht mir schnellen Zugriff auf meine am häufigsten 
                        genutzten Webseiten und vermeidet unerwünschte Werbung, was bei fertigen Lösungen oft ein Problem darstellt. 
                        Mit meiner eigenen Schnellwahl habe ich die volle Kontrolle über die Inhalte und das Design. Die Startseite 
                        bietet große, bebilderte Schaltflächen, eine integrierte Google-Suche und einen Slider, der zwischen Freizeit- 
                        und Produktivitätsmodus umschaltet, um Ablenkungen während der Arbeit zu minimieren. Für die Entwicklung habe 
                        ich HTML, CSS und JavaScript verwendet, was mir ermöglichte, eine benutzerfreundliche und ansprechende 
                        Oberfläche zu schaffen.
                    </p>
                    <p>
                        Während der Entwicklung habe ich gelernt, was notwendig ist, um ein einfaches, aber funktionierendes Produkt zu 
                        entwickeln und wie man verschiedene Komponenten kombiniert, um die gewünschten Funktionen zu realisieren. Seit 
                        über drei Jahren nutze ich diese Startseite täglich und habe festgestellt, dass sie meine Produktivität steigert. 
                        Das letzte größere Update, bei dem der Slider für den Wechsel zwischen den Modi hinzugefügt wurde, hat die Seite 
                        noch nützlicher gemacht. Jetzt kann ich Ablenkungen noch gezielter vermeiden und mich besser auf meine Aufgaben 
                        konzentrieren.
                    </p>
                    <br><br>
                    <h3 id="struktur" class="anchor">&lt; Ordnerstruktur /&gt;</h3>
                    <p>
                        Schnellwahl<br>
                        │<br>
                        │ &nbsp; &nbsp; &nbsp;datum.html<br>
                        │ &nbsp; &nbsp; &nbsp;index.html<br>
                        │<br>
                        │ ─── bilder<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;127001.png<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;amazon.png<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;dev.png<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ebay.png<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ebaykl.png<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;favicon.png<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;gearth.png<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;gfn.png<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;gmail.png<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;gmaps.png<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;gpt.png<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;gtranslate.png<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;insta.png<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;netflix.png<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ntv.png<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;onedrive.png<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;rb.png<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;twitter.png<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;udemy.png<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;xing.png<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;yahoo.png<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;youtube.png<br>
                        │<br>
                        │ ─── css<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; datum.css<br>
                        │ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; style.css
                    </p>
                    <br><br>
                    <h3 id="index" class="anchor">&lt; index.html /&gt;</h3>
<pre class="line-numbers" data-start="1">
<code class="language-html">&lt;!doctype html&gt;
&lt;!-- Browser Linksammlung --&gt;
&lt;html lang="de"&gt;
    &lt;head&gt;
        &lt;meta name="robots" content="noindex"&gt;
        &lt;meta charset="UTF-8"&gt;
        &lt;meta name="author" content="Manuel Kilzer" /&gt;
        &lt;meta name="copyright" content="Manuel Kilzer" /&gt;
        &lt;link rel="icon" type="image/png" href="bilder/favicon.png"&gt;
        &lt;link rel="stylesheet" href="css/style.css"&gt;
        &lt;title&gt;Schnellwahl&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;iframe id="datum" src="datum.html"&gt;&lt;/iframe&gt; &lt;!--Datum und Uhrzeit mit Javascript in iFrame--&gt;
        &lt;input type="checkbox" id="slider" class="slider"&gt;
        &lt;label for="slider" class="slider-label"&gt;
            &lt;span class="slider-ball"&gt;&lt;/span&gt;
        &lt;/label&gt;
        &lt;div id="content-off"&gt;
            &lt;p&gt;Freizeit&lt;/p&gt;
        &lt;/div&gt;
        &lt;div id="content-on"&gt;
            &lt;p&gt;Produktiv&lt;/p&gt;
        &lt;/div&gt;
        &lt;div id="google_div"&gt;
            &lt;form class="google_form" method="get" action="http://www.google.de/search" target="_blank"&gt;
                &lt;input id="google_textfeld" onfocus="this.value=''" name="q" type="text" size="60" maxlength="255"/&gt;
                &lt;input id="google_button" type="submit" value="Google Suche"/&gt;
            &lt;/form&gt;
        &lt;/div&gt;
        &lt;div class="links_div"&gt;
            &lt;a class="link freizeit" href="https://www.youtube.com" target="_blank"&gt;&lt;img src="bilder/youtube.png" class="link_image"/&gt;&lt;/a&gt;
            &lt;a class="link freizeit" href="https://www.netflix.com/de/" target="_blank"&gt;&lt;img src="bilder/netflix.png" class="link_image"/&gt;&lt;/a&gt;
            &lt;a class="link freizeit" href="https://www.amazon.de" target="_blank"&gt;&lt;img src="bilder/amazon.png" class="link_image"/&gt;&lt;/a&gt;
            &lt;a class="link freizeit" href="https://www.ebay.de" target="_blank"&gt;&lt;img src="bilder/ebay.png" class="link_image"/&gt;&lt;/a&gt;
            &lt;a class="link freizeit" href="https://www.kleinanzeigen.de" target="_blank"&gt;&lt;img src="bilder/ebaykl.png" class="link_image"/&gt;&lt;/a&gt;
            &lt;a class="link" href="https://onedrive.live.com" target="_blank"&gt;&lt;img src="bilder/onedrive.png" class="link_image"/&gt;&lt;/a&gt;
            &lt;a class="link" href="https://mail.google.com" target="_blank"&gt;&lt;img src="bilder/gmail.png" class="link_image"/&gt;&lt;/a&gt;
            &lt;a class="link" href="https://de.yahoo.com" target="_blank"&gt;&lt;img src="bilder/yahoo.png" class="link_image"/&gt;&lt;/a&gt;
            &lt;a class="link" href="https://translate.google.com/?hl=de" target="_blank"&gt;&lt;img src="bilder/gtranslate.png" class="link_image"/&gt;&lt;/a&gt;
            &lt;a class="link freizeit" href="https://www.n-tv.de" target="_blank"&gt;&lt;img src="bilder/ntv.png" class="link_image"/&gt;&lt;/a&gt;
            &lt;a class="link" href="https://chat.openai.com/chat" target="_blank"&gt;&lt;img src="bilder/gpt.png" class="link_image"/&gt;&lt;/a&gt;
            &lt;a class="link freizeit" href="https://twitter.com" target="_blank"&gt;&lt;img src="bilder/twitter.png" class="link_image"/&gt;&lt;/a&gt;
            &lt;a class="link freizeit" href="https://www.instagram.com" target="_blank"&gt;&lt;img src="bilder/insta.png" class="link_image"/&gt;&lt;/a&gt;
            &lt;a class="link" href="https://www.google.de/maps" target="_blank"&gt;&lt;img src="bilder/gmaps.png" class="link_image"/&gt;&lt;/a&gt;
            &lt;a class="link" href="https://earth.google.com/web/" target="_blank"&gt;&lt;img src="bilder/gearth.png" class="link_image"/&gt;&lt;/a&gt;
            &lt;a class="link arbeit" href="http://127.0.0.1:8000" target="_blank"&gt;&lt;img src="bilder/127001.png" class="link_image"/&gt;&lt;/a&gt;
            &lt;a class="link arbeit" href="https://www.udemy.com" target="_blank"&gt;&lt;img src="bilder/udemy.png" class="link_image"/&gt;&lt;/a&gt;
            &lt;a class="link freizeit" href="https://www.redbubble.com" target="_blank"&gt;&lt;img src="bilder/rb.png" class="link_image"/&gt;&lt;/a&gt;
            &lt;a class="link arbeit" href="https://lernplattform.gfn.de" target="_blank"&gt;&lt;img src="bilder/gfn.png" class="link_image"/&gt;&lt;/a&gt;
            &lt;a class="link arbeit" href="https://www.xing.com/" target="_blank"&gt;&lt;img src="bilder/xing.png" class="link_image"/&gt;&lt;/a&gt;
            &lt;a class="link" href="https://www.kilzer.dev" target="_blank"&gt;&lt;img src="bilder/dev.png" class="link_image"/&gt;&lt;/a&gt;
            &lt;!-- &lt;a class="link" href="http://www." target="_blank"&gt;&lt;img src="bilder/.png" class="link_image"/&gt;&lt;/a&gt; --&gt;
        &lt;/div&gt;
        &lt;script&gt;
                    document.addEventListener("DOMContentLoaded", function() {
                        const slider = document.getElementById("slider");
                        const contentOn = document.getElementById("content-on");
                        const contentOff = document.getElementById("content-off");
                        const free_elements = document.getElementsByClassName("freizeit");
                        const work_elements = document.getElementsByClassName("arbeit");
                        const body = document.body;

                        slider.addEventListener("change", function() {
                            if (slider.checked) {
                                contentOn.style.display = "block";
                                contentOff.style.display = "none";
                                for (let i = 0; i &lt; free_elements.length; i++) {
                                    let f_element = free_elements[i];
                                    f_element.style.display = "none"
                                }
                                for (let i = 0; i &lt; work_elements.length; i++) {
                                    let w_element = work_elements[i];
                                    w_element.style.display = "inline-block"
                                }
                                body.style.background = 'linear-gradient(165deg, rgba(0,1,1,1) 3%, rgba(29,253,235,1) 50%, rgba(252,176,69,1) 97%)';
                            } else {
                                contentOn.style.display = "none";
                                contentOff.style.display = "block";
                                for (let i = 0; i &lt; free_elements.length; i++) {
                                    let f_element = free_elements[i];
                                    f_element.style.display = "inline-block"
                                }
                                for (let i = 0; i &lt; work_elements.length; i++) {
                                    let w_element = work_elements[i];
                                    w_element.style.display = "none"
                                }
                                body.style.background = 'linear-gradient(165deg, rgba(0,1,1,1) 3%, rgba(166,25,6,1) 50%, rgba(158,106,33,1) 97%)';
                            }
                        });
                        if (slider.checked) {
                            contentOn.style.display = "block";
                            contentOff.style.display = "none";
                        } else {
                            contentOn.style.display = "none";
                            contentOff.style.display = "block";
                            for (let i = 0; i &lt; free_elements.length; i++) {
                                    let f_element = free_elements[i];
                                    f_element.style.display = "inline-block"
                                }
                                for (let i = 0; i &lt; work_elements.length; i++) {
                                    let w_element = work_elements[i];
                                    w_element.style.display = "none"
                                }
                                body.style.background = 'linear-gradient(165deg, rgba(0,1,1,1) 3%, rgba(166,25,6,1) 50%, rgba(158,106,33,1) 97%)';
                        }
                    });
            &lt;/script&gt;
      &lt;br&gt;
      &lt;br&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
                    <a href="#top" class="back-to-top">^^</a>
                    <br><br>
                    <h3 id="datum" class="anchor">&lt; datum.html /&gt;</h3>
<pre class="line-numbers" data-start="1">
<code class="language-html">&lt;!doctype html&gt;
&lt;html lang="de"&gt;
	&lt;head&gt;
		&lt;meta http-equiv="Refresh" content="20; url=datum.html" /&gt;
		&lt;meta charset="UTF-8"&gt;
		&lt;title&gt;Datum&lt;/title&gt;
		&lt;link rel="stylesheet" href="css/datum.css"&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;p id="datum"&gt;
			&lt;script type="text/javascript"&gt;
                            var now = new Date();
                            var hour_raw = now.getHours();
                            var minute_raw = now.getMinutes();
                            if (hour_raw &lt; 10) {
                                var hour = "0" + hour_raw; 
                            }
                            else {
                                var hour = hour_raw;
                            }
                            if (minute_raw &lt; 10) {
                                var minute = "0" + minute_raw; 
                            }
                            else {
                                var minute = minute_raw;
                            }
                            document.write(now.getDate(),'.',now.getMonth()+1,'.',now.getFullYear(),'&lt;br&gt;');
                            document.write(hour,':',minute,' Uhr');
                    &lt;/script&gt;
		&lt;/p&gt;
	&lt;/body&gt;
&lt;/html&gt;
</code></pre>
                    <a href="#top" class="back-to-top">^^</a>
                    <br><br>
                    <h3 id="style" class="anchor">&lt; style.css /&gt;</h3>
<pre class="line-numbers" data-start="1">
<code class="language-css"><?php include_once($_SERVER['DOCUMENT_ROOT'] . '/demos/schnellwahl/css/style.css'); ?></code></pre>
                    <a href="#top" class="back-to-top">^^</a>
                    <br><br>
                    <h3 id="datumcss" class="anchor">&lt; datum.css /&gt;</h3>
<pre class="line-numbers" data-start="1">
<code class="language-css"><?php include_once($_SERVER['DOCUMENT_ROOT'] . '/demos/schnellwahl/css/datum.css'); ?></code></pre>
                    <br>
                    <a class="down-link" href="/demos/schnellwahl/index.html" target="_blank">Demo</a>
                    <br>
                    <a href="#top" class="back-to-top">^^</a>
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