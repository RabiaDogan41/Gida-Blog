<?php 
    require 'message/messageconfig.php';
    if($_POST)
    {
        $adi_soyadi= $_POST['adi_soyadi'];
        $telefon= $_POST['telefon'];
        $email= $_POST['email'];
        $mesaj= $_POST['mesaj'];

        DB::insert("INSERT INTO iletisimtablo(adi_soyadi,telefon,email,mesaj) VALUES(?,?,?,?)",array(
            $adi_soyadi,
            $telefon,
            $email,
            $mesaj

        ));

        header("Location:message.php?success=1");

    }
 






?>