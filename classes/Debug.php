<?php

namespace classes;

class Debug {
    
    public $data;

    public static function printer($data = '<b>ERROR! Данные для вывода DEBUG не заданы <br>') {
        if($data) {
                echo '<pre>';  
                var_dump($data);
                echo '</pre>';

        }
    }
}