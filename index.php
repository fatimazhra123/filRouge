<?php

require_once 'autoload.php';


$home = new HomeController();

$pages = [
    'homecours',
    'Annonce',
    'SignIn',
    'signup',
    'dashboard',
    'Apropos',
   'contact',
   'offer',
 'Profile',
'Deconnexion',
    'students',
    'prof',
    'parents',
    'admin',
    'settings',
    'deleteParent',
    'updateParent',
    'deleteProf',
    'updateProf',
    'deleteStud',
    'updateStud',
  'notificationAnnonce',
  
  
  
];

if (isset($_GET['url'])) {
    if (in_array($_GET['url'], $pages)) {
        $page = $_GET['url'];
        $home->index($page);
    } else {
        include 'views/Includes/404.php';
    }
} else {
    $home->index('homecours');
}
