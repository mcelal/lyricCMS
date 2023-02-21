<?php
/**
 * Created by PhpStorm.
 * User: mcelal
 * Date: 5.02.2017
 * Time: 15:45
 */

function slug($baslik){
    $bul = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '-');
    $yap = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', ' ');
    $perma = strtolower(str_replace($bul, $yap, $baslik));
    $perma = preg_replace("@[^A-Za-z0-9\-_]@i", ' ', $perma);
    $perma = trim(preg_replace('/\s+/',' ', $perma));
    $perma = str_replace(' ', '-', $perma);
    return $perma;
}