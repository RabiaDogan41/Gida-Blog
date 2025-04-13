<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
  />
  
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <form action="login.php" method="post">
        <img src="img/caretta.png" alt="">
        <h2>
            Blog Eklemek için <br>Giriş Yap
        </h2>
        <?php
            if(isset($_GET['error'])){ ?>
            <p class="error">
                <?php
                echo $_GET['error'];
                ?>
            </p>
        <?php  }?>
        <label>Kullanıcı Adı: </label>
        <input type="text" name="uname" placeholder="User Name"> <br>

        <label>Parola: </label>
        <input type="password" name="password" placeholder="Password"> <br>
        
        <button type="submit">Giriş Yap</button>
        <style>
            
            body{
                background:url("img/3.jpg");
                display:flex;
                justify-content:center;
                align-items:center;
                height:100vh;
                margin:0;
                background-size:cover;
                background-repeat:no-repeat;
                flex-direction:column;
            }
            * {
                font-family:Arial, Helvetica, sans-serif;
                box-sizing:border-box;
            }
            form{
                width:500px;
                border: 2px solid #ccc;
                padding:40px;
                background-color: rgba(255, 255, 255, 0.5);
                border-radius:15px;
            }
            form img{
                width:125px;
                height: auto;
                margin-left:auto;
                margin-right:auto;
                display:block;  
                
            }
            form h2{
                margin-top:20px;
            }
            h2 {
                text-align:center;
                margin-bottom:40px;
                font-size:36px;
                font-family:"Roboto";
                color:#333;
            }
            input{
                display:block;
                border:2px solid #ccc;
                width:95%;
                padding:20px;
                margin:10px auto;
                border-radius: 5px;
            }
            label{
                color:#333;
                font-size:20px;
                padding:10px;
                font-family:'Roboto';
            }
            button{
                float:right;
                background:#555;
                padding:15px 25px;
                color:#333;
                border-radius:5px;
                margin-right:10px;
                border:none;
                font-size:16px;
                font-family:'Roboto';
            }
            button:hover{
                color:aliceblue;
                opacity:.7;
            }
            .error{
                background:#333;
                color:white;
                padding:10px;
                width:95%;  
                border-radius:5px;
                margin:20px auto;
                font-size:16px;
            }
            
        </style>
    </form>
</body>
</html>
