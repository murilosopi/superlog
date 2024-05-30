<?php
namespace App\Utils;

class Helper
{
    public static function debug($dados) {
        echo '<pre>';
        print_r($dados);
        echo '</pre>';
    }
}
