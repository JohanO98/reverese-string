<?php

class reverse_string {
    public $str;

    public function reverse(string $str){
      echo strrev($str);
    }

}

$wow = new reverse_string();
$wow->reverse('Wowies');





