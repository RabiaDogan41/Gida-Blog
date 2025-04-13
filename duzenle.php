<?php 
    include "config.php";   
    session_start();

    if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){
        $id = $_GET["duzid"];
        $veri = mysqli_query($db,"SELECT * FROM posts WHERE post_id = '$id'");
        $veri = mysqli_fetch_array($veri);
    } else {
        header("Location: giris.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <title>İçerik Düzenle</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="container">
        <form method="post">
            <h1>İçerik Düzenle</h1>
            <input type="text" name="title" placeholder="Başlık Giriniz" value ="<?php echo $veri['post_title']; ?>" required>
            <textarea name="content" placeholder="İçerik Giriniz" required><?php echo $veri['post_content']; ?></textarea>

            <?php
                if(isset($_POST["sendPost"])) {
                    $title = $_POST["title"];
                    $content = $_POST["content"];

                    if($title != "" && $content != "") {
                        $ekle = mysqli_query($db,"UPDATE posts SET post_title='$title', post_content='$content' WHERE post_id='$id'");
                        if($ekle) {
                            echo '<div class="alert alert-success">Başarıyla Güncellendi</div>';
                            header("Refresh: 1; url=duzenle.php?duzid=$id");
                        } else {
                            echo '<div class="alert alert-danger">Güncelleme başarısız oldu!</div>';
                        }
                    } else {
                        echo '<div class="alert alert-danger">Boş alan bırakmayınız!</div>';
                    }
                }
            ?>
            <button type="submit" name="sendPost" class="btn btn-primary btn-block mb-4">Düzenle</button>
        </form>
        
        <a href="logout.php">Logout</a>
    </div>
    <style>
        body {
            background: url('img/4.jpg');
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
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;    
            min-height: 100vh;
            overflow: auto;
        }
        h1 {
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
            font-size: 16px;
        }
        button:hover {
            opacity: .7;
        }
        a {
            background: #555;
            padding: 10px 15px;
            color: #fff;
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
