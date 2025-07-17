<?php
$artpop = 'Gaga正在唱 ARTPOP 的 Applause';
$mayhem = 'Gaga正在唱 Mayhem 的 LoveDrug';
//  ..... more ......

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

// 水果 class
class Setlist
{
    //properties
    public $album;
    public $song;
    // private $color;


    // methods
    function play()
    {
        $text = "Gaga 正在唱 $this->album 的 $this->song<br>";
        echo $text;
    }
}

// 具象化
// object
$artpop = new Setlist();

// apple.name
// apple->name
// apple['name']
dd($artpop);

$artpop->album = "ARTPOP";
$artpop->song = "Applause";
$artpop->play();


$mayhem = new Setlist();
$mayhem->album = "Mayhem";
$mayhem->song = "LoveDrug";
$mayhem->play();


