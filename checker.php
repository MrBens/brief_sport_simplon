<?php
require_once 'functions.php';


if (isset($_GET['action']) && !empty($_GET['action'])) {
    $action = $_GET['action'];
    $referer = $_SERVER['HTTP_REFERER'];
    if (strpos($referer, 'contact.php')) {
        if (isset($_POST['nom'], $_POST['prenom'], $_POST['num'], $_POST['mail'], $_POST['sujet'], $_POST['message']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['num']) && !empty($_POST['mail']) && !empty($_POST['sujet']) && !empty($_POST['message'])) {
            
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $tel = $_POST['num'];
            $email = $_POST['mail'];
            $sujet = $_POST['sujet'];
            $message = $_POST['message'];
            
            if ($action == 'create') {
                $sql = "INSERT INTO messages (`nom`, `prenom`, `tel`, `mail`, `sujet`, `message`) VALUES ('$nom', '$prenom', '$tel', '$email', '$sujet', '$message')";  
            }
            elseif($action == 'update'){
                session_start();
                $id = $_SESSION['id'];
                $sql = "UPDATE messages SET nom ='$nom', prenom = '$prenom', tel = '$tel', mail = '$mail', sujet = '$sujet', message = '$message' WHERE id='$id'";
            }
        }
        require_once 'db.php';
        if (mysqli_query($sqli, $sql)) {
            header('location: messages.php');
        } else {
            echo 'error';
        }
    }elseif (strpos($referer, 'read.php')) {
        if ($action == 'delete') {
            require_once "db.php";
            session_start();
            $id = $_SESSION['id'];
            $sql = "DELETE FROM messages WHERE id = $id";
            $query = mysqli_query($sqli, $sql);

            if ($query) {
                header("location: messages.php");
            } else {
                echo 'error';
            }
        }
    }
}