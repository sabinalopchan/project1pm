<?php

require_once "config/config.php";
//echo base_url('home');



$requestUri = isset($_GET['uri']) ? $_GET['uri'] : 'home';
$requestUri=str_replace('.php','',$requestUri);
$requestUri .=".php";


//require_once "frontend/pages/$requestUri";
?>

<?php
$pagePath=root_path('frontend/pages/'.$requestUri);
require_once root_path('/frontend/layouts/header.php');

if (file_exists($pagePath) && is_file($pagePath)){
    require_once $pagePath;
}else{
    echo "<h1>Sorry Page Not Found 404 {$requestUri}</h1>";
}
require_once root_path('/frontend/layouts/footer.php');
?>