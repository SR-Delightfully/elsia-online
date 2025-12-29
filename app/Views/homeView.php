<?php

use App\Helpers\ViewHelper;

$page_title = 'Home';
ViewHelper::loadHeader($page_title);

$categories  = $data['categories'] ?? [];
$collections = $data['collections'] ?? [];

$slides = 6;
?>

<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

<div id="hero-container" class="page center div-style-1">

</div>

<?php
ViewHelper::loadJsScripts();
ViewHelper::loadFooter();
?>