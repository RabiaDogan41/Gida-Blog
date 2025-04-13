<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Blogging</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Navbar stili */
        #navbar ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
            background: #333;
        }

        #navbar ul li {
            margin: 0 15px;
        }

        #navbar ul li a {
            color: white;
            text-decoration: none;
            padding: 15px 0;
            display: block;
        }

        /* Ana içerik stili */
        main {
            padding: 20px;
            text-align: center;
        }

        .page-heading {
            text-align: center;
            font-size: 20px;
            margin-top: 10px;
            color: #333;
        }

        .contact-container {
            text-align: center;
            margin: 60px 0;
        }

        .contact-container h3 {
            font-size: 2em;
            color: #333;
        }

        .contact-container iframe {
            border: 0;
            width: 80%;
            height: 450px;
            margin: 20px 0;
        }

        .contact-container .contact-details {
            font-size: 1.2em;
            color: #555;
            text-align: center;
        }

        .contact-details .address {
            font-size: 1.5em;
            color: #333;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .contact-details .address:hover {
            color: #333; /* Üzerine gelindiğinde değişecek renk */
        }

        /* Footer stil */
        footer {
            background: #333;
            color: white;
            padding: 20px 0;
            display: flex;
            justify-content: space-around;
        }

        footer h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        footer p, footer ul {
            text-align: center;
            list-style: none;
            padding: 0;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer #left-footer, footer #right-footer {
            flex: 1;
        }

        footer #social-media-footer ul {
            display: flex;
            justify-content: center;
        }

        footer #social-media-footer ul li {
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <div id="navbar">
        <ul>
            <li><a href="index.php">ANASAYFA</a></li>
            <li><a href="about.php">HAKKIMIZDA</a></li>
            <li><a href="blogs.php">BLOG</a></li>
            <li><a href="basin.php">BASINDA BİZ</a></li>
            <li><a href="iletisim.php">İLETİŞİM</a></li>
            <li><a href="#">GİRİŞ YAP</a></li>
        </ul>
    </div>

    <nav>
        <div id="logo">
            <a href="#">
                <img src="img/ciloglu.png" alt="Blogging Logo">
            </a>
        </div>

        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>

        <ul>
            <li><a class="active" href="index.php">ANASAYFA</a></li>
            <li><a href="about.php">HAKKIMIZDA</a></li>
            <li><a href="blogs.php">BLOGLAR</a></li>
            <li><a href="basin.php">BASINDA BİZ</a></li>
            <li><a href="iletisim.php">İLETİŞİM</a></li>
            <li><a href="giris.php">GİRİŞ YAP</a></li>
            
        </ul>
    </nav>

    <main>
        
        <div class="contact-container">
            <h3>Bize Ulaşın!</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2636.5757384811227!2d8.9141493!3d48.6371002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47974c37deea3655%3A0xc14bef0a888201c2!2sCiloglu%20Handels%20GmbH!5e0!3m2!1str!2str!4v1722843127256!5m2!1str!2str" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="contact-details">
            <h2 class="page-heading"><br>Adreslerimiz</h2>
                <p>Çiloğlu Türkiye: <br>
                İtosb Mah 12. Cd No 5 34956 Tepeören Osb Tuzla - İstanbul<br><br> Telefon: +90 0216 693 16 25 - 26</p>
                <p><br>Çiloğlu Almanya Depo:<br>
                Dieselstr. 5 71116 Gärtringen, Almanya</p>
                <p>Telefon: +49 07034 25233 0</p>
            </div>
        </div>
    </main>

    <footer>
        <div id="left-footer">
            <h3>Bizimle İletişime Geçin</h3>
            <ul>
                <li><a href="index.php">Anasayfa</a></li>
                <li><a href="about.php">Hakkımızda</a></li>
                <li><a href="Kisisel_Verilerin_Korunması.docx">Kişisel Verilerin Korunması</a></li>
                <li><a href="blogs.php">Bloglar</a></li>
                <li><a href="basin.php">Basında Biz</a></li>
                <li><a href="iletisim.php">İletişim</a></li>
                <li><a href="message.php">Mesaj Gönder</a></li>
            </ul>
        </div>

        <div id="right-footer">
            <h3>Bizi Takip Edin</h3>
            <div id="social-media-footer">
                <ul>
                    <li><a href="https://www.facebook.com/cilogluhandels"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/cilogluhandels/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://tr.linkedin.com/company/ciloglu-handels-gmbh?trk=public_profile_experience-item_profile-section-card_image-click"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
            <p>© 2024 CILOGLU HANDLES GMBH - Caretta Software</p>
        </div>
    </footer>

    <script src="main.js"></script>
</body>
</html>
