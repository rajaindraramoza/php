<?php
interface MusicianInterface {

public function play();

}

class Guitarist 
implements
MusicianInterface {

public function play() {

echo "La La La";

}

}

$obj = new Guitarist();

$obj->play()
;


//output La La La
?>

