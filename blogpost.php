<?php
    include "config.php";

    if(isset($_GET["postid"])){
        $icerik = mysqli_query($db,"SELECT * FROM posts WHERE post_id = '".$_GET["postid"]."'");

        $icerik = mysqli_fetch_array($icerik);

        $title = $icerik["post_title"];
        $content = $icerik["post_content"];


    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Blogging</title>
  </head>
  <body>
    <div id="navbar">
        <ul>
            <li>
                <a href="index.php">ANASAYFA</a>
            </li>
            <li>
                <a href="about.php">HAKKIMIZDA</a>
            </li>
            <li>
                <a href="blogs.php">BLOG</a>
            </li>
            <li>
                <a href="basin.php">BASINDA BİZ</a>
            </li>
            <li>
                <a href="iletisim.php">İLETİŞİM</a>
            </li>
            <li>
                <a href="giris.php">GİRİŞ YAP</a>
            </li>
        </ul>
    </div>

    <nav>
        <div id="logo">
            <a href="#">
                <img src="img/ciloglu.png" alt="Blogging Logo">
            </a>
        </div>

        <div id="menu-icon">
            <i class = "fas fa-bars"></i>
        </div>

        <ul>
            <li>
                <a class = "active" href="index.php">ANASAYFA</a>
            </li>
            <li>
                <a href="about.php">HAKKIMIZDA</a>
            </li>
            <li>
                <a href="blogs.php">BLOGLAR</a>
            </li>
            <li>
                <a href="basin.php">BASINDA BİZ</a>
            </li>
            <li>
                <a href="iletisim.php">İLETİŞİM</a>
            </li>
            <li>
                <a href="giris.php">GİRİŞ YAP</a>
            </li>
        </ul>
    </nav>


    <main>

        <h2 class="page-heading"> <?php echo $title; ?></h2>
        <div id="post-container">
            <section id="blogpost">
                <div class="card">
                    <div class="card-meta-blogpost">
                         Admin tarafından paylaşıldı
                         
                    </div>
                    <div class="card-image">
                        <img src="img/63.jpg    " alt="Card Image">
                    </div>
                    <div class="card-description">
                        <h3><?php echo $title;?></h3>
                        <p>
                            <?php
                                echo $content;
                            ?>
                        </p>
                    </div>

                    

                </div>
               
            </section>

        </div>
        <footer>
            <div id="left-footer">
                <h3>
                    Bizimle İletişime Geçin
                </h3>
                <p>
                    <ul>
                        <li>
                            <a href="index.php">Anasayfa</a>
                        </li>
                        <li>
                            <a href="about.php">Hakkımızda</a>
                        </li>
                        <li>
                            <a href="Kisisel_Verilerin_Korunması.docx">Kişisel Verilerin Korunması</a>
                        </li>
                        <li>
                            <a href="blogs.php">Bloglar</a>
                        </li>
                        <li>
                            <a href="basin.php">Basında Biz</a>
                        </li>
                        <li>
                            <a href="iletisim.php">İletişim</a>
                        </li>
                        <li>
                            <a href="message.php">Mesaj Gönder</a>
                        </li>
                            
                    </ul>
                </p>
            </div>


            <div id="right-footer">
                <h3>
                    Bizi Takip Edin
                </h3>
                <div id="social-media-footer">
                    <ul>
                        <li>
                            <a href="https://www.facebook.com/cilogluhandels">
                                <i class = "fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/cilogluhandels/">
                                <i class = "fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://tr.linkedin.com/company/ciloglu-handels-gmbh?trk=public_profile_experience-item_profile-section-card_image-click">
                                <i class = "fab fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>
                    © 2024 CILOGLU HANDLES GMBH-Caretta Software
                </p>

            </div>
        </footer>
    </main>
    <script src="main.js"></script>
  </body>
</html>
