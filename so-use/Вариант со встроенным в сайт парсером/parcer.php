<?php          
    require "vendor/autoload.php";
    use PHPHtmlParser\Dom;
    $url="https://laminat-tula.ru";
    $dom = new Dom;
    $dom->loadFromFile('https://laminat-tula.ru/catalog/keramogranit/kerranova/-keramogranit-k-40-lr-light-beige-60x60-ot-kerranova-%28rossiya%29/');
    $itemimage = $dom->find('img.main-photo')->getAttribute('src');
    $h1 = $dom->find('h1')[0];
    $itemabouts = $dom->find('div.prop-wrapper p');
  ?>