<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        // Verhindert, dass der Browser beim Neuladen die Scrollposition speichert
        if ('scrollRestoration' in history) {
            history.scrollRestoration = 'manual';
        }
        window.addEventListener('load', function() {
            window.scrollTo(0, 0);
        });
    </script>
    <title>Erik Bartho</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="hero">
        <video autoplay muted loop class="background-video">
            <source src="videos/Test_Showreel_Stumm_Kurz.mp4" type="video/mp4">
            Dein Browser unterstützt keine Videos.
        </video>
        <nav class="navbar">
            <div class="logo">
                <img src="Images/Erik_Bartho_Media_Logo_WeißaNichts_500x500.png" alt="Logo">
            </div>
            <ul class="nav-links">
                <!-- Dieser Link hat nun auch smooth scroll -->
                <li><a href="#kontakt">Kontakt</a></li>
                <li><a href="impressum.html">Impressum</a></li>
            </ul>
        </nav>
        <div class="hero-content">
            <h1></h1>
        </div>
    </header>

    <section class="intro">
        <h2>Erreichen Sie Ihre Unternehmensziele durch einen Film</h2>
        <p>Nutzen Sie das bahnbrechende Instrument dieser Ära, um Ihren Ruf als führender Anbieter in Ihrem Bereich zu festigen und dadurch langfristig Kundenbindung und Mitarbeitergewinnung zu steigern.</p>
        <!-- Der CTA-Button verweist ebenfalls auf #kontakt -->
        <a href="#kontakt" class="cta-button">Unverbindliche Beratung</a>
    </section>

    <section class="services">
        <h2>Aktuelle Leistungen</h2>
        <div class="card-container">
            <div class="service-card" onclick="toggleCard(this)">
                <div class="service-card-inner">
                    <!-- Vorderseite -->
                    <div class="service-card-front">
                        <div class="front-wrapper">
                            <video muted loop autoplay>
                                <source src="169.mp4" type="video/mp4">
                                Ihr Browser unterstützt keine Videos.
                            </video>
                        </div>
                       
                        <h3>Social Media für Immobilien – Aufmerksamkeit, die verkauft</h3>
                        <p>Professionelle Videos, die Ihre Objekte ins beste Licht rücken.</p>
                    </div>
                    <!-- Rückseite -->
                    <div class="service-card-back">
                        <div class="back-container">
                        
                            <video muted loop autoplay class="back-video">
                                <source src="back.mp4" type="video/mp4">
                                Ihr Browser unterstützt keine Videos.
                            </video>
                            <div class="price-columns">
                                <div>
                                    <strong>Basis-Paket: <br>0 €</strong>
                                    <ul>
                                        <li>30-sekündiges Instagram Reel</li>
                                        <li>Optimal für eine Wohnung</li>
                                        <li>Professionelle Aufnahmen des Objekts</li>
                                        <li>Grundlegender Schnitt mit Musik</li>
                                        <li>Bearbeitung mit Farbkorrektur und Branding</li>
                                    </ul>
                                </div>
                                <div>
                                    <strong>Premium-Paket: <br>0 €</strong>
                                    <ul>
                                        <li>60-sekündiges Instagram Reel</li>
                                        <li>Optimal für ein Haus</li>
                                        <li>Drohnenaufnahmen und Innenraum-Details</li>
                                        <li>Erweiterte Bearbeitung mit Farbkorrektur und Branding</li>
                                    </ul>
                                </div>
                                <div>
                                    <strong>Deluxe-Paket: <br>0 €</strong>
                                    <ul>
                                        <li>90-sekündiges Immobilien-Tour-Video</li>
                                        <li>Optimal für eine Villa, die mehr Aufmerksamkeit braucht</li>
                                        <li>Makler-geführte Besichtigung</li>
                                        <li>Premium-Bearbeitung inkl. Farbkorrektur/Untertitel/Branding</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        function toggleCard(card) {
            card.classList.toggle('flipped');
            const video = card.querySelector('.back-video');
            if (card.classList.contains('flipped')) {
                video.play();
            } else {
                video.pause();
                video.currentTime = 0;
            }
        }
    </script>

    <section class="process-section">
        <h2>Prozess</h2>
        <div class="process-container">
            <div class="process-step">
                <div class="step-circle">1</div>
                <h3>Konzept Erstellung</h3>
                <p>Wir analysieren Ihre Anforderungen.</p>
            </div>
            <div class="process-line"></div>
            <div class="process-step">
                <div class="step-circle">2</div>
                <h3>Zielgruppen Findung</h3>
                <p>Wir finden ihre gewünschte Zielgruppe.</p>
            </div>
            <div class="process-line"></div>
            <div class="process-step">
                <div class="step-circle">3</div>
                <h3>Produktion</h3>
                <p>Wir setzen den Plan in die Realität um.</p>
            </div>
            <div class="process-line"></div>
            <div class="process-step">
                <div class="step-circle">4</div>
                <h3>Postproduktion</h3>
                <p>Wir fügen alles zu einem fertigen Endprodukt zusammen.</p>
            </div>
            <div class="process-line"></div>
            <div class="process-step">
                <div class="step-circle">5</div>
                <h3>Sounddesign</h3>
                <p>Wir untermalen ihr Video mit der passenden Musik.</p>
            </div>
            <div class="process-line"></div>
            <div class="process-step">
                <div class="step-circle">6</div>
                <h3>Lieferung</h3>
                <p>Das Endprodukt wird geliefert und übertrifft Ihre Erwartungen.</p>
            </div>
        </div>
    </section>

    <script>
        // Custom smooth scrolling function with adjustable speed
        function smoothScroll(targetId, duration) {
            var target = document.getElementById(targetId);
            if (!target) return;
            // Berechnung, um das Element mittig im Viewport zu platzieren
            var targetRect = target.getBoundingClientRect();
            var targetCenter = targetRect.top + window.pageYOffset + targetRect.height / 2;
            var targetPosition = targetCenter - window.innerHeight / 2;
            var startPosition = window.pageYOffset;
            var distance = targetPosition - startPosition;
            var startTime = null;

            function animation(currentTime) {
                if (startTime === null) startTime = currentTime;
                var timeElapsed = currentTime - startTime;
                var run = ease(timeElapsed, startPosition, distance, duration);
                window.scrollTo(0, run);
                if (timeElapsed < duration) requestAnimationFrame(animation);
            }

            // easeInOutQuad für sanfte Animation
            function ease(t, b, c, d) {
                t /= d/2;
                if (t < 1) return c/2*t*t + b;
                t--;
                return -c/2 * (t*(t-2) - 1) + b;
            }

            requestAnimationFrame(animation);
        }

        // Smooth scrolling für alle Links, die auf "#kontakt" verweisen
        document.querySelectorAll('a[href="#kontakt"]').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                // Passe hier die Dauer (in ms) an, um die Scrollgeschwindigkeit zu ändern
                var scrollDuration = 1500; // 1500ms = 1,5 Sekunden
                smoothScroll('kontakt', scrollDuration);
            });
        });
    </script>
</body>

<section class="about-me">
    <div class="about-me-container">
        <div class="about-me-image">
            <img src="images/Profilbild_1.JPG" alt="Bild von mir">
        </div>
        <div class="about-me-text">
            <h2>Über mich</h2>
            <p>Ich bin Erik Bartho, ein 23-jähriger professioneller Videograf und Fotograf mit einer Leidenschaft für fesselnde visuelle Geschichten. 
                Ich habe mich auf Immobilien spezialisiert und erstelle beeindruckende Videos für Social Media, die die besten Merkmale von Häusern, Wohnungen 
                und Immobilien hervorheben, um potenzielle Käufer anzuziehen und den Verkaufsprozess zu beschleunigen.
            </p>
        </div>
    </div>
</section>

<section class="partner-logos">
    <h2>Unsere Partner</h2>
    <div class="logo-container">
      <img src="Images/Negra_Logo_final_weiß_ohne_Ornament.png" alt="Unternehmen 1" class="logo">
      <img src="Images/Sandberg_Estates_Logo_Weiß.png" alt="Unternehmen 2" class="logo">
      <img src="Images/B-S-Technic_Logo-erik.png" alt="Unternehmen 3" class="logo">
      <img src="logo4.png" alt="Unternehmen 4" class="logo">
      <img src="logo5.png" alt="Unternehmen 5" class="logo">
    </div>
  </section>

<div class="contact-form" id="kontakt">
    <h2>Kontaktformular</h2>


<form id="contactForm" method="POST" action="contact.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Dein Name" required>

    <label for="email">E-Mail:</label>
    <input type="email" id="email" name="email" placeholder="Deine E-Mail" required>

    <label for="subject">Betreff:</label>
    <input type="text" id="subject" name="subject" placeholder="Betreff" required>

    <label for="message">Nachricht:</label>
    <textarea id="message" name="message" rows="6" placeholder="Deine Nachricht" required></textarea>

    <input type="submit" value="Senden">
</form>

<p id="successMessage"></p>

<script>
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("contactForm").addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent default form submission

        let formData = new FormData(this);
        let successMessage = document.getElementById("successMessage");

        fetch("contact.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            successMessage.textContent = data.message;
            successMessage.style.color = data.status === "success" ? "green" : "red";
            if (data.status === "success") {
                document.getElementById("contactForm").reset();
            }
        })
        .catch(error => {
            successMessage.textContent = "Ein Fehler ist aufgetreten.";
            successMessage.style.color = "red";
        });
    });
});
</script>



</div>

<section class="gallery-section">
    <h2>Galerie</h2>
    <div class="gallery">
        <div class="gallery-row">
            <img src="Images/Erik_Bartho_Website_Foto_10.jpg" alt="Drohnen Immobilienaufnahme High Qualtiy"> 
            <img src="Images/Erik_Bartho_Website_Foto_6.jpg" alt="Instagram Content Produktion High Quality">
            <img src="Images/Erik_Bartho_Website_Foto_11.jpg" alt="Drohnen Immobilienaufnahme High Qualtiy">
            <img src="Images/000287230024.JPG" alt="High Quality Auto Fotos">
            <img src="Images/000287230027.jpg" alt="High Quality Auto Fotos">
            <img src="Images/000287230016.JPG" alt="High Quality Auto Fotos">
        </div>
        <div class="gallery-row hidden">
            <img src="Images/Erik_Bartho_Website_Foto_4.jpg" alt="Instagram Content Produktion High Quality">
            <img src="Images/Erik_Bartho_Website_Foto_7.jpg" alt="Instagram Content Produktion High Quality">
            <img src="Images/Erik_Bartho_Website_Foto_1.jpg" alt="High Quality Auto Fotos">
            <img src="Images/000287230011.JPG" alt="High Quality Auto Fotos">
        </div>
    </div>
</section>

<footer class="site-footer">
    <hr>
    <!-- Das Logo als klickbarer Link -->
    <a href="#" class="scroll-to-top">
        <img src="Images/Erik_Bartho_Media_Logo_WeißaNichts_500x500.png" alt="Logo" class="footer-logo">
    </a>
    <div class="footer-content">
        <p>© 2025 Erik Bartho Media</p>
        <nav class="footer-nav">
            <a href="impressum.html">Impressum</a>
            <a href="impressum.html">Datenschutz</a>
            <a href="impressum.html">AGB</a>
        </nav>
    </div>
</footer>

<style>
    .site-footer {
        background-color: none; 
        color: #e2e2d2;
        padding: 20px 0;
        text-align: center;
        font-size: 14px;
        margin: 0 auto;
        margin-bottom: 20px;
    }
    .site-footer hr {
        border: none;
        height: 2px;
        background-color: #e2e2d2;
        width: calc(100% - 40px); /* 20px Abstand links und rechts */
        margin: 0 auto 15px auto;
    }
    .footer-logo {
        width: 80px;  /* Passe die Größe nach Bedarf an */
        height: auto;
        margin-bottom: 15px;
	    margin-top: 30px;
        transition: transform 0.3s ease; /* Sanfter Übergang */
    }
    .footer-logo:hover {
        transform: scale(1.08); /* Leichtes Vergrößern beim Hover */
    }
    .footer-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        width: 100%;
    }
    .footer-nav {
        display: flex;
        justify-content: center;
        gap: 15px;
    }
    .footer-nav a {
        color: #e2e2d2;
        text-decoration: none;
    }
    .footer-nav a:hover {
        text-decoration: underline;
    }
</style>
<script>
    document.querySelector('.scroll-to-top').addEventListener('click', function(e) {
        e.preventDefault();
        smoothScrollToTop(1500); // Dauer in ms, hier 1,5 Sekunden
    });
    
    function smoothScrollToTop(duration) {
        var startPosition = window.pageYOffset;
        var distance = startPosition; // da wir bis 0 scrollen möchten
        var startTime = null;
        
        function animation(currentTime) {
            if (startTime === null) startTime = currentTime;
            var timeElapsed = currentTime - startTime;
            var run = ease(timeElapsed, startPosition, -distance, duration);
            window.scrollTo(0, run);
            if (timeElapsed < duration) requestAnimationFrame(animation);
        }
        
        function ease(t, b, c, d) {
            t /= d / 2;
            if (t < 1) return c / 2 * t * t + b;
            t--;
            return -c / 2 * (t * (t - 2) - 1) + b;
        }
        
        requestAnimationFrame(animation);
    }
</script>





</html>
