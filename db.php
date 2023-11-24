<?php
//var_dump($_POST);
$connect = mysqli_connect("localhost","root","","contact form");
if (isset($_POST))
{
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $sujet = $_POST['sujet'];
        $message = $_POST['message'];
        $sql = "INSERT INTO data(nom,email,sujet,message) VALUES ('$nom', '$email', '$sujet', '$message')";
        $result = mysqli_query($connect,$sql);

    if($result)
    {
        echo "<strong>Message envoyé</strong>";
    }
    else
    {
        echo "<strong>Erreur</strong>";
    }
}