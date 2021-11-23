<?php 

session_start();

// What languages do we support
$available_langs = array('tr','en','aze');

// Set our default language session
$_SESSION['lang'] = 'tr';

if(isset($_GET['lang']) && $_GET['lang'] != ''){
 // check if the language is one we support
 if(in_array($_GET['lang'], $available_langs))
 {      
   $_SESSION['lang'] = $_GET['lang']; // Set session
 }
}


require_once './langs/'.$_GET['lang'].'.php';


?>