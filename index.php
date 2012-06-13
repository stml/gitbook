<?
echo 'go';
require_once('github/Autoloader.php');
Github_Autoloader::register();
$github = new Github_Client();
$user = $github->getUserApi()->show('stml');
echo $user;
?>