<?php
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$data_nascita = $_POST['data_nascita'];
$email = $_POST['email'];
$username = $_POST['username'];

$password = $_POST['password'];
$password_corretta = "buongiorno";

if($password == $password_corretta){
    echo "Accesso consentito. Benvenuto " . $nome . " " . $cognome;
} else {
    echo "Accesso negato. Password errata.";
}

?>