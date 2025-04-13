<?php 
    include "config.php";   
?>

<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <title>Home</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="container">
        <h1>İçerik Paylaş</h1>
        
        <form method="post">

        <?php
         if(isset($_GET["silid"]))
         {
            $silid = $_GET["silid"];
            $sil = mysqli_query($db,"DELETE FROM posts WHERE post_id = '$silid'");

            if ($sil) {
                echo '<div class="alert alert-success">Silme işlemi başarılı!</div>';
            } else {
                echo '<div class="alert alert-danger">Silme işlemi başarısız!</div>';
            }

            header("Refresh: 1; url=home.php");
         }
        ?>

            <input type="text" name="title" placeholder="Başlık Giriniz" value ="<?php 
            if(isset($_POST["title"])) {
                echo $_POST["title"];
            }
            ?>" required>
            
            <textarea name="content" placeholder="İçerik Giriniz" required><?php
            if(isset($_POST["content"])) {
                echo $_POST["content"];
            }
            ?></textarea>

            <?php
                if(isset($_POST["sendPost"])) {
                    $title = $_POST["title"];
                    $content = $_POST["content"];

                    if($title != "" && $content !="") {
                        $ekle = mysqli_query($db,"INSERT INTO posts(post_title,post_content) values ('$title','$content')");
                        if ($ekle) {
                            echo '<div class="alert alert-success">Başarıyla eklendi!</div>';
                        } else {
                            echo '<div class="alert alert-danger">Ekleme işlemi başarısız!</div>';
                        }
                        header("Refresh: 1; url=home.php");
                    } else {
                        echo '<div class="alert alert-danger">Boş alan bırakmayınız!</div>';
                    }
                }
            ?>
            <button type="submit" name="sendPost" class="btn btn-primary btn-block mb-4">Paylaş</button>
        </form>
        
        <h2>İçerikler</h2>
        
        <?php

            $veri = mysqli_query($db,"SELECT * FROM posts ORDER BY post_id DESC");

            while($content = $veri->fetch_array()){
        ?>
        <!-- İçerikler burada listelenecek -->

        <div class="content-list">
            <div class="content-item">
                <h3><?php echo $content["post_title"]; ?></h3>
                <p><?php echo substr($content["post_content"],0,150),"...";  ?></p>

                <a href="duzenle.php?duzid=<?php echo $content["post_id"]?>">Düzenle</a>
                <a href="?silid=<?php echo $content["post_id"]; ?>">Sil</a>
            </div>
        </div>
        <?php
            };
        ?>
        
        <a href="logout.php">Anasayfa</a>
    </div>
    <style>
        body {
            background: url('img/3.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: whitesmoke;
            overflow: auto;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;    
            min-height: 100vh;
            overflow: auto;
        }
        h1, h2 {
            text-align: center;
            margin: 20px 0;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }
        input, textarea {
            width: 300px;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background: #555;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size:16px;
        }
        button:hover {
            opacity: .7;
        }
        .content-list {
            width: 80%;
        }
        .content-item {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            margin-bottom: 10px;
            border-radius: 10px;
        }
        .content-item h3, .content-item p {
            margin: 0 0 10px 0;
        }
        a {
            background: white;
            padding: 10px 15px;
            color: #333;
            border-radius: 5px;
            margin: 20px 0;
            text-decoration: none;
        }
        a:hover {
            opacity: .7;
        }
    </style>
</body>
</html>

<?php
} else {
    header("Location: giris.php");
    exit();
}
?>
