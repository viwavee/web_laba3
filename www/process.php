<?php
session_start();

$username = htmlspecialchars($_POST['username'] ?? '');
$ticket = htmlspecialchars($_POST['ticket'] ?? '');
$genre = htmlspecialchars($_POST['genre'] ?? '');
$period = htmlspecialchars($_POST['period'] ?? '');
$ebook = isset($_POST['ebook']) ? 'yes' : 'no';

$_SESSION['username'] = $username;
$_SESSION['ticket'] = $ticket;
$_SESSION['genre'] = $genre;
$_SESSION['ebook'] = $ebook;
$_SESSION['period'] = $period;

header("Location: index.php");
exit();
?>