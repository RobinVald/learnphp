<?php
/*
function hello($name) {
    echo "Hello, $name!\n";
};

hello('Erlemd');
hello('Vassar');
*/


class Box {
    protected $length;
    protected $height;
    protected $width;
    protected $material;
    public static $count;
    public function __construct($length, $height, $width) {
        $this -> length = $length;
        $this -> height = $height;
        $this -> width = $width;
    }

    public function volume() {
        var_dump(self::$count);
        return $this -> length * $this -> height * $this -> width;
    }
    public function getLength() {
        return $this -> length; 
    }
    public function setlength($length) {
        if($length > 0) {
            $this -> length = $length;
        }
    }
    public static function countup(){
        self::$count++;
    }
};

class MetalBox extends Box {
    public $weight;
    public function __construct($length, $height, $width) {
        $this -> length = $length;
        $this -> height = $height;
        $this -> width = $width;
        $this -> material = 'metal';
    }
}

$box = new MetalBox(1,1,1);

$box -> volume();

MetalBox::countup();

MetalBox::countup();

MetalBox::countup();

var_dump(MetalBox::$count)
/*
$box = new Box(4, 2, 3);
//$box -> length = 4;
//$box -> height = 2;
//$box -> width = 3;
var_dump($box -> volume());
var_dump($box);

$box2 = new Box(6, 4, 7);
//$box2 -> length = 6;
//$box2 -> height = 4;
//$box2 -> width = 7;
var_dump($box2 -> volume());
var_dump($box2);

$box -> material = 'wood';
$box2 = clone $box;
$box2 -> material = 'metal';
var_dump($box);
var_dump($box2);
*/
?>