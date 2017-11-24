<?php
/*
Plugin Name: Serbian Latin Permalinks
Plugin URI: https://wpaurora.com
Description: This plugins transliterates cyrillic URL slugs to latin characters.
Author: Uros Tasic
Version: 1.0.0
*/
function serbian_permalinks_title($text) {
    $expressions = array(
         "/[аА]/u" => "A",
         "/[бБ]/u" => "B",
         "/[вВ]/u" => "V",
         "/[гГ]/u" => "G",
         "/[дД]/u" => "D",
         "/[ђЂ]/u" => "DJ",
         "/[еЕ]/u" => "E",
         "/[жЖ]/u" => "Z",
         "/[зЗ]/u" => "Z",
         "/[иИ]/u" => "I",
         "/[јЈ]/u" => "J",
         "/[кК]/u" => "K",
         "/[лЛ]/u" => "L",
         "/[љЉ]/u" => "LJ",
         "/[мМ]/u" => "M",
         "/[нН]/u" => "N",
         "/[њЊ]/u" => "NJ",
         "/[оО]/u" => "O",
         "/[пП]/u" => "P",
         "/[рР]/u" => "R",
         "/[сС]/u" => "S",
         "/[шШ]/u" => "S",
         "/[тТ]/u" => "T",
         "/[ћЋ]/u" => "C",
         "/[уУ]/u" => "U",
         "/[фФ]/u" => "F",
         "/[хХ]/u" => "H",
         "/[цЦ]/u" => "C",
         "/[чЧ]/u" => "C",
         "/[џЏ]/u" => "DZ",
         "/[шШ]/u" => "S",
         );
    $text = preg_replace( array_keys($expressions), array_values($expressions), $text );
    return $text;
}
add_filter('sanitize_title', 'serbian_permalinks_title', 1);
?>
